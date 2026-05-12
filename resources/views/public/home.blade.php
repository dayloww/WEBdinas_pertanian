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
            <div class="flex flex-col items-center mb-10">
                <p class="text-green-500 font-bold uppercase tracking-[0.4em] text-[10px] italic mb-4">Selamat Datang di Portal Resmi</p>
                <div class="w-12 h-[1px] bg-white/20"></div>
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

<!-- Modern Stats Section (Upgraded) -->
<section class="py-32 relative bg-white overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-green-100/50 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-100/50 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="reveal group bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 hover:border-green-200 transition-all duration-500 hover:shadow-2xl hover:shadow-green-900/5 hover:-translate-y-2">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-green-500 group-hover:text-white transition-all duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <div class="space-y-1">
                    <p class="text-5xl font-bold text-slate-950 tracking-tighter">15k+</p>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Hektar Lahan</p>
                </div>
                <div class="mt-8 pt-8 border-t border-slate-100 flex items-center text-[10px] font-bold text-green-600 uppercase tracking-widest">
                    <span>Lihat Peta Lahan</span>
                    <svg class="w-3 h-3 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="reveal group bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 hover:border-blue-200 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-900/5 hover:-translate-y-2" style="transition-delay: 100ms;">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-blue-500 group-hover:text-white transition-all duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div class="space-y-1">
                    <p class="text-5xl font-bold text-slate-950 tracking-tighter">157</p>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Kelompok Tani</p>
                </div>
                <div class="mt-8 pt-8 border-t border-slate-100 flex items-center text-[10px] font-bold text-blue-600 uppercase tracking-widest">
                    <span>Data Kelompok</span>
                    <svg class="w-3 h-3 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            <!-- Stat 3 -->
            <div class="reveal group bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 hover:border-purple-200 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-900/5 hover:-translate-y-2" style="transition-delay: 200ms;">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-purple-500 group-hover:text-white transition-all duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="space-y-1">
                    <p class="text-5xl font-bold text-slate-950 tracking-tighter">45</p>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Program Aktif</p>
                </div>
                <div class="mt-8 pt-8 border-t border-slate-100 flex items-center text-[10px] font-bold text-purple-600 uppercase tracking-widest">
                    <span>Detail Program</span>
                    <svg class="w-3 h-3 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </div>

            <!-- Stat 4 -->
            <div class="reveal group bg-slate-50 p-10 rounded-[2.5rem] border border-slate-100 hover:border-orange-200 transition-all duration-500 hover:shadow-2xl hover:shadow-orange-900/5 hover:-translate-y-2" style="transition-delay: 300ms;">
                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:bg-orange-500 group-hover:text-white transition-all duration-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <div class="space-y-1">
                    <p class="text-5xl font-bold text-slate-950 tracking-tighter">12</p>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Komoditas</p>
                </div>
                <div class="mt-8 pt-8 border-t border-slate-100 flex items-center text-[10px] font-bold text-orange-600 uppercase tracking-widest">
                    <span>Info Komoditas</span>
                    <svg class="w-3 h-3 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
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
