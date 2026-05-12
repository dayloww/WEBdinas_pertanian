<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Banner Hero') }}
            </h2>
            <a href="{{ route('admin.banners.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all shadow-md">
                + Tambah Banner
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded-r-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($banners as $banner)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 flex flex-col">
                    <div class="relative h-48">
                        <img src="{{ $banner->image }}" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-4 right-4 flex space-x-2">
                            <a href="{{ route('admin.banners.edit', $banner) }}" class="p-2 bg-white/90 backdrop-blur shadow-lg rounded-lg text-blue-600 hover:bg-white transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </a>
                            <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" onsubmit="return confirm('Hapus banner ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 bg-white/90 backdrop-blur shadow-lg rounded-lg text-red-600 hover:bg-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span class="px-3 py-1 bg-black/50 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-widest rounded-full">Order: {{ $banner->order }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex-1">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $banner->title }}</h3>
                        <p class="text-sm text-gray-500 line-clamp-2">{{ $banner->subtitle }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
