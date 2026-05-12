<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\SectorData;
use Illuminate\Http\Request;

class SectorDataController extends Controller
{
    public function index()
    {
        $sectorData = SectorData::with('sector')->orderBy('year', 'desc')->orderBy('month', 'desc')->get();
        return view('admin.sector-data.index', compact('sectorData'));
    }

    public function create()
    {
        $sectors = Sector::all();
        return view('admin.sector-data.create', compact('sectors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'label' => 'required|string',
            'value' => 'required|numeric',
            'unit' => 'required|string',
            'year' => 'required|integer',
            'month' => 'nullable|integer|between:1,12',
        ]);

        SectorData::create($request->all());

        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil ditambahkan.');
    }

    public function edit(SectorData $sectorDatum)
    {
        $sectors = Sector::all();
        return view('admin.sector-data.edit', ['data' => $sectorDatum, 'sectors' => $sectors]);
    }

    public function update(Request $request, SectorData $sectorDatum)
    {
        $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'label' => 'required|string',
            'value' => 'required|numeric',
            'unit' => 'required|string',
            'year' => 'required|integer',
            'month' => 'nullable|integer|between:1,12',
        ]);

        $sectorDatum->update($request->all());

        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil diperbarui.');
    }

    public function destroy(SectorData $sectorDatum)
    {
        $sectorDatum->delete();
        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil dihapus.');
    }
}
