@extends('layouts.public')

@section('title', 'Visi & Misi')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Visi & Misi</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Komitmen dan landasan kerja Dinas Pertanian Kabupaten Kepulauan Sangihe.</p>
    </div>
</section>

<section class="py-24">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Vision -->
        <div class="mb-24 text-center">
            <span class="text-green-600 font-bold uppercase tracking-[0.3em] text-xs mb-6 block italic">Visi Kami</span>
            <div class="relative p-12 md:p-20 bg-white rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 bg-green-primary rounded-full flex items-center justify-center text-white shadow-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 leading-relaxed uppercase tracking-tight italic">
                    "{{ $vision }}"
                </h2>
            </div>
        </div>

        <!-- Mission -->
        <div class="space-y-12">
            <div class="text-center">
                <span class="text-green-600 font-bold uppercase tracking-[0.3em] text-xs mb-6 block italic">Misi Kami</span>
            </div>
            <div class="grid grid-cols-1 gap-8">
                @php
                    $missions = explode("\n", str_replace("\r", "", $mission));
                @endphp
                @foreach($missions as $index => $m)
                    @if(trim($m))
                    <div class="flex items-start space-x-8 p-8 bg-white rounded-[2rem] shadow-lg shadow-slate-100/50 border border-slate-50 group hover:border-green-200 transition-all">
                        <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center text-green-700 font-bold shrink-0 group-hover:bg-green-primary group-hover:text-white transition-all">
                            {{ $index + 1 }}
                        </div>
                        <p class="text-slate-600 leading-relaxed pt-2">{{ trim($m) }}</p>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
