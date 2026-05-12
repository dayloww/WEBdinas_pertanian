@extends('layouts.public')

@section('title', 'Profil Dinas')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Eksistensi & Dedikasi</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Profil <span class="text-green-500">Dinas Pertanian</span></h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-40 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32 items-center">
            <div class="reveal-left relative">
                <div class="absolute inset-0 bg-green-500 rounded-[4rem] translate-x-8 translate-y-8 -z-10 opacity-10"></div>
                <div class="aspect-[4/5] rounded-[4rem] overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1200" class="w-full h-full object-cover" alt="Kantor Dinas">
                </div>
                <div class="absolute -bottom-12 -right-12 bg-white p-12 rounded-[3.5rem] shadow-2xl shadow-green-900/5 text-center border border-slate-100">
                    <p class="text-5xl font-bold text-green-600 mb-2">25+</p>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Tahun Melayani <br>Masyarakat Sangihe</p>
                </div>
            </div>
            <div class="reveal-right">
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-10 italic">Tentang Kami</h3>
                <h2 class="text-5xl font-bold text-slate-950 mb-12 leading-tight uppercase tracking-tighter italic">Membangun Ketahanan Pangan Melalui <span class="text-green-500">Inovasi</span> & <span class="text-green-500">Tradisi</span></h2>
                <div class="space-y-8 text-lg text-slate-500 leading-relaxed font-medium">
                    <p>Dinas Pertanian Kabupaten Kepulauan Sangihe adalah instansi pemerintah yang bertanggung jawab atas pengembangan sektor pertanian, perkebunan, dan peternakan di wilayah kepulauan Sangihe. Kami berkomitmen untuk mewujudkan kemandirian pangan dan meningkatkan taraf hidup petani.</p>
                    <p>Dengan kondisi geografis kepulauan yang unik, kami fokus pada pengembangan komoditas lokal yang unggul, penerapan teknologi pertanian tepat guna, serta pemberdayaan kelompok tani secara berkelanjutan melalui pendekatan yang humanis dan kolaboratif.</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 mt-16 pt-16 border-t border-slate-100">
                    <div class="flex items-start space-x-6">
                        <div class="w-12 h-12 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-tight mb-2">Tim Ahli Berdedikasi</h4>
                            <p class="text-xs text-slate-400 font-medium">Penyuluh terlatih yang siap mendampingi petani di lapangan setiap saat.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-6">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-tight mb-2">Standar Kualitas Tinggi</h4>
                            <p class="text-xs text-slate-400 font-medium">Menerapkan SOP pemerintah yang ketat untuk menjamin pelayanan publik yang transparan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Grid Section -->
<section class="py-40 bg-slate-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-center">
            <div class="reveal">
                <p class="text-6xl font-black text-slate-950 mb-4 italic tracking-tighter">157</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Kelompok Tani</p>
            </div>
            <div class="reveal" style="transition-delay: 100ms;">
                <p class="text-6xl font-black text-slate-950 mb-4 italic tracking-tighter">12k<span class="text-green-500 font-bold">+</span></p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Hektar Lahan</p>
            </div>
            <div class="reveal" style="transition-delay: 200ms;">
                <p class="text-6xl font-black text-slate-950 mb-4 italic tracking-tighter">45</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Program Aktif</p>
            </div>
            <div class="reveal" style="transition-delay: 300ms;">
                <p class="text-6xl font-black text-slate-950 mb-4 italic tracking-tighter">12</p>
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Penghargaan</p>
            </div>
        </div>
    </div>
</section>
@endsection
