@extends('layouts.public')

@section('title', 'Program Pertanian')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Program Unggulan</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Berbagai inisiatif strategis untuk memajukan sektor pertanian dan meningkatkan kesejahteraan petani di Sangihe.</p>
    </div>
</section>

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="space-y-24">
            @forelse($programs as $index => $program)
            <div class="flex flex-col {{ $index % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }} gap-16 items-center">
                <div class="lg:w-1/2">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-green-100 rounded-[3rem] group-hover:rotate-2 transition-transform duration-500"></div>
                        <img src="{{ $program->image }}" class="relative w-full h-[450px] object-cover rounded-[3rem] shadow-2xl" alt="{{ $program->title }}">
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="text-green-600 font-bold uppercase tracking-[0.2em] text-xs mb-6 block italic">Program Ke-{{ $index + 1 }}</span>
                    <h2 class="text-4xl font-bold text-slate-900 mb-8 leading-tight uppercase tracking-tight">{{ $program->title }}</h2>
                    <div class="text-slate-600 leading-relaxed mb-10 prose prose-slate">
                        {!! $program->description !!}
                    </div>
                    <div class="flex items-center space-x-6">
                        <div class="flex -space-x-3">
                            <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=100" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" alt="">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=100" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" alt="">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=100" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" alt="">
                        </div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Diikuti oleh 500+ Petani</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-20">
                <p class="text-slate-500">Belum ada program yang ditampilkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-green-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')]"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-bold text-white mb-8 uppercase tracking-tight">Ingin Bergabung dalam Program Kami?</h2>
        <p class="text-green-50/70 text-lg mb-12 font-light leading-relaxed">Daftarkan kelompok tani Anda atau konsultasikan kebutuhan pertanian Anda dengan penyuluh lapangan kami.</p>
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a href="#" class="w-full sm:w-auto px-10 py-5 bg-white text-green-900 rounded-full font-bold shadow-xl hover:bg-green-50 transition-all active:scale-95 uppercase text-xs tracking-widest">Konsultasi Gratis</a>
            <a href="#" class="w-full sm:w-auto px-10 py-5 bg-green-800 text-white border border-green-700 rounded-full font-bold hover:bg-green-700 transition-all active:scale-95 uppercase text-xs tracking-widest">Hubungi Kami</a>
        </div>
    </div>
</section>
@endsection
