@extends('layouts.public')

@section('title', 'Dokumen Publik & PPID')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Transparansi Publik</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Akses dokumen resmi, laporan, dan informasi publik Dinas Pertanian Kabupaten Kepulauan Sangihe.</p>
    </div>
</section>

<section class="py-24">
    <div class="max-w-6xl mx-auto px-4">
        <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
            <div class="p-8 md:p-12 border-b border-slate-50 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <h2 class="text-2xl font-bold text-slate-900 uppercase tracking-tight">Daftar Dokumen</h2>
                <div class="flex items-center space-x-2 text-slate-400 text-xs font-bold uppercase tracking-widest">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Total: {{ $documents->count() }} Dokumen</span>
                </div>
            </div>
            <div class="divide-y divide-slate-50">
                @forelse($documents as $doc)
                <div class="p-8 hover:bg-slate-50/50 transition-colors group">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="flex items-start space-x-6">
                            <div class="w-16 h-16 bg-red-50 rounded-2xl flex items-center justify-center text-red-500 shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-green-700 transition-colors uppercase tracking-tight">{{ $doc->title }}</h3>
                                <p class="text-sm text-slate-500 mt-1 italic">{{ $doc->category }} • {{ $doc->created_at->format('d M Y') }}</p>
                                @if($doc->description)
                                <p class="text-xs text-slate-400 mt-2 line-clamp-1">{{ $doc->description }}</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ $doc->file_path }}" target="_blank" class="inline-flex items-center px-8 py-4 bg-green-primary text-white text-xs font-bold uppercase tracking-[0.2em] rounded-full hover:bg-green-800 transition-all shadow-lg shadow-green-900/20 active:scale-95">
                            Download PDF
                            <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        </a>
                    </div>
                </div>
                @empty
                <div class="p-20 text-center text-slate-500 italic">
                    Belum ada dokumen yang tersedia untuk publik.
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
