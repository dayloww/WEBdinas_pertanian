@extends('layouts.public')

@section('title', $post->title)

@section('content')
<!-- Immersive Article Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ $post->image }}" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-green-950/90 to-green-950"></div>
    </div>
    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
        <div class="reveal-top">
            <span class="inline-block px-6 py-2 bg-green-500/20 backdrop-blur-md border border-green-400/30 text-green-300 text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8">{{ $post->category->name }}</span>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-10 uppercase tracking-tighter leading-[1.1] italic">{{ $post->title }}</h1>
            
            <div class="flex items-center justify-center space-x-12 text-green-100/40 text-[10px] font-black uppercase tracking-[0.3em] pt-8 border-t border-white/10">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    {{ $post->created_at->format('d M Y') }}
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    {{ number_format($post->views) }} Pembaca
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="reveal relative -mt-56 mb-24 group">
            <div class="absolute inset-0 bg-green-500 rounded-[4rem] translate-x-4 translate-y-4 -z-10 opacity-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform"></div>
            <img src="{{ $post->image }}" class="w-full h-[600px] object-cover rounded-[4rem] shadow-2xl border-[12px] border-white" alt="{{ $post->title }}">
        </div>

        <div class="reveal prose prose-2xl max-w-none prose-slate prose-headings:font-bold prose-headings:uppercase prose-headings:tracking-tighter prose-headings:italic prose-a:text-green-600 prose-img:rounded-[3rem] font-medium leading-relaxed text-slate-600">
            {!! $post->content !!}
        </div>

        <div class="reveal mt-32 pt-16 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-12">
            <div class="flex items-center space-x-6">
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Bagikan:</span>
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 hover:text-white hover:bg-slate-900 transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg></a>
                    <a href="#" class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400 hover:text-white hover:bg-slate-900 transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg></a>
                </div>
            </div>
            <a href="{{ route('news') }}" class="group inline-flex items-center space-x-6 text-[10px] font-black text-slate-950 uppercase tracking-[0.4em]">
                <div class="w-16 h-16 rounded-full border border-slate-200 flex items-center justify-center group-hover:bg-slate-950 group-hover:text-white transition-all">
                    <svg class="w-6 h-6 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
                <span>Kembali ke Warta</span>
            </a>
        </div>
    </div>
</section>

<!-- Related News -->
@if($relatedNews->isNotEmpty())
<section class="py-40 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="reveal flex justify-between items-end mb-24">
            <div>
                <h3 class="text-xs font-black text-green-600 uppercase tracking-[0.5em] mb-8">Kabar Terkait</h3>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-950 uppercase tracking-tighter italic leading-none">Mungkin Anda <br>Juga Tertarik</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach($relatedNews as $index => $item)
            <div class="reveal group" style="transition-delay: {{ $index * 150 }}ms;">
                <div class="relative aspect-[4/5] overflow-hidden rounded-[3rem] mb-10 shadow-2xl shadow-slate-900/5">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover grayscale-[0.3] group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" alt="">
                </div>
                <div class="px-4 text-center">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 leading-tight uppercase tracking-tight group-hover:text-green-600 transition-colors line-clamp-2 italic">{{ $item->title }}</h3>
                    <a href="{{ route('news.show', $item->slug) }}" class="text-[10px] font-black text-green-700 uppercase tracking-[0.3em] hover:tracking-[0.5em] transition-all">Lihat Kabar</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
