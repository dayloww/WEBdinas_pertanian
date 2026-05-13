<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infographic;
use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function index()
    {
        $infographics = Infographic::latest()->get();

        return view('admin.infographics.index', compact('infographics'));
    }

    public function create()
    {
        return view('admin.infographics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|url|max:2048',
            'description' => 'nullable|string',
        ]);

        Infographic::create($validated);

        return redirect()->route('admin.infographics.index')->with('success', 'Infografis berhasil ditambahkan.');
    }

    public function show(Infographic $infographic)
    {
        return redirect()->route('admin.infographics.edit', $infographic);
    }

    public function edit(Infographic $infographic)
    {
        return view('admin.infographics.edit', compact('infographic'));
    }

    public function update(Request $request, Infographic $infographic)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|url|max:2048',
            'description' => 'nullable|string',
        ]);

        $infographic->update($validated);

        return redirect()->route('admin.infographics.index')->with('success', 'Infografis berhasil diperbarui.');
    }

    public function destroy(Infographic $infographic)
    {
        $infographic->delete();

        return redirect()->route('admin.infographics.index')->with('success', 'Infografis berhasil dihapus.');
    }
}
