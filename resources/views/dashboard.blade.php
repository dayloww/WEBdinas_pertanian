<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Dashboard Overview</h2>
                <p class="text-sm text-gray-500 mt-1">Selamat datang kembali, {{ Auth::user()->name }}. Pantau statistik dinas Anda di sini.</p>
            </div>
            <div class="flex items-center space-x-4">
                <span class="px-4 py-2 bg-white border border-gray-100 rounded-xl text-xs font-bold text-gray-500 shadow-sm">{{ date('l, d F Y') }}</span>
            </div>
        </div>
    </x-slot>

    <div class="space-y-8">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Stat Card -->
            <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-gray-50 group hover:scale-[1.02] transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-50 text-blue-600 rounded-2xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+12%</span>
                </div>
                <h4 class="text-3xl font-bold text-gray-900 mb-1">{{ \App\Models\Post::count() }}</h4>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total Berita</p>
            </div>

            <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-gray-50 group hover:scale-[1.02] transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-50 text-green-600 rounded-2xl group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+5%</span>
                </div>
                <h4 class="text-3xl font-bold text-gray-900 mb-1">157</h4>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Kelompok Tani</p>
            </div>

            <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-gray-50 group hover:scale-[1.02] transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-50 text-purple-600 rounded-2xl group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <h4 class="text-3xl font-bold text-gray-900 mb-1">{{ \App\Models\Gallery::count() }}</h4>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total Foto</p>
            </div>

            <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-gray-50 group hover:scale-[1.02] transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-orange-50 text-orange-600 rounded-2xl group-hover:bg-orange-600 group-hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                </div>
                <h4 class="text-3xl font-bold text-gray-900 mb-1">{{ \App\Models\Post::sum('views') }}</h4>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total Kunjungan</p>
            </div>
        </div>

        <!-- Recent Activity & Charts Placeholder -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                    <h3 class="text-lg font-bold text-gray-900 mb-6 uppercase tracking-tight">Berita Terbaru</h3>
                    <div class="space-y-4">
                        @foreach(\App\Models\Post::latest()->take(5)->get() as $post)
                        <div class="flex items-center justify-between p-4 hover:bg-gray-50 rounded-2xl transition-colors">
                            <div class="flex items-center space-x-4">
                                <img src="{{ $post->image }}" class="w-12 h-12 rounded-xl object-cover" alt="">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">{{ $post->title }}</p>
                                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-50 text-green-700 text-[10px] font-bold uppercase rounded-full">{{ $post->status }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <div class="bg-green-primary p-8 rounded-[2rem] shadow-xl shadow-green-900/20 text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
                    <div class="relative z-10">
                        <h3 class="text-lg font-bold mb-2 uppercase tracking-tight">Status Sistem</h3>
                        <p class="text-green-100 text-xs mb-8 leading-relaxed">Seluruh sistem berjalan normal. Tidak ada kendala teknis yang dilaporkan.</p>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-xs">
                                <span>Storage</span>
                                <span class="font-bold">45% Used</span>
                            </div>
                            <div class="w-full bg-green-900/50 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-white w-[45%] h-full rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
