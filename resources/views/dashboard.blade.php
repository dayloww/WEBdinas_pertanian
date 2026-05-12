<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Admin Control Panel</h2>
                <p class="text-sm text-gray-500 mt-1">Sistem Informasi Terintegrasi Dinas Pertanian Kab. Kepulauan Sangihe</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100 flex items-center">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">System Online</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="space-y-10">
        <!-- Main Division Cards (Glassmorphism Style) -->
        <div>
            <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.3em] mb-6 flex items-center">
                <span class="w-8 h-[1px] bg-gray-200 mr-3"></span>
                Manajemen Bidang Kerja
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Bidang Perkebunan -->
                <div class="relative group h-64 overflow-hidden rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1592419044706-39796d40f98c?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-tight">Bidang Perkebunan</h4>
                        <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mt-1">Kelola Komoditas & Lahan</p>
                    </div>
                </div>

                <!-- Bidang Peternakan -->
                <div class="relative group h-64 overflow-hidden rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-tight">Bidang Peternakan</h4>
                        <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mt-1">Kelola Hewan Ternak & Pakan</p>
                    </div>
                </div>

                <!-- Bidang Pangan -->
                <div class="relative group h-64 overflow-hidden rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-tight">Bidang Pangan</h4>
                        <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mt-1">Ketahanan Pangan Daerah</p>
                    </div>
                </div>

                <!-- Bidang Penyuluhan -->
                <div class="relative group h-64 overflow-hidden rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=800" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-tight">Bidang Penyuluhan</h4>
                        <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mt-1">Edukasi & Kelompok Tani</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Statistik Berita</h5>
                <p class="text-4xl font-bold text-gray-900">{{ \App\Models\Post::count() }}</p>
                <div class="mt-4 flex items-center text-green-500 text-xs font-bold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    +12.5% Month
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Total Kunjungan</h5>
                <p class="text-4xl font-bold text-gray-900">{{ \App\Models\Post::sum('views') }}</p>
                <div class="mt-4 flex items-center text-blue-500 text-xs font-bold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    +8.2% Week
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Total Gallery</h5>
                <p class="text-4xl font-bold text-gray-900">{{ \App\Models\Gallery::count() }}</p>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Program Aktif</h5>
                <p class="text-4xl font-bold text-gray-900">{{ \App\Models\Program::count() }}</p>
            </div>
        </div>

        <!-- Recent Activity Section -->
        <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50 overflow-hidden">
            <div class="p-10 border-b border-gray-50 flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-900 uppercase tracking-tight">Update Berita Terbaru</h3>
                <a href="{{ route('admin.posts.index') }}" class="text-[10px] font-black text-green-600 uppercase tracking-widest hover:text-green-800 transition-colors">Lihat Semua</a>
            </div>
            <div class="divide-y divide-gray-50">
                @foreach(\App\Models\Post::with('category')->latest()->take(5)->get() as $post)
                <div class="p-8 flex items-center justify-between hover:bg-gray-50/50 transition-colors">
                    <div class="flex items-center space-x-6">
                        <img src="{{ $post->image }}" class="w-16 h-16 rounded-2xl object-cover shadow-lg" alt="">
                        <div>
                            <h5 class="font-bold text-gray-900 uppercase tracking-tight text-sm">{{ $post->title }}</h5>
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">{{ $post->category->name }} • {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="px-4 py-1.5 bg-green-50 text-green-700 text-[10px] font-bold uppercase tracking-widest rounded-full border border-green-100">{{ $post->status }}</span>
                        <a href="{{ route('admin.posts.edit', $post) }}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
