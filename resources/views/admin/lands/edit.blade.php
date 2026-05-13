<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Edit Data Lahan</h2>
            <p class="text-sm text-gray-500 mt-1">Perbarui data lahan yang sudah tersimpan</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        @include('admin.lands.partials.form', [
            'action' => route('admin.lands.update', $land),
            'method' => 'PUT',
            'land' => $land,
            'submitLabel' => 'Perbarui Lahan',
        ])
    </div>
</x-app-layout>
