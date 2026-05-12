@extends('layouts.public')

@section('title', 'Visi & Misi')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Filosofi & Tujuan</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Visi <span class="text-green-500">&</span> Misi Dinas</h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-40 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6">
        <!-- Vision -->
        <div class="mb-40 text-center">
            <div class="reveal">
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-12 italic">Visi Masa Depan</h3>
                <div class="relative p-16 md:p-32 bg-white rounded-[4rem] shadow-2xl shadow-slate-900/5 border border-white">
                    <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-20 h-20 bg-slate-950 rounded-3xl flex items-center justify-center text-white shadow-2xl rotate-12 group-hover:rotate-0 transition-transform">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-950 leading-[1.3] uppercase tracking-tighter italic">
                        "{{ $vision }}"
                    </h2>
                </div>
            </div>
        </div>

        <!-- Mission -->
        <div class="space-y-16">
            <div class="reveal text-center">
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-12 italic">Misi Strategis</h3>
            </div>
            <div class="grid grid-cols-1 gap-10">
                @php
                    $missions = explode("\n", str_replace("\r", "", $mission));
                @endphp
                @foreach($missions as $index => $m)
                    @if(trim($m))
                    <div class="reveal flex items-start space-x-10 p-12 bg-white rounded-[3rem] shadow-2xl shadow-slate-900/5 border border-white group hover:border-green-200 transition-all duration-500" style="transition-delay: {{ $index * 100 }}ms;">
                        <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-950 font-black text-xl shrink-0 group-hover:bg-green-600 group-hover:text-white transition-all duration-500">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <p class="text-xl text-slate-500 font-medium leading-relaxed pt-3 group-hover:text-slate-900 transition-colors">{{ trim($m) }}</p>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Values Section (Extra Content) -->
<section class="py-40 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal text-center max-w-3xl mx-auto mb-32">
            <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-10 italic">Nilai Budaya Kerja</h3>
            <h2 class="text-5xl font-bold text-slate-950 uppercase tracking-tighter italic">Profesional & <span class="text-green-500">Berintegritas</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="reveal text-center space-y-8">
                <div class="w-24 h-24 bg-green-50 rounded-[2.5rem] flex items-center justify-center text-green-600 mx-auto shadow-xl">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-950 uppercase tracking-tighter italic">Integritas</h4>
                <p class="text-slate-500 font-medium leading-relaxed">Menjunjung tinggi kejujuran dan etika dalam setiap langkah pelayanan.</p>
            </div>
            <div class="reveal text-center space-y-8" style="transition-delay: 100ms;">
                <div class="w-24 h-24 bg-blue-50 rounded-[2.5rem] flex items-center justify-center text-blue-600 mx-auto shadow-xl">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-950 uppercase tracking-tighter italic">Inovasi</h4>
                <p class="text-slate-500 font-medium leading-relaxed">Terus beradaptasi dengan teknologi pertanian modern untuk kemajuan petani.</p>
            </div>
            <div class="reveal text-center space-y-8" style="transition-delay: 200ms;">
                <div class="w-24 h-24 bg-orange-50 rounded-[2.5rem] flex items-center justify-center text-orange-600 mx-auto shadow-xl">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h4 class="text-2xl font-bold text-slate-950 uppercase tracking-tighter italic">Kolaborasi</h4>
                <p class="text-slate-500 font-medium leading-relaxed">Membangun sinergi yang kuat antara pemerintah, petani, dan stakeholder.</p>
            </div>
        </div>
    </div>
</section>
@endsection
