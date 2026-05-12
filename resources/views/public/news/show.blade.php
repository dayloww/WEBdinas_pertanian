@extends('layouts.public')

@section('title', $post->title)

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-4xl mx-auto px-4 relative z-10 text-center">
        <span class="inline-block px-4 py-1.5 bg-green-500/20 backdrop-blur-md border border-green-400/30 text-green-300 text-[10px] font-bold uppercase tracking-widest rounded-full mb-6">{{ $post->category->name }}</span>
        <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 uppercase tracking-tight leading-tight">{{ $post->title }}</h1>
        <div class="flex items-center justify-center space-x-6 text-green-100/60 text-[10px] font-bold uppercase tracking-[0.2em]">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                {{ $post->created_at->format('d M Y') }}
            </div>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                {{ $post->views }} Views
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-4xl mx-auto px-4">
        @if($post->image)
        <div class="relative -mt-32 mb-16">
            <img src="{{ $post->image }}" class="w-full h-[500px] object-cover rounded-[3rem] shadow-2xl border-8 border-white" alt="{{ $post->title }}">
        </div>
        @endif

        <div class="prose prose-lg max-w-none prose-slate prose-headings:font-bold prose-headings:uppercase prose-headings:tracking-tight prose-a:text-green-600">
            {!! $post->content !!}
        </div>

        <div class="mt-20 pt-10 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <div class="flex items-center space-x-4">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Share:</span>
                <a href="#" class="p-2 bg-slate-50 rounded-full text-slate-400 hover:text-green-600 hover:bg-green-50 transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg></a>
                <a href="#" class="p-2 bg-slate-50 rounded-full text-slate-400 hover:text-green-600 hover:bg-green-50 transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16.36a4.198 4.198 0 110-8.396 4.198 4.198 0 010 8.396zm5.338-9.07a1.232 1.232 0 11-2.463 0 1.232 1.232 0 012.463 0z"></path></svg></a>
            </div>
            <a href="{{ route('news') }}" class="inline-flex items-center text-green-700 font-bold uppercase text-xs tracking-widest hover:text-green-900 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Berita
            </a>
        </div>
    </div>
</section>

<!-- Related News -->
@if($relatedNews->isNotEmpty())
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-slate-900 mb-12 uppercase tracking-tight">Berita Terkait</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedNews as $item)
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-lg shadow-slate-200/60 border border-slate-100 group">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $item->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $item->title }}">
                </div>
                <div class="p-6">
                    <h3 class="text-sm font-bold text-slate-900 mb-3 group-hover:text-green-700 transition-colors uppercase tracking-tight line-clamp-2">{{ $item->title }}</h3>
                    <a href="{{ route('news.show', $item->slug) }}" class="text-[10px] font-bold text-green-700 uppercase tracking-widest hover:text-green-900">Baca Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
