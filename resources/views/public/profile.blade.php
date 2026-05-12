@extends('layouts.public')

@section('title', 'Profil Dinas')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Profil Dinas</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Mengenal lebih dekat Dinas Pertanian Kabupaten Kepulauan Sangihe.</p>
    </div>
</section>

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-green-100 rounded-[3rem] -rotate-2 transition-transform duration-500"></div>
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1000" class="relative w-full h-[600px] object-cover rounded-[3rem] shadow-2xl" alt="Kantor Dinas">
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-white p-6 rounded-[2rem] shadow-xl flex flex-col items-center justify-center text-center">
                        <span class="text-4xl font-bold text-green-700 mb-2">25+</span>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-tight">Tahun Melayani Masyarakat</span>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <span class="text-green-600 font-bold uppercase tracking-[0.3em] text-xs mb-6 block italic">Tentang Kami</span>
                <h2 class="text-4xl font-bold text-slate-900 mb-8 leading-tight uppercase tracking-tight">Membangun Ketahanan Pangan Melalui Inovasi dan Tradisi</h2>
                <div class="space-y-6 text-slate-600 leading-relaxed">
                    <p>Dinas Pertanian Kabupaten Kepulauan Sangihe adalah instansi pemerintah yang bertanggung jawab atas pengembangan sektor pertanian, perkebunan, dan peternakan di wilayah kepulauan Sangihe. Kami berkomitmen untuk mewujudkan kemandirian pangan dan meningkatkan taraf hidup petani.</p>
                    <p>Dengan kondisi geografis kepulauan yang unik, kami fokus pada pengembangan komoditas lokal yang unggul, penerapan teknologi pertanian tepat guna, serta pemberdayaan kelompok tani secara berkelanjutan.</p>
                </div>
                
                <div class="grid grid-cols-2 gap-8 mt-12">
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-green-600 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1 uppercase text-xs tracking-tight">Tim Ahli</h4>
                        <p class="text-xs text-slate-500 italic">Penyuluh berpengalaman di lapangan.</p>
                    </div>
                    <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center text-green-600 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="font-bold text-slate-900 mb-1 uppercase text-xs tracking-tight">Kualitas Terjamin</h4>
                        <p class="text-xs text-slate-500 italic">Standar operasional pemerintah yang ketat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
            <div>
                <div class="text-5xl font-black text-green-primary mb-2">157</div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Kelompok Tani</div>
            </div>
            <div>
                <div class="text-5xl font-black text-green-primary mb-2">12k+</div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Hektar Lahan</div>
            </div>
            <div>
                <div class="text-5xl font-black text-green-primary mb-2">45</div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Program Desa</div>
            </div>
            <div>
                <div class="text-5xl font-black text-green-primary mb-2">12</div>
                <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Penghargaan</div>
            </div>
        </div>
    </div>
</section>
@endsection
