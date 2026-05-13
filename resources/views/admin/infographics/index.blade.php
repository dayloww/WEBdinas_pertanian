<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Infografis</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola daftar infografis untuk kebutuhan publikasi</p>
            </div>
            <a href="{{ route('admin.infographics.create') }}" class="px-6 py-3 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
                Tambah Infografis
            </a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-100 bg-green-50 px-6 py-4 text-sm font-semibold text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @forelse($infographics as $infographic)
            <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-900/5 border border-gray-50 overflow-hidden">
                <img src="{{ $infographic->image }}" alt="{{ $infographic->title }}" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900">{{ $infographic->title }}</h3>
                    <p class="text-sm text-gray-500 mt-3">{{ \Illuminate\Support\Str::limit($infographic->description, 100) }}</p>
                    <div class="mt-6 flex items-center justify-between">
                        <a href="{{ route('admin.infographics.edit', $infographic) }}" class="text-sm font-bold text-blue-600 hover:text-blue-700">Edit</a>
                        <form action="{{ route('admin.infographics.destroy', $infographic) }}" method="POST" onsubmit="return confirm('Hapus infografis ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm font-bold text-red-600 hover:text-red-700">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="md:col-span-2 xl:col-span-3 rounded-[2rem] border border-dashed border-slate-200 bg-white px-8 py-12 text-center text-sm text-gray-500">
                Belum ada infografis. Silakan tambahkan data terlebih dahulu.
            </div>
        @endforelse
    </div>
</x-app-layout>
