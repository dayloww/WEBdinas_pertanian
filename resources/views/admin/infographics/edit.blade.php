<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Edit Infografis</h2>
            <p class="text-sm text-gray-500 mt-1">Perbarui judul, gambar, dan deskripsi infografis</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        @include('admin.infographics.partials.form', [
            'action' => route('admin.infographics.update', $infographic),
            'method' => 'PUT',
            'infographic' => $infographic,
            'submitLabel' => 'Perbarui Infografis',
        ])
    </div>
</x-app-layout>
