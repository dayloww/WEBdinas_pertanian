<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Tambah Infografis</h2>
            <p class="text-sm text-gray-500 mt-1">Simpan tautan gambar infografis yang ingin dipublikasikan</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        @include('admin.infographics.partials.form', [
            'action' => route('admin.infographics.store'),
            'method' => 'POST',
            'infographic' => null,
            'submitLabel' => 'Simpan Infografis',
        ])
    </div>
</x-app-layout>
