<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\SectorData;
use App\Models\Post;
use App\Models\Program;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $sectors = Sector::with(['data' => function($query) {
            $query->orderBy('year', 'asc')->orderBy('month', 'asc');
        }])->get();

        $stats = [
            'posts' => Post::count(),
            'programs' => Program::count(),
            'galleries' => Gallery::count(),
            'sectors' => Sector::count(),
        ];

        // Calculate trends
        $trends = [];
        $allData = SectorData::with('sector')->get()->groupBy('label');

        foreach ($allData as $label => $items) {
            $sortedItems = $items->sortByDesc('year')->values();
            if ($sortedItems->count() >= 2) {
                $current = $sortedItems[0];
                $previous = $sortedItems[1];
                $diff = $current->value - $previous->value;
                $percent = $previous->value > 0 ? ($diff / $previous->value) * 100 : 0;
                
                $trends[] = [
                    'label' => $label,
                    'sector' => $current->sector->name,
                    'current_value' => $current->value,
                    'previous_value' => $previous->value,
                    'diff' => $diff,
                    'percent' => $percent,
                    'unit' => $current->unit,
                    'status' => $diff >= 0 ? 'up' : 'down'
                ];
            }
        }

        // Comparison Data for Bar Chart (Latest year)
        $latestYear = SectorData::max('year');
        $comparisonData = SectorData::where('year', $latestYear)
            ->get()
            ->groupBy('sector_id')
            ->map(function($items) {
                return $items->sum('value');
            });

        return view('dashboard', compact('sectors', 'stats', 'trends', 'latestYear', 'comparisonData'));
    }
}
