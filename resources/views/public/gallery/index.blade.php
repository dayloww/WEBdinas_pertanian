@extends('layouts.public')

@section('title', 'Galeri Kegiatan')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Galeri Kegiatan</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Dokumentasi berbagai kegiatan dan program Dinas Pertanian Kabupaten Kepulauan Sangihe.</p>
    </div>
</section>

<section class="py-24" x-data="{ selectedImage: null }">
    <div class="max-w-7xl mx-auto px-4">
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-6 space-y-6">
            @forelse($galleries as $item)
            <div class="relative group overflow-hidden rounded-[2rem] shadow-xl border border-slate-100 cursor-pointer" @click="selectedImage = '{{ $item->image }}'">
                <img src="{{ $item->image }}" class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $item->title }}">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity p-8 flex flex-col justify-end">
                    <h3 class="text-white font-bold text-sm uppercase tracking-tight">{{ $item->title }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20">
                <p class="text-slate-500">Belum ada foto dalam galeri.</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Modal Lightbox -->
    <template x-if="selectedImage">
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-sm" @click="selectedImage = null" @keydown.escape.window="selectedImage = null">
            <button class="absolute top-8 right-8 text-white hover:text-green-400 transition-colors">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <img :src="selectedImage" class="max-w-full max-h-[90vh] rounded-2xl shadow-2xl animate-zoomIn" alt="">
        </div>
    </template>
</section>

<style>
    @keyframes zoomIn {
        from { transform: scale(0.9); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    .animate-zoomIn {
        animation: zoomIn 0.3s ease-out forwards;
    }
</style>
@endsection
