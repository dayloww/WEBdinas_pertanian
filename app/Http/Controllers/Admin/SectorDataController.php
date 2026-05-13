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
        $sectorData = SectorData::with('sector')
            ->orderBy('year', 'desc')
            ->orderBy('dataset_type')
            ->orderBy('district_name')
            ->orderBy('animal_name')
            ->get();

        return view('admin.sector-data.index', compact('sectorData'));
    }

    public function create()
    {
        $sectors = Sector::all();
        $datasetTypes = SectorData::datasetTypeOptions();
        $districts = SectorData::districtOptions();

        return view('admin.sector-data.create', compact('sectors', 'datasetTypes', 'districts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'dataset_type' => 'required|in:' . implode(',', array_keys(SectorData::datasetTypeOptions())),
            'animal_name' => 'required|string|max:255',
            'district_name' => 'nullable|string|max:255',
            'show_on_admin_dashboard' => 'nullable|boolean',
            'show_on_front' => 'nullable|boolean',
            'front_order' => 'nullable|integer|min:0',
            'label' => 'nullable|string|max:255',
            'value' => 'required|numeric',
            'unit' => 'required|string',
            'source' => 'nullable|string',
            'year' => 'required|integer',
            'month' => 'nullable|integer|between:1,12',
        ]);

        if ($validated['dataset_type'] === SectorData::TYPE_DAGING) {
            $validated['district_name'] = null;
        }

        $validated['show_on_admin_dashboard'] = $request->boolean('show_on_admin_dashboard');
        $validated['show_on_front'] = $request->boolean('show_on_front');
        $validated['front_order'] = (int) ($validated['front_order'] ?? 0);
        $validated['label'] = $validated['label'] ?: $validated['animal_name'];

        SectorData::create($validated);

        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil ditambahkan.');
    }

    public function edit(SectorData $sectorDatum)
    {
        $sectors = Sector::all();
        $datasetTypes = SectorData::datasetTypeOptions();
        $districts = SectorData::districtOptions();

        return view('admin.sector-data.edit', [
            'data' => $sectorDatum,
            'sectors' => $sectors,
            'datasetTypes' => $datasetTypes,
            'districts' => $districts,
        ]);
    }

    public function update(Request $request, SectorData $sectorDatum)
    {
        $validated = $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'dataset_type' => 'required|in:' . implode(',', array_keys(SectorData::datasetTypeOptions())),
            'animal_name' => 'required|string|max:255',
            'district_name' => 'nullable|string|max:255',
            'show_on_admin_dashboard' => 'nullable|boolean',
            'show_on_front' => 'nullable|boolean',
            'front_order' => 'nullable|integer|min:0',
            'label' => 'nullable|string|max:255',
            'value' => 'required|numeric',
            'unit' => 'required|string',
            'source' => 'nullable|string',
            'year' => 'required|integer',
            'month' => 'nullable|integer|between:1,12',
        ]);

        if ($validated['dataset_type'] === SectorData::TYPE_DAGING) {
            $validated['district_name'] = null;
        }

        $validated['show_on_admin_dashboard'] = $request->boolean('show_on_admin_dashboard');
        $validated['show_on_front'] = $request->boolean('show_on_front');
        $validated['front_order'] = (int) ($validated['front_order'] ?? 0);
        $validated['label'] = $validated['label'] ?: $validated['animal_name'];

        $sectorDatum->update($validated);

        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil diperbarui.');
    }

    public function destroy(SectorData $sectorDatum)
    {
        $sectorDatum->delete();
        return redirect()->route('admin.sector-data.index')->with('success', 'Data statistik berhasil dihapus.');
    }
}
