@extends('layouts.public')

@section('title', 'Program Pertanian')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Strategi & Inovasi</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Program <span class="text-green-500">Masa Depan</span> Sangihe</h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-40 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="space-y-48">
            @forelse($programs as $index => $program)
            <div class="flex flex-col {{ $index % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }} gap-24 items-center">
                <div class="{{ $index % 2 == 0 ? 'reveal-left' : 'reveal-right' }} lg:w-1/2">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-green-500 rounded-[4rem] translate-x-6 translate-y-6 -z-10 opacity-10 group-hover:translate-x-8 group-hover:translate-y-8 transition-transform"></div>
                        <div class="aspect-[4/3] rounded-[4rem] overflow-hidden shadow-2xl">
                            <img src="{{ $program->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000" alt="{{ $program->title }}">
                        </div>
                    </div>
                </div>
                <div class="{{ $index % 2 == 0 ? 'reveal-right' : 'reveal-left' }} lg:w-1/2">
                    <span class="text-green-600 font-black uppercase tracking-[0.5em] text-[10px] mb-10 block italic">Pilar Strategis #{{ $index + 1 }}</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-950 mb-10 leading-tight uppercase tracking-tighter italic">{{ $program->title }}</h2>
                    <div class="text-slate-500 text-lg font-medium leading-relaxed mb-12 prose prose-slate">
                        {!! $program->description !!}
                    </div>
                    <div class="pt-8 border-t border-slate-200 flex items-center space-x-8">
                        <div class="flex -space-x-4">
                            <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=100" class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl" alt="">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=100" class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl" alt="">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=100" class="w-12 h-12 rounded-2xl border-4 border-white shadow-xl" alt="">
                        </div>
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Dikelola oleh Tim Ahli & Penyuluh Terampil</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="reveal text-center py-40">
                <div class="bg-white w-24 h-24 rounded-[2rem] flex items-center justify-center mx-auto mb-10 text-slate-200 shadow-xl">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">Belum ada program yang dipublikasikan.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-40 bg-slate-950 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-green-500 rounded-full blur-[200px] translate-x-1/2 -translate-y-1/2"></div>
    </div>
    <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
        <div class="reveal">
            <h3 class="text-xs font-black text-green-500 uppercase tracking-[0.5em] mb-12">Kolaborasi & Partisipasi</h3>
            <h2 class="text-5xl md:text-7xl font-bold text-white mb-16 uppercase tracking-tighter leading-none italic">Ayo Bangun Pertanian <br>Sangihe Bersama</h2>
            <p class="text-white/40 text-xl mb-20 font-medium leading-relaxed max-w-3xl mx-auto">Daftarkan kelompok tani Anda atau konsultasikan kebutuhan inovasi pertanian Anda dengan para penyuluh lapangan kami yang berdedikasi.</p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-8 sm:space-y-0 sm:space-x-12">
                <a href="{{ route('contact') }}" class="px-16 py-6 bg-white text-slate-950 rounded-full text-xs font-black uppercase tracking-[0.4em] hover:scale-105 transition-all shadow-2xl shadow-white/10">Konsultasi Sekarang</a>
                <a href="{{ route('contact') }}" class="text-[10px] font-black uppercase tracking-[0.4em] text-white/60 hover:text-white transition-colors">Hubungi Dinas</a>
            </div>
        </div>
    </div>
</section>
@endsection
