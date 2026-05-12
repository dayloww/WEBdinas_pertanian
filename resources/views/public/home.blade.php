@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center overflow-hidden bg-green-950">
    <!-- Background Carousel / Static Image -->
    <div class="absolute inset-0 z-0">
        @if($banners->count() > 0)
            @foreach($banners as $index => $banner)
            <div class="absolute inset-0 transition-opacity duration-[2000ms] ease-in-out {{ $index == 0 ? 'opacity-100' : 'opacity-0' }}" 
                 x-data="{ active: 0 }" 
                 x-init="setInterval(() => { active = (active + 1) % {{ $banners->count() }} }, 5000)"
                 :class="active == {{ $index }} ? 'opacity-100 scale-105' : 'opacity-0 scale-100'">
                <img src="{{ $banner->image }}" class="w-full h-full object-cover transition-transform duration-[5000ms]" alt="">
                <div class="absolute inset-0 bg-gradient-to-r from-green-950 via-green-950/60 to-transparent"></div>
            </div>
            @endforeach
        @else
            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover" alt="">
            <div class="absolute inset-0 bg-gradient-to-r from-green-950 via-green-950/40 to-transparent"></div>
        @endif
    </div>

    <!-- Hero Content -->
    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
        <div class="max-w-3xl">
            <div class="reveal">
                <span class="inline-block px-5 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-green-300 text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8 shadow-2xl">Portal Resmi Pemerintah</span>
                <h1 class="text-5xl md:text-8xl font-bold text-white mb-8 leading-[1.05] uppercase tracking-tighter">
                    Selamat Datang di <span class="text-green-400">Website Resmi</span> Dinas Pertanian
                </h1>
                <p class="text-lg md:text-xl text-green-50/70 mb-12 leading-relaxed font-light max-w-2xl">
                    Menyediakan informasi pertanian, program pemerintah, layanan masyarakat, serta perkembangan sektor pertanian daerah secara cepat dan transparan.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('programs') }}" class="px-10 py-5 bg-green-500 text-white rounded-full font-black text-xs uppercase tracking-[0.2em] hover:bg-green-400 transition-all shadow-2xl shadow-green-900/40 active:scale-95 flex items-center justify-center">
                        Lihat Program Utama
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                    <a href="{{ route('news') }}" class="px-10 py-5 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full font-black text-xs uppercase tracking-[0.2em] hover:bg-white/20 transition-all flex items-center justify-center">
                        Warta Pertanian
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 animate-bounce hidden md:block">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center p-1">
            <div class="w-1.5 h-3 bg-white/50 rounded-full"></div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-24 relative z-10 -mt-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="reveal bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all duration-500">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center mb-8 text-green-600 group-hover:bg-green-primary group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase tracking-tight">15k+ Hektar</h3>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose">Luas Lahan Produktif</p>
            </div>
            <div class="reveal bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all duration-500" style="transition-delay: 100ms;">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center mb-8 text-green-600 group-hover:bg-green-primary group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase tracking-tight">157 Kelompok</h3>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose">Binaan Petani Aktif</p>
            </div>
            <div class="reveal bg-green-primary p-10 rounded-[3rem] shadow-2xl shadow-green-900/20 text-white hover:-translate-y-2 transition-all duration-500" style="transition-delay: 200ms;">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold mb-2 uppercase tracking-tight">45 Program</h3>
                <p class="text-[10px] font-bold text-green-300 uppercase tracking-widest leading-loose">Pemberdayaan Berjalan</p>
            </div>
            <div class="reveal bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all duration-500" style="transition-delay: 300ms;">
                <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center mb-8 text-green-600 group-hover:bg-green-primary group-hover:text-white transition-all">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase tracking-tight">12 Komoditas</h3>
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose">Unggulan Daerah</p>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-32 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal flex flex-col md:flex-row md:items-end justify-between mb-20 gap-8">
            <div class="max-w-2xl">
                <span class="text-green-600 font-black uppercase tracking-[0.4em] text-[10px] mb-4 block italic">Update Terkini</span>
                <h2 class="text-4xl md:text-6xl font-bold text-slate-950 uppercase tracking-tighter leading-none">Warta <span class="text-green-600">Pertanian</span> Sangihe</h2>
            </div>
            <a href="{{ route('news') }}" class="group flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 hover:text-green-600 transition-colors">
                Lihat Semua Berita
                <svg class="w-4 h-4 ml-3 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach($news as $index => $item)
            <div class="reveal bg-white rounded-[3rem] overflow-hidden shadow-2xl shadow-slate-200/50 border border-slate-100 group transition-all duration-700" style="transition-delay: {{ $index * 150 }}ms;">
                <div class="relative h-72 overflow-hidden">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="absolute top-8 left-8">
                        <span class="px-5 py-2 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-black text-green-700 uppercase tracking-widest shadow-xl">{{ $item->category->name }}</span>
                    </div>
                </div>
                <div class="p-10">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        {{ $item->created_at->format('d M Y') }}
                    </p>
                    <h3 class="text-xl font-bold text-slate-900 mb-6 group-hover:text-green-600 transition-colors leading-tight uppercase tracking-tight line-clamp-2">{{ $item->title }}</h3>
                    <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center text-[10px] font-black uppercase tracking-[0.3em] text-green-700 hover:text-green-900 transition-colors">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-32 bg-green-primary relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <div class="reveal">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-10 uppercase tracking-tighter leading-none">Membangun Masa Depan <br> <span class="text-green-400">Pertanian Sangihe</span></h2>
            <p class="text-lg text-green-50/70 mb-16 leading-relaxed font-light max-w-2xl mx-auto">Bersama kita tingkatkan produktivitas dan kesejahteraan petani melalui kolaborasi teknologi dan kearifan lokal.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-12 py-5 bg-white text-green-950 rounded-full font-black text-xs uppercase tracking-[0.3em] shadow-2xl hover:bg-green-50 transition-all active:scale-95">Mulai Konsultasi</a>
                <a href="{{ route('documents') }}" class="w-full sm:w-auto px-12 py-5 border border-white/20 text-white rounded-full font-black text-xs uppercase tracking-[0.3em] hover:bg-white/10 transition-all">Akses Dokumen</a>
            </div>
        </div>
    </div>
</section>
@endsection
