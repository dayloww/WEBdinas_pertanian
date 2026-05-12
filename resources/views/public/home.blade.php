@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Minimalist Modern Hero -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-slate-950">
    <!-- Clean Background with Subtle Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-40 grayscale-[0.3]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-950/20 to-slate-950"></div>
    </div>

    <!-- Content Area -->
    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full text-center">
        <div class="reveal-zoom">
            <div class="flex justify-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse mr-3"></span>
                    <span class="text-[10px] font-bold text-white/60 uppercase tracking-[0.5em]">Official Government Portal</span>
                </span>
            </div>
            
            <h1 class="text-6xl md:text-[6.5rem] font-bold text-white mb-8 leading-[0.95] uppercase tracking-tighter">
                Dinas <span class="text-green-500">Pertanian</span> <br>
                <span class="text-white/20">Sangihe.</span>
            </h1>
            
            <p class="text-lg md:text-xl text-white/40 mb-16 leading-relaxed font-medium max-w-3xl mx-auto tracking-wide">
                Menyediakan informasi pertanian, program pemerintah, layanan masyarakat, serta perkembangan sektor pertanian daerah Kabupaten Kepulauan Sangihe.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-12">
                <a href="{{ route('programs') }}" class="group relative px-12 py-5 overflow-hidden rounded-full bg-white text-slate-950 font-black text-[10px] uppercase tracking-[0.3em] transition-all hover:scale-105 active:scale-95 shadow-2xl shadow-white/10">
                    <span class="relative z-10">Explore Programs</span>
                    <div class="absolute inset-0 bg-green-500 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                </a>
                <a href="{{ route('news') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-white/60 hover:text-white transition-colors flex items-center group">
                    Latest Updates
                    <svg class="w-4 h-4 ml-4 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Minimal Scroll Mouse -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 opacity-20">
        <div class="w-[1px] h-16 bg-gradient-to-b from-white to-transparent animate-bounce"></div>
    </div>
</section>

<!-- Modern Stats Grid -->
<section class="py-32 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-24">
            <div class="reveal border-l border-slate-200 pl-8">
                <p class="text-4xl font-bold text-slate-900 mb-2">15k+</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-loose">Hektar Lahan</p>
            </div>
            <div class="reveal border-l border-slate-200 pl-8" style="transition-delay: 100ms;">
                <p class="text-4xl font-bold text-slate-900 mb-2">157</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-loose">Kelompok Tani</p>
            </div>
            <div class="reveal border-l border-slate-200 pl-8" style="transition-delay: 200ms;">
                <p class="text-4xl font-bold text-slate-900 mb-2">45</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-loose">Program Aktif</p>
            </div>
            <div class="reveal border-l border-slate-200 pl-8" style="transition-delay: 300ms;">
                <p class="text-4xl font-bold text-slate-900 mb-2">12</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-loose">Komoditas</p>
            </div>
        </div>
    </div>
</section>

<!-- News Section (Minimalist Style) -->
<section class="py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal flex justify-between items-end mb-24">
            <div>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-950 uppercase tracking-tighter leading-none mb-6 italic">Featured News</h2>
                <div class="w-20 h-1 bg-green-500"></div>
            </div>
            <a href="{{ route('news') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 hover:text-green-600 transition-colors">See all articles</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            @foreach($news->take(2) as $index => $item)
            <div class="reveal group" style="transition-delay: {{ $index * 200 }}ms;">
                <div class="relative aspect-[16/10] overflow-hidden rounded-[2rem] mb-10">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover grayscale-[0.5] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105" alt="">
                    <div class="absolute top-8 right-8">
                        <span class="px-5 py-2 bg-white/10 backdrop-blur-md rounded-full text-[10px] font-black text-white uppercase tracking-widest shadow-xl border border-white/20">{{ $item->category->name }}</span>
                    </div>
                </div>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-6">{{ $item->created_at->format('M d, Y') }}</p>
                <h3 class="text-3xl font-bold text-slate-900 mb-8 leading-tight uppercase tracking-tight group-hover:text-green-600 transition-colors">{{ $item->title }}</h3>
                <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-950 hover:pl-4 transition-all">
                    Read Story
                    <svg class="w-4 h-4 ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .reveal-zoom {
        animation: revealZoom 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    @keyframes revealZoom {
        from { opacity: 0; transform: scale(0.95) translateY(20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }
</style>
@endsection
