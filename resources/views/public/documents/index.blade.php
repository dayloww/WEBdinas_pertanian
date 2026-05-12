@extends('layouts.public')

@section('title', 'Dokumen Publik & PPID')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Transparansi Informasi</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Arsip <span class="text-green-500">Dokumen</span> Publik</h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-40 bg-slate-50">
    <div class="max-w-5xl mx-auto px-6">
        <div class="reveal bg-white rounded-[4rem] shadow-2xl shadow-slate-900/5 border border-white overflow-hidden">
            <div class="p-12 md:p-20 border-b border-slate-50 flex flex-col md:flex-row justify-between items-center gap-8">
                <div>
                    <h2 class="text-3xl font-bold text-slate-950 uppercase tracking-tighter italic">Daftar Dokumen Resmi</h2>
                    <p class="text-slate-400 text-sm font-medium mt-2">Pilih dokumen yang ingin Anda unduh atau pelajari.</p>
                </div>
                <div class="px-8 py-3 bg-slate-50 rounded-full text-[10px] font-black text-slate-400 uppercase tracking-widest border border-slate-100">
                    Total: {{ $documents->count() }} Item
                </div>
            </div>
            
            <div class="divide-y divide-slate-50">
                @forelse($documents as $index => $doc)
                <div class="p-12 md:p-16 hover:bg-slate-50/80 transition-all group">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-12">
                        <div class="flex items-start space-x-8">
                            <div class="w-20 h-20 bg-red-50 rounded-3xl flex items-center justify-center text-red-500 shrink-0 group-hover:bg-red-500 group-hover:text-white transition-all duration-500">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-950 group-hover:text-green-600 transition-colors uppercase tracking-tight italic leading-tight">{{ $doc->title }}</h3>
                                <div class="flex items-center space-x-6 mt-4">
                                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">{{ $doc->category }}</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">{{ $doc->created_at->format('d M Y') }}</span>
                                </div>
                                @if($doc->description)
                                <p class="text-sm text-slate-500 mt-6 font-medium leading-relaxed italic line-clamp-2 max-w-xl">"{{ $doc->description }}"</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ $doc->file_path }}" target="_blank" class="reveal group inline-flex items-center space-x-6 text-[10px] font-black text-slate-950 uppercase tracking-[0.4em]">
                            <span>Unduh Dokumen</span>
                            <div class="w-16 h-16 rounded-full border border-slate-200 flex items-center justify-center group-hover:bg-green-600 group-hover:border-green-500 group-hover:text-white transition-all">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="p-32 text-center">
                    <div class="bg-slate-50 w-24 h-24 rounded-[2rem] flex items-center justify-center mx-auto mb-10 text-slate-200 shadow-xl">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <p class="text-slate-400 font-bold uppercase tracking-widest text-xs italic">Belum ada dokumen yang tersedia untuk publik.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
