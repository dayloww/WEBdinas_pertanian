<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\SectorData;
use App\Models\Post;
use App\Models\Land;
use App\Models\District;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $currentYear = date('Y');

        // Stat Cards
        $totalLahan = Land::count();
        $totalProduksi = SectorData::where('year', $currentYear)->sum('value');
        
        $unggulan = SectorData::select('sector_id', DB::raw('SUM(value) as total'))
            ->groupBy('sector_id')
            ->orderBy('total', 'desc')
            ->first();
        $komoditasUnggulan = $unggulan ? Sector::find($unggulan->sector_id)->name : '-';
        
        $totalBerita = Post::where('status', 'published')->count();

        // Trend Produksi 5 Tahun
        $trendData = SectorData::select('year', DB::raw('SUM(value) as total'))
            ->groupBy('year')
            ->orderBy('year', 'asc')
            ->take(5)
            ->get();

        // Komposisi Produksi per Komoditas (Donut)
        $komposisi = SectorData::with('sector')
            ->select('sector_id', DB::raw('SUM(value) as total'))
            ->where('year', $currentYear)
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

        return view('dashboard', compact(
            'totalLahan', 'totalProduksi', 'komoditasUnggulan', 'totalBerita',
            'trendData', 'komposisi', 'sebaranLahan', 'latestNews', 'lands'
        ));
    }
}
