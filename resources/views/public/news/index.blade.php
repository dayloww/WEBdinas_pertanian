@extends('layouts.public')

@section('title', 'Berita & Informasi')

@section('content')
<!-- Immersive Page Header -->
<section class="pt-56 pb-32 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover opacity-20 grayscale-[0.5]" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-green-950/80 to-green-950"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="reveal-top text-center">
            <p class="text-green-400 font-black uppercase tracking-[0.5em] text-[10px] mb-8">Warta & Informasi</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 uppercase tracking-tighter italic">Kabar <span class="text-green-500">Pertanian</span> Sangihe</h1>
            <div class="w-24 h-[1px] bg-white/20 mx-auto"></div>
        </div>
    </div>
</section>

<section class="py-32 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-20">
            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <div class="sticky top-32 space-y-12">
                    <!-- Search -->
                    <div class="reveal bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-8">Cari Berita</h3>
                        <form action="{{ route('news') }}" method="GET" class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Ketik kata kunci..." class="w-full pl-12 pr-6 py-5 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm font-bold">
                            <svg class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="reveal bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-8">Kategori</h3>
                        <div class="space-y-4">
                            <a href="{{ route('news') }}" class="flex justify-between items-center px-6 py-4 rounded-2xl {{ !request('category') ? 'bg-green-600 text-white shadow-xl shadow-green-900/20' : 'bg-slate-50 text-slate-600 hover:bg-slate-100' }} transition-all font-bold text-[10px] uppercase tracking-widest">
                                Semua Kabar
                                <span class="opacity-50">#</span>
                            </a>
                            @foreach($categories as $category)
                            <a href="{{ route('news', ['category' => $category->slug]) }}" class="flex justify-between items-center px-6 py-4 rounded-2xl {{ request('category') == $category->slug ? 'bg-green-600 text-white shadow-xl shadow-green-900/20' : 'bg-slate-50 text-slate-600 hover:bg-slate-100' }} transition-all font-bold text-[10px] uppercase tracking-widest">
                                {{ $category->name }}
                                <span class="opacity-50">{{ $category->posts_count }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:w-2/3">
                @if($news->isEmpty())
                    <div class="reveal bg-white p-24 rounded-[4rem] text-center shadow-2xl shadow-slate-200/50 border border-slate-100">
                        <div class="bg-slate-50 w-24 h-24 rounded-[2rem] flex items-center justify-center mx-auto mb-10 text-slate-300">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4h4"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 15h6M9 11h6"></path></svg>
                        </div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-4 uppercase tracking-tight">Kabar Tidak Ditemukan</h2>
                        <p class="text-slate-500 font-medium">Coba gunakan kata kunci lain atau pilih kategori yang berbeda.</p>
                        <a href="{{ route('news') }}" class="inline-block mt-12 px-10 py-4 bg-green-600 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full shadow-xl shadow-green-900/20">Reset Filter</a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        @foreach($news as $index => $item)
                        <div class="reveal bg-white rounded-[3rem] overflow-hidden shadow-2xl shadow-slate-200/60 border border-slate-100 group transition-all duration-500 hover:-translate-y-4" style="transition-delay: {{ $index * 100 }}ms;">
                            <div class="relative h-72 overflow-hidden">
                                <img src="{{ $item->image }}" class="w-full h-full object-cover grayscale-[0.3] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-1000" alt="{{ $item->title }}">
                                <div class="absolute top-8 left-8">
                                    <span class="px-5 py-2 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-black text-green-700 uppercase tracking-widest shadow-xl">{{ $item->category->name }}</span>
                                </div>
                            </div>
                            <div class="p-10">
                                <div class="flex items-center text-[10px] text-slate-400 font-bold uppercase tracking-[0.2em] mb-6">
                                    <svg class="w-4 h-4 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    {{ $item->created_at->format('d M Y') }}
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 mb-6 group-hover:text-green-600 transition-colors leading-tight uppercase tracking-tight italic">{{ $item->title }}</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-10 line-clamp-3 font-medium">
                                    {{ Str::limit(strip_tags($item->content), 120) }}
                                </p>
                                <a href="{{ route('news.show', $item->slug) }}" class="flex items-center text-[10px] font-black text-slate-950 hover:text-green-600 transition-all uppercase tracking-[0.3em] group-hover:pl-2">
                                    Baca Cerita
                                    <svg class="w-4 h-4 ml-3 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-20 flex justify-center">
                        {{ $news->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
