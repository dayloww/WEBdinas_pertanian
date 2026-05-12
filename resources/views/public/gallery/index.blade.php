@extends('layouts.public')

@section('title', 'Galeri Kegiatan')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1592419044706-39796d40f98c?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Lensa Pertanian</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Galeri <span class="text-green-500">Visual</span> Sangihe</h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-40 bg-slate-50" x-data="{ selectedImage: null }">
    <div class="max-w-7xl mx-auto px-6">
        <div class="columns-1 sm:columns-2 lg:columns-3 gap-12 space-y-12">
            @forelse($galleries as $index => $item)
            <div class="reveal relative group overflow-hidden rounded-[3.5rem] shadow-2xl shadow-slate-900/5 border border-white cursor-pointer transition-all duration-700 hover:-translate-y-4" style="transition-delay: {{ $index * 100 }}ms;" @click="selectedImage = '{{ $item->image }}'">
                <img src="{{ $item->image }}" class="w-full h-auto object-cover grayscale-[0.3] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-1000" alt="{{ $item->title }}">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-0 group-hover:opacity-90 transition-opacity p-12 flex flex-col justify-end">
                    <p class="text-[10px] font-black text-green-400 uppercase tracking-[0.3em] mb-4">Dokumentasi</p>
                    <h3 class="text-white font-bold text-xl uppercase tracking-tighter leading-tight italic">{{ $item->title }}</h3>
                </div>
            </div>
            @empty
            <div class="reveal col-span-full text-center py-40">
                <div class="bg-white w-24 h-24 rounded-[2rem] flex items-center justify-center mx-auto mb-10 text-slate-200 shadow-xl">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">Belum ada dokumentasi visual.</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Modal Lightbox (Smooth) -->
    <template x-if="selectedImage">
        <div class="fixed inset-0 z-[100] flex items-center justify-center p-8 bg-slate-950/95 backdrop-blur-md" @click="selectedImage = null" @keydown.escape.window="selectedImage = null">
            <button class="absolute top-12 right-12 w-16 h-16 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-slate-950 transition-all">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <div class="max-w-6xl w-full">
                <img :src="selectedImage" class="w-full h-auto rounded-[3rem] shadow-[0_0_100px_rgba(34,197,94,0.2)] border border-white/10 animate-zoomIn" alt="">
            </div>
        </div>
    </template>
</section>

<style>
    @keyframes zoomIn {
        from { transform: scale(0.95); opacity: 0; filter: blur(10px); }
        to { transform: scale(1); opacity: 1; filter: blur(0); }
    }
    .animate-zoomIn {
        animation: zoomIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
</style>
@endsection
