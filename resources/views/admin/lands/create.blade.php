<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Tambah Data Lahan</h2>
            <p class="text-sm text-gray-500 mt-1">Input data lahan yang akan dipakai di dashboard admin</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        @include('admin.lands.partials.form', [
            'action' => route('admin.lands.store'),
            'method' => 'POST',
            'land' => null,
            'submitLabel' => 'Simpan Lahan',
        ])
    </div>
</x-app-layout>
