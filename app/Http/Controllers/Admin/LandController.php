<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Land;
use App\Models\Sector;
use Illuminate\Http\Request;

class LandController extends Controller
{
    public function index()
    {
        $lands = Land::with(['district', 'sector'])->latest()->get();

        return view('admin.lands.index', compact('lands'));
    }

    public function create()
    {
        $districts = District::orderBy('name')->get();
        $sectors = Sector::orderBy('name')->get();

        return view('admin.lands.create', compact('districts', 'sectors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'district_id' => 'required|exists:districts,id',
            'sector_id' => 'required|exists:sectors,id',
            'area' => 'required|numeric|min:0',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
        ]);

        Land::create($validated);

        return redirect()->route('admin.lands.index')->with('success', 'Data lahan berhasil ditambahkan.');
    }

    public function show(Land $land)
    {
        return redirect()->route('admin.lands.edit', $land);
    }

    public function edit(Land $land)
    {
        $districts = District::orderBy('name')->get();
        $sectors = Sector::orderBy('name')->get();

        return view('admin.lands.edit', compact('land', 'districts', 'sectors'));
    }

    public function update(Request $request, Land $land)
    {
        $validated = $request->validate([
            'district_id' => 'required|exists:districts,id',
            'sector_id' => 'required|exists:sectors,id',
            'area' => 'required|numeric|min:0',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
        ]);

        $land->update($validated);

        return redirect()->route('admin.lands.index')->with('success', 'Data lahan berhasil diperbarui.');
    }

    public function destroy(Land $land)
    {
        $land->delete();

        return redirect()->route('admin.lands.index')->with('success', 'Data lahan berhasil dihapus.');
    }
}
