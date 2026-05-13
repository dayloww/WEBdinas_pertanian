<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Tambah Data Statistik</h2>
            <p class="text-sm text-gray-500 mt-1">Input angka statistik produksi atau populasi baru</p>
        </div>
    </x-slot>

    <div class="max-w-5xl">
        @include('admin.sector-data.partials.form', [
            'action' => route('admin.sector-data.store'),
            'method' => 'POST',
            'data' => null,
            'submitLabel' => 'Simpan Data',
        ])
    </div>
</x-app-layout>
