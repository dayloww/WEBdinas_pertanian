<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Edit Data Statistik</h2>
            <p class="text-sm text-gray-500 mt-1">Perbarui data real untuk diagram peternakan admin</p>
        </div>
    </x-slot>

    <div class="max-w-5xl">
        @include('admin.sector-data.partials.form', [
            'action' => route('admin.sector-data.update', $data),
            'method' => 'PUT',
            'data' => $data,
            'submitLabel' => 'Perbarui Data',
        ])
    </div>
</x-app-layout>
