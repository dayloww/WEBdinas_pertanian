<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\SectorData;
use App\Models\Post;
use App\Models\Land;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $latestDataYear = (int) (SectorData::max('year') ?: date('Y'));

        // Stat Cards
        $totalLahan = Land::count();
        $totalProduksi = SectorData::where('year', $latestDataYear)->sum('value');
        
        $unggulan = SectorData::select('sector_id', DB::raw('SUM(value) as total'))
            ->groupBy('sector_id')
            ->orderBy('total', 'desc')
            ->first();
        $komoditasUnggulan = $unggulan ? Sector::find($unggulan->sector_id)->name : '-';
        
        $totalBerita = Post::where('status', 'published')->count();

        // Trend Produksi 5 Tahun
        $trendData = SectorData::select('year', DB::raw('SUM(value) as total'))
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->take(5)
            ->get()
            ->sortBy('year')
            ->values();

        // Komposisi Produksi per Komoditas (Donut)
        $komposisi = SectorData::with('sector')
            ->select('sector_id', DB::raw('SUM(value) as total'))
            ->where('year', $latestDataYear)
            ->groupBy('sector_id')
            ->get();

        // Sebaran Lahan per Kecamatan (Bar)
        $sebaranLahan = Land::with('district')
            ->select('district_id', DB::raw('SUM(area) as total_area'))
            ->groupBy('district_id')
            ->get();

        // Latest News
        $latestNews = Post::latest()->take(5)->get();

        // Map Data
        $lands = Land::with(['district', 'sector'])->get();

        $livestockCharts = $this->getLivestockCharts();

        return view('dashboard', compact(
            'totalLahan', 'totalProduksi', 'komoditasUnggulan', 'totalBerita',
            'trendData', 'komposisi', 'sebaranLahan', 'latestNews', 'lands', 'livestockCharts', 'latestDataYear'
        ));
    }

    private function getLivestockCharts(): array
    {
        $peternakanId = Sector::query()->where('slug', 'peternakan')->value('id');

        if (! $peternakanId) {
            return $this->emptyLivestockCharts();
        }

        return [
            SectorData::TYPE_UNGGAS => $this->buildDistrictDatasetFromRecords(
                'Unggas',
                'Populasi unggas menurut kecamatan dan jenis unggas',
                'Ekor',
                SectorData::query()
                    ->where('sector_id', $peternakanId)
                    ->where('dataset_type', SectorData::TYPE_UNGGAS)
                    ->where('show_on_admin_dashboard', true)
                    ->orderBy('year')
                    ->get(),
                ['#2563eb', '#f59e0b', '#16a34a', '#7c3aed', '#0f766e'],
            ),
            SectorData::TYPE_TERNAK => $this->buildDistrictDatasetFromRecords(
                'Ternak',
                'Populasi ternak menurut kecamatan dan jenis ternak',
                'Ekor',
                SectorData::query()
                    ->where('sector_id', $peternakanId)
                    ->where('dataset_type', SectorData::TYPE_TERNAK)
                    ->where('show_on_admin_dashboard', true)
                    ->orderBy('year')
                    ->get(),
                ['#0f766e', '#f97316', '#dc2626', '#7c3aed'],
            ),
            SectorData::TYPE_DAGING => $this->buildYearDatasetFromRecords(
                'Daging',
                'Produksi daging di Kabupaten Kepulauan Sangihe',
                'Kg',
                SectorData::query()
                    ->where('sector_id', $peternakanId)
                    ->where('dataset_type', SectorData::TYPE_DAGING)
                    ->where('show_on_admin_dashboard', true)
                    ->orderBy('year')
                    ->get(),
                ['#1d4ed8', '#0891b2', '#dc2626', '#f59e0b', '#7c3aed', '#16a34a', '#9333ea'],
            ),
        ];
    }

    private function buildDistrictDatasetFromRecords(
        string $label,
        string $title,
        string $unit,
        $records,
        array $colors,
    ): array {
        $districts = $records
            ->pluck('district_name')
            ->filter()
            ->unique()
            ->values()
            ->all();
        $animals = $records
            ->pluck('animal_name')
            ->filter()
            ->unique()
            ->values()
            ->all();
        $rows = [];

        foreach ($districts as $district) {
            $values = [];

            foreach ($animals as $animal) {
                $values[$animal] = (float) $records
                    ->where('district_name', $district)
                    ->where('animal_name', $animal)
                    ->sum('value');
            }

            $rows[] = [
                'label' => $district,
                'values' => $values,
                'total' => array_sum($values),
            ];
        }

        return [
            'label' => $label,
            'title' => $title,
            'unit' => $unit,
            'type' => 'bar',
            'labels' => $districts,
            'animalLabels' => $animals,
            'datasets' => $this->buildChartDatasetsFromRecords($records, $animals, $districts, $colors),
            'rows' => $rows,
            'totals' => $this->buildTotalsFromRecords($records, $animals),
        ];
    }

    private function buildYearDatasetFromRecords(
        string $label,
        string $title,
        string $unit,
        $records,
        array $colors,
    ): array {
        $years = $records
            ->pluck('year')
            ->map(fn ($year) => (string) $year)
            ->unique()
            ->values()
            ->all();
        $animals = $records
            ->pluck('animal_name')
            ->filter()
            ->unique()
            ->values()
            ->all();
        $rows = [];

        foreach ($animals as $animal) {
            $values = [];

            foreach ($years as $year) {
                $values[$year] = (float) $records
                    ->where('animal_name', $animal)
                    ->where('year', (int) $year)
                    ->sum('value');
            }

            $rows[] = [
                'label' => $animal,
                'values' => $values,
                'total' => array_sum($values),
            ];
        }

        return [
            'label' => $label,
            'title' => $title,
            'unit' => $unit,
            'type' => 'line',
            'labels' => $years,
            'animalLabels' => $years,
            'datasets' => $this->buildChartDatasetsFromRecords($records, $animals, $years, $colors, true),
            'rows' => $rows,
            'totals' => $this->buildTotalsFromRecords($records, $animals),
        ];
    }

    private function buildChartDatasetsFromRecords($records, array $animals, array $labels, array $colors, bool $isYear = false): array
    {
        $datasets = [];

        foreach ($animals as $index => $animal) {
            $values = [];

            foreach ($labels as $label) {
                $values[] = (float) $records
                    ->where('animal_name', $animal)
                    ->when(
                        $isYear,
                        fn ($query) => $query->where('year', (int) $label),
                        fn ($query) => $query->where('district_name', $label)
                    )
                    ->sum('value');
            }

            $datasets[] = [
                'label' => $animal,
                'data' => $values,
                'backgroundColor' => $colors[$index] ?? '#1a332a',
                'borderColor' => $colors[$index] ?? '#1a332a',
            ];
        }

        return $datasets;
    }

    private function buildTotalsFromRecords($records, array $animals): array
    {
        $totals = [];

        foreach ($animals as $animal) {
            $totals[] = [
                'label' => $animal,
                'value' => (float) $records->where('animal_name', $animal)->sum('value'),
            ];
        }

        usort($totals, fn ($left, $right) => $right['value'] <=> $left['value']);

        return $totals;
    }

    private function emptyLivestockCharts(): array
    {
        $empty = [
            'label' => 'Belum Ada Data',
            'title' => 'Belum ada data peternakan yang diinput admin',
            'unit' => 'Data',
            'type' => 'bar',
            'labels' => [],
            'animalLabels' => [],
            'datasets' => [],
            'rows' => [],
            'totals' => [],
        ];

        return [
            SectorData::TYPE_UNGGAS => array_merge($empty, ['label' => 'Unggas']),
            SectorData::TYPE_TERNAK => array_merge($empty, ['label' => 'Ternak']),
            SectorData::TYPE_DAGING => array_merge($empty, ['label' => 'Daging', 'type' => 'line']),
        ];
    }
}
