@extends('layouts.public')

@section('title', 'Beranda')

@section('content')
<!-- Immersive Cinematic Hero -->
<section class="relative h-[110vh] flex items-center justify-center overflow-hidden">
    <!-- Parallax Background Layer -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover scale-110" style="filter: brightness(0.4) contrast(1.1);" alt="">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-50 via-transparent to-black/60"></div>
    </div>

    <!-- Content Area -->
    <div class="max-w-7xl mx-auto px-6 relative z-10 w-full text-center">
        <div class="space-y-8">
            <div class="flex flex-col items-center">
                <p class="reveal-top text-green-400 font-black uppercase tracking-[0.6em] text-[10px] mb-6">Portal Resmi Pemerintah</p>
                <div class="w-20 h-[1px] bg-white/20"></div>
            </div>
            
            <h1 class="reveal-bottom text-7xl md:text-[8rem] font-bold text-white mb-8 leading-[0.85] uppercase tracking-tighter">
                Dinas <span class="text-green-500 italic">Pertanian</span> <br>
                <span class="text-white/30">Sangihe.</span>
            </h1>
            
            <p class="reveal-bottom text-lg md:text-2xl text-white/60 mb-16 leading-relaxed font-medium max-w-4xl mx-auto tracking-wide" style="transition-delay: 200ms;">
                Membangun Kemandirian Pangan dan Kesejahteraan Petani di Wilayah Perbatasan Melalui Inovasi Teknologi dan Pemberdayaan Berkelanjutan.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-8 sm:space-y-0 sm:space-x-16 pt-8">
                <a href="{{ route('programs') }}" class="reveal-bottom group relative px-16 py-6 overflow-hidden rounded-full bg-green-500 text-white font-black text-[10px] uppercase tracking-[0.4em] transition-all hover:scale-105 hover:shadow-[0_0_50px_rgba(34,197,94,0.4)]" style="transition-delay: 400ms;">
                    <span class="relative z-10">Lihat Program</span>
                    <div class="absolute inset-0 bg-white translate-y-full group-hover:translate-y-0 transition-transform duration-500"></div>
                    <span class="absolute inset-0 z-10 flex items-center justify-center text-slate-950 translate-y-full group-hover:translate-y-0 transition-transform duration-500">Lihat Program</span>
                </a>
                <a href="#about" class="reveal-bottom text-[10px] font-black uppercase tracking-[0.4em] text-white/60 hover:text-white transition-colors flex items-center group" style="transition-delay: 500ms;">
                    Tentang Kami
                    <svg class="w-4 h-4 ml-6 group-hover:translate-y-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Animated Wave Overlay -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-10">
        <svg class="relative block w-full h-32 text-slate-50" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C58.47,113.88,127.1,118.84,185.78,107.48a485.06,485.06,0,0,0,135.61-51.04Z" fill="currentColor"></path>
        </svg>
    </div>
</section>

<!-- About & Mission Section -->
<section id="about" class="py-40 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-green-200/20 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32 items-center">
            <div class="reveal-left">
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-10">Kemandirian Pangan</h3>
                <h2 class="text-5xl md:text-6xl font-bold text-slate-950 mb-12 leading-tight uppercase tracking-tight italic">
                    Mengakar di Bumi <span class="text-green-500">Sangihe</span>, Berbuah untuk <span class="text-green-500">Negeri</span>.
                </h2>
                <div class="space-y-8 text-lg text-slate-500 leading-relaxed font-medium">
                    <p>Dinas Pertanian Kabupaten Kepulauan Sangihe berkomitmen penuh dalam mengoptimalkan potensi sumber daya alam maritim dan agraris wilayah perbatasan untuk kesejahteraan masyarakat.</p>
                    <p>Kami hadir sebagai mitra strategis bagi para petani, peternak, dan pengolah pangan melalui berbagai program dukungan, mulai dari pembibitan, penyuluhan, hingga bantuan alat mesin pertanian modern.</p>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-12 border-t border-slate-200 pt-16">
                    <div>
                        <p class="text-4xl font-bold text-slate-950 mb-2">157+</p>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Kelompok Tani Aktif</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold text-slate-950 mb-2">12+</p>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Komoditas Unggulan</p>
                    </div>
                </div>
            </div>
            <div class="reveal-right relative">
                <div class="aspect-[4/5] rounded-[4rem] overflow-hidden shadow-2xl shadow-green-900/10">
                    <img src="https://images.unsplash.com/photo-1592419044706-39796d40f98c?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover" alt="">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-16 -left-16 bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-900/5 max-w-xs border border-slate-100">
                    <div class="flex items-center space-x-6 mb-6">
                        <div class="w-12 h-12 bg-green-500 rounded-2xl flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <p class="text-sm font-bold text-slate-900">Peningkatan Produksi 2024</p>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed italic">"Peningkatan produksi padi di wilayah Tabukan Utara mencapai 12% dibandingkan tahun lalu."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bidang Kerja Section (Dynamic) -->
<section class="py-40 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal text-center max-w-3xl mx-auto mb-24">
            <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-8">Bidang Kerja</h3>
            <h2 class="text-5xl font-bold text-slate-950 uppercase tracking-tighter italic">Pilar Utama Pertanian</h2>
            <p class="text-slate-500 mt-8 text-lg font-medium leading-relaxed">Fokus pelayanan kami terbagi dalam beberapa bidang strategis untuk memastikan setiap aspek pertanian terkelola dengan maksimal.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($sectors as $index => $sector)
            <div class="reveal group relative overflow-hidden rounded-[3rem] aspect-[3/4] bg-slate-950 shadow-2xl transition-all duration-700 hover:-translate-y-4" style="transition-delay: {{ $index * 150 }}ms;">
                <!-- Background Image (Mapping based on name for now) -->
                <img src="https://images.unsplash.com/photo-{{ $index == 0 ? '1592419044706-39796d40f98c' : ($index == 1 ? '1516467508483-a7212febe31a' : ($index == 2 ? '1500382017468-9049fed747ef' : '1531427186611-ecfd6d936c79')) }}?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-110 transition-transform duration-1000" alt="">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                
                <div class="absolute inset-0 p-10 flex flex-col justify-end">
                    <div class="w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-8 border border-white/20 group-hover:bg-green-500 group-hover:border-green-400 transition-all duration-500">
                        @if($sector->icon == 'leaf')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        @elseif($sector->icon == 'horse')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        @elseif($sector->icon == 'utensils')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"></path></svg>
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        @endif
                    </div>
                    <h4 class="text-2xl font-bold text-white uppercase tracking-tight italic">{{ $sector->name }}</h4>
                    <p class="text-white/40 text-[10px] font-black uppercase tracking-[0.3em] mt-2 group-hover:text-green-400 transition-colors">Tahun 2024</p>
                    
                    @if($sector->data->isNotEmpty())
                    <div class="mt-10 pt-10 border-t border-white/10">
                        <p class="text-xs text-white/60 leading-relaxed italic">"{{ $sector->data->first()->label }}: {{ number_format($sector->data->first()->value) }} {{ $sector->data->first()->unit }}"</p>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Grid (Minimal Rich) -->
<section class="py-40 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="reveal p-12 bg-white rounded-[3.5rem] shadow-2xl shadow-slate-900/5 border border-white">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] mb-6">Produksi Padi</p>
                <h5 class="text-5xl font-bold text-slate-900 tracking-tighter">4.2k</h5>
                <p class="text-xs text-green-600 font-bold mt-4 uppercase tracking-widest">+8% Tahun Ini</p>
            </div>
            <div class="reveal p-12 bg-white rounded-[3.5rem] shadow-2xl shadow-slate-900/5 border border-white" style="transition-delay: 100ms;">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] mb-6">Populasi Sapi</p>
                <h5 class="text-5xl font-bold text-slate-900 tracking-tighter">1.8k</h5>
                <p class="text-xs text-blue-600 font-bold mt-4 uppercase tracking-widest">Kondisi Sehat</p>
            </div>
            <div class="reveal p-12 bg-white rounded-[3.5rem] shadow-2xl shadow-slate-900/5 border border-white" style="transition-delay: 200ms;">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] mb-6">Lahan Cengkeh</p>
                <h5 class="text-5xl font-bold text-slate-900 tracking-tighter">8.5k</h5>
                <p class="text-xs text-orange-600 font-bold mt-4 uppercase tracking-widest">Hektar Luas</p>
            </div>
            <div class="reveal p-12 bg-white rounded-[3.5rem] shadow-2xl shadow-slate-900/5 border border-white" style="transition-delay: 300ms;">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em] mb-6">Kelompok Tani</p>
                <h5 class="text-5xl font-bold text-slate-900 tracking-tighter">157</h5>
                <p class="text-xs text-purple-600 font-bold mt-4 uppercase tracking-widest">Tersertifikasi</p>
            </div>
        </div>
    </div>
</section>

<!-- News Masonry Section -->
<section class="py-40 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal flex flex-col md:flex-row justify-between items-end mb-32 gap-12">
            <div class="max-w-2xl">
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-8">Warta Pertanian</h3>
                <h2 class="text-5xl md:text-6xl font-bold text-slate-950 uppercase tracking-tighter italic leading-none">Berita & <br>Informasi Terbaru</h2>
            </div>
            <a href="{{ route('news') }}" class="group inline-flex items-center space-x-6 text-[10px] font-black uppercase tracking-[0.4em] text-slate-950">
                <span>Semua Berita</span>
                <div class="w-16 h-16 rounded-full border border-slate-200 flex items-center justify-center group-hover:bg-slate-950 group-hover:text-white transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach($news as $index => $item)
            <div class="reveal group" style="transition-delay: {{ $index * 150 }}ms;">
                <div class="relative aspect-[4/5] overflow-hidden rounded-[3rem] mb-10 shadow-2xl shadow-slate-900/5">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover grayscale-[0.3] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-0 group-hover:opacity-60 transition-opacity"></div>
                    <div class="absolute top-10 right-10">
                        <span class="px-6 py-2.5 bg-white backdrop-blur-md rounded-full text-[10px] font-black text-slate-950 uppercase tracking-widest shadow-xl">{{ $item->category->name }}</span>
                    </div>
                </div>
                <div class="px-4">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-6">{{ $item->created_at->format('d M Y') }}</p>
                    <h3 class="text-2xl font-bold text-slate-900 mb-8 leading-tight uppercase tracking-tight group-hover:text-green-600 transition-colors">{{ $item->title }}</h3>
                    <a href="{{ route('news.show', $item->slug) }}" class="inline-flex items-center text-[10px] font-black uppercase tracking-[0.4em] text-slate-950 hover:text-green-600 transition-colors">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action (PPID/Dokumen) -->
<section class="py-40 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="bg-slate-950 rounded-[4rem] p-12 md:p-32 text-center relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
                <svg class="absolute w-full h-full scale-150 rotate-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="url(#grad1)"></path>
                    <defs>
                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:rgb(34,197,94);stop-opacity:1" />
                            <stop offset="100%" style="stop-color:rgb(15,23,42);stop-opacity:1" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="relative z-10 space-y-12">
                <h3 class="text-xs font-black text-green-500 uppercase tracking-[0.6em]">Transparansi Publik</h3>
                <h2 class="text-5xl md:text-7xl font-bold text-white uppercase tracking-tighter leading-[0.9] italic">Akses Dokumen <br>& Layanan PPID</h2>
                <p class="text-white/40 text-lg md:text-xl font-medium max-w-2xl mx-auto leading-relaxed">Dapatkan akses mudah ke dokumen resmi, laporan tahunan, dan layanan informasi publik Dinas Pertanian.</p>
                <div class="pt-8 flex flex-col sm:flex-row justify-center items-center space-y-6 sm:space-y-0 sm:space-x-12">
                    <a href="{{ route('documents') }}" class="px-16 py-6 bg-white text-slate-950 rounded-full text-xs font-black uppercase tracking-[0.4em] hover:scale-105 transition-all shadow-2xl shadow-white/10">Lihat Dokumen</a>
                    <a href="{{ route('contact') }}" class="text-[10px] font-black uppercase tracking-[0.4em] text-white/60 hover:text-white transition-colors">Ajukan Informasi</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom Reveal Animations */
    .reveal-top { animation: revealTop 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    .reveal-bottom { animation: revealBottom 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    .reveal-left { opacity: 0; transform: translateX(-30px); transition: all 1s ease-out; }
    .reveal-right { opacity: 0; transform: translateX(30px); transition: all 1s ease-out; }
    
    .reveal-left.active, .reveal-right.active { opacity: 1; transform: translateX(0); }

    @keyframes revealTop {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes revealBottom {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Additional Styles */
    .scroll-smooth { scroll-behavior: smooth; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Simple Reveal on Scroll
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal-left, .reveal-right, .reveal').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection
