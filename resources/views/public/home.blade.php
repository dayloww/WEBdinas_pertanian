@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="relative h-[85vh] overflow-hidden">
    @foreach($banners as $index => $banner)
    <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out {{ $index == 0 ? 'opacity-100' : 'opacity-0' }}" id="banner-{{ $index }}">
        <img src="{{ $banner->image }}" class="w-full h-full object-cover" alt="{{ $banner->title }}">
        <div class="absolute inset-0 bg-gradient-to-r from-green-950/80 to-transparent"></div>
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-4 w-full">
                <div class="max-w-2xl">
                    <span class="inline-block px-4 py-1.5 bg-green-500/20 backdrop-blur-md border border-green-400/30 text-green-300 text-xs font-bold uppercase tracking-widest rounded-full mb-6">Selamat Datang di Portal Resmi</span>
                    <h2 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-[1.1] uppercase tracking-tight">{{ $banner->title }}</h2>
                    <p class="text-lg text-green-50/80 mb-10 leading-relaxed font-light">{{ $banner->subtitle }}</p>
                    <div class="flex space-x-4">
                        <a href="{{ $banner->link }}" class="bg-green-primary text-white px-8 py-4 rounded-full font-bold hover:bg-green-800 transition-all shadow-xl shadow-green-900/40 active:scale-95 flex items-center">
                            Pelajari Lebih Lanjut
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>

<!-- Stats / Feature Cards -->
<section class="relative -mt-20 z-10">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all">
                <div class="bg-green-100 w-14 h-14 rounded-2xl flex items-center justify-center mb-6 text-green-700 group-hover:bg-green-primary group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase">Lahan Pertanian</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Total luas lahan produktif di wilayah Kabupaten Sangihe.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all">
                <div class="bg-green-100 w-14 h-14 rounded-2xl flex items-center justify-center mb-6 text-green-700 group-hover:bg-green-primary group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase">Kelompok Tani</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Jumlah binaan kelompok tani yang terdaftar resmi.</p>
            </div>
            <div class="bg-green-primary p-8 rounded-3xl shadow-xl shadow-green-900/20 border border-green-800 text-white hover:-translate-y-2 transition-all">
                <div class="bg-white/20 w-14 h-14 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold mb-2 uppercase">Program Aktif</h3>
                <p class="text-sm text-green-50/70 leading-relaxed">Berbagai inisiatif pemberdayaan yang sedang berjalan.</p>
            </div>
            <div class="bg-white p-8 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 group hover:-translate-y-2 transition-all">
                <div class="bg-green-100 w-14 h-14 rounded-2xl flex items-center justify-center mb-6 text-green-700 group-hover:bg-green-primary group-hover:text-white transition-colors">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2 uppercase">Produk Unggulan</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Komoditas utama hasil tani masyarakat Sangihe.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-32">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-yellow-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70"></div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?auto=format&fit=crop&q=80&w=600" class="rounded-3xl shadow-2xl mt-12" alt="Farmer">
                    <img src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?auto=format&fit=crop&q=80&w=600" class="rounded-3xl shadow-2xl" alt="Harvest">
                </div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-3xl shadow-2xl border border-slate-100 text-center">
                    <p class="text-4xl font-bold text-green-primary">15+</p>
                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mt-1">Tahun Mengabdi</p>
                </div>
            </div>
            <div>
                <span class="text-green-600 font-bold uppercase tracking-[0.2em] text-sm mb-4 block italic">Profil Singkat</span>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-8 leading-tight uppercase tracking-tight">Apa yang Anda tanam sekarang, akan Anda tuai nanti</h2>
                <p class="text-slate-600 leading-relaxed mb-10 text-lg">
                    Dinas Pertanian Kabupaten Kepulauan Sangihe berkomitmen untuk memajukan sektor pertanian sebagai tulang punggung ekonomi kerakyatan. Kami berfokus pada inovasi, pemberdayaan petani, dan keberlanjutan lingkungan.
                </p>
                <div class="space-y-6 mb-12">
                    <div class="flex items-start">
                        <div class="bg-green-50 p-2 rounded-lg mr-4">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 uppercase text-sm mb-1 tracking-wider">Kualitas Terjamin</h4>
                            <p class="text-sm text-slate-500">Mendorong standarisasi produk pertanian lokal.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-50 p-2 rounded-lg mr-4">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 uppercase text-sm mb-1 tracking-wider">Teknologi Modern</h4>
                            <p class="text-sm text-slate-500">Implementasi alat mesin pertanian terkini.</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="inline-flex items-center text-green-700 font-bold hover:text-green-900 group transition-colors uppercase text-sm tracking-widest">
                    Selengkapnya Tentang Kami
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-32 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-end mb-16">
            <div>
                <span class="text-green-600 font-bold uppercase tracking-[0.2em] text-sm mb-4 block italic">Warta Tani</span>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight uppercase tracking-tight">Berita & Informasi Terkini</h2>
            </div>
            <a href="#" class="hidden md:flex items-center text-green-700 font-bold hover:text-green-900 group transition-colors uppercase text-sm tracking-widest">
                Lihat Semua Berita
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($news as $item)
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-xl shadow-slate-200/60 border border-slate-100 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $item->title }}">
                    <div class="absolute top-6 left-6">
                        <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-bold text-green-700 uppercase tracking-widest shadow-lg">{{ $item->category->name }}</span>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center text-xs text-slate-400 font-medium uppercase tracking-widest mb-4">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        {{ $item->created_at->format('d M Y') }}
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-green-700 transition-colors leading-snug uppercase tracking-tight">{{ $item->title }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2">
                        {{ Str::limit(strip_tags($item->content), 120) }}
                    </p>
                    <a href="#" class="flex items-center text-green-700 font-bold hover:text-green-900 transition-colors uppercase text-xs tracking-[0.2em]">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Programs Preview -->
<section class="py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-20">
            <span class="text-green-600 font-bold uppercase tracking-[0.2em] text-sm mb-4 block italic">Program Kerja</span>
            <h2 class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight uppercase tracking-tight">Pemberdayaan & Inovasi</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="bg-green-950 rounded-[3rem] p-12 text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Program Peningkatan Produksi Pangan</h3>
                    <p class="text-green-100/70 mb-10 leading-relaxed">Fokus pada intensifikasi lahan dan penggunaan bibit unggul untuk komoditas padi, jagung, dan kedelai.</p>
                    <a href="#" class="inline-flex items-center px-8 py-3.5 bg-green-500 text-white rounded-full font-bold hover:bg-green-400 transition-all shadow-lg shadow-green-500/20 active:scale-95 uppercase text-xs tracking-widest">Detail Program</a>
                </div>
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-green-800 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-700"></div>
            </div>
            <div class="bg-slate-900 rounded-[3rem] p-12 text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6 uppercase tracking-tight">Modernisasi Alat & Mesin Pertanian</h3>
                    <p class="text-slate-100/70 mb-10 leading-relaxed">Penyaluran bantuan traktor, combine harvester, dan drone pertanian untuk efisiensi kerja petani.</p>
                    <a href="#" class="inline-flex items-center px-8 py-3.5 bg-white text-slate-900 rounded-full font-bold hover:bg-slate-200 transition-all shadow-lg active:scale-95 uppercase text-xs tracking-widest">Detail Program</a>
                </div>
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-slate-800 rounded-full opacity-20 group-hover:scale-110 transition-transform duration-700"></div>
            </div>
        </div>
    </div>
</section>

@endsection
