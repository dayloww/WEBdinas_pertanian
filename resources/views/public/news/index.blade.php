@extends('layouts.public')

@section('title', 'Berita & Informasi')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Warta Pertanian</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Dapatkan informasi terbaru mengenai program, kegiatan, dan inovasi pertanian di Kabupaten Kepulauan Sangihe.</p>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Sidebar -->
            <div class="lg:w-1/3">
                <div class="sticky top-32 space-y-8">
                    <!-- Search -->
                    <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-lg font-bold text-slate-900 mb-6 uppercase tracking-wider text-xs border-b pb-2">Cari Berita</h3>
                        <form action="{{ route('news') }}" method="GET" class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Ketik kata kunci..." class="w-full pl-12 pr-4 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm">
                            <svg class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                        <h3 class="text-lg font-bold text-slate-900 mb-6 uppercase tracking-wider text-xs border-b pb-2">Kategori</h3>
                        <div class="space-y-3">
                            <a href="{{ route('news') }}" class="flex justify-between items-center px-4 py-3 rounded-xl {{ !request('category') ? 'bg-green-primary text-white shadow-lg shadow-green-900/20' : 'bg-slate-50 text-slate-600 hover:bg-slate-100' }} transition-all font-bold text-xs uppercase tracking-widest">
                                Semua
                                <span class="opacity-50">#</span>
                            </a>
                            @foreach($categories as $category)
                            <a href="{{ route('news', ['category' => $category->slug]) }}" class="flex justify-between items-center px-4 py-3 rounded-xl {{ request('category') == $category->slug ? 'bg-green-primary text-white shadow-lg shadow-green-900/20' : 'bg-slate-50 text-slate-600 hover:bg-slate-100' }} transition-all font-bold text-xs uppercase tracking-widest">
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
                    <div class="bg-white p-20 rounded-[3rem] text-center shadow-xl shadow-slate-200/50 border border-slate-100">
                        <div class="bg-slate-50 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-300">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4h4"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 15h6M9 11h6"></path></svg>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Berita tidak ditemukan</h2>
                        <p class="text-slate-500">Coba gunakan kata kunci lain atau pilih kategori yang berbeda.</p>
                        <a href="{{ route('news') }}" class="inline-block mt-8 text-green-700 font-bold uppercase text-xs tracking-widest border-b-2 border-green-700 pb-1">Reset Pencarian</a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($news as $item)
                        <div class="bg-white rounded-[2rem] overflow-hidden shadow-xl shadow-slate-200/60 border border-slate-100 group">
                            <div class="relative h-56 overflow-hidden">
                                <img src="{{ $item->image }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $item->title }}">
                                <div class="absolute top-6 left-6">
                                    <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-bold text-green-700 uppercase tracking-widest shadow-lg">{{ $item->category->name }}</span>
                                </div>
                            </div>
                            <div class="p-8">
                                <div class="flex items-center text-[10px] text-slate-400 font-bold uppercase tracking-widest mb-4">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    {{ $item->created_at->format('d M Y') }}
                                </div>
                                <h3 class="text-lg font-bold text-slate-900 mb-4 group-hover:text-green-700 transition-colors leading-snug uppercase tracking-tight">{{ $item->title }}</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2">
                                    {{ Str::limit(strip_tags($item->content), 100) }}
                                </p>
                                <a href="{{ route('news.show', $item->slug) }}" class="flex items-center text-green-700 font-bold hover:text-green-900 transition-colors uppercase text-[10px] tracking-[0.2em]">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-16">
                        {{ $news->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
