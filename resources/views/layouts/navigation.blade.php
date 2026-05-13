<nav x-data="{ open Master: true, openPublikasi: true }" class="w-72 min-h-screen bg-[#1a332a] text-white flex flex-col shadow-2xl z-50">
    <!-- Brand -->
    <div class="h-24 flex items-center px-8 border-b border-white/5">
        <div class="flex items-center">
            <img src="{{ asset('logo-pemerintah.png') }}" class="w-12 h-12 object-contain" alt="Logo Sangihe">
            <div class="ml-4">
                <h1 class="text-white font-bold text-sm leading-tight">Dinas Pertanian <br> <span class="text-xs font-medium text-white/60">Kab. Kepulauan Sangihe</span></h1>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="flex-1 px-4 py-8 overflow-y-auto custom-scrollbar">
        <div class="space-y-8">
            <!-- Dashboard Link -->
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-white border border-white/10' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="text-sm font-bold">Dashboard</span>
            </a>

            <!-- Data Master Section -->
            <div>
                <button @click="openMaster = !openMaster" class="w-full flex items-center justify-between px-4 py-2 text-[10px] font-black text-white/40 uppercase tracking-[0.3em]">
                    Data Master
                    <svg class="w-3 h-3 transition-transform" :class="openMaster ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="openMaster" x-transition class="mt-4 space-y-2">
                    <a href="{{ route('admin.lands.index') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.lands.*') ? 'bg-white/10 text-white' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                        <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        <span class="text-sm font-bold">Lahan</span>
                    </a>
                    <a href="{{ route('admin.sectors.index') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.sectors.*') || request()->routeIs('admin.sector-data.*') ? 'bg-white/10 text-white' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                        <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        <span class="text-sm font-bold">Statistik</span>
                    </a>
                </div>
            </div>

            <!-- Publikasi Section -->
            <div>
                <button @click="openPublikasi = !openPublikasi" class="w-full flex items-center justify-between px-4 py-2 text-[10px] font-black text-white/40 uppercase tracking-[0.3em]">
                    Publikasi
                    <svg class="w-3 h-3 transition-transform" :class="openPublikasi ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="openPublikasi" x-transition class="mt-4 space-y-2">
                    <a href="{{ route('admin.infographics.index') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.infographics.*') ? 'bg-white/10 text-white' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                        <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="text-sm font-bold">Infografis</span>
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.posts.*') ? 'bg-white/10 text-white' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                        <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4h4"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 15h6M9 11h6"></path></svg>
                        <span class="text-sm font-bold">Berita</span>
                    </a>
                    <a href="{{ route('admin.galleries.index') }}" class="flex items-center px-4 py-3 rounded-xl {{ request()->routeIs('admin.galleries.*') ? 'bg-white/10 text-white' : 'text-white/60 hover:bg-white/5 hover:text-white' }} transition-all">
                        <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="text-sm font-bold">Galeri</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- User Section Bottom -->
    <div class="p-6 border-t border-white/5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition-all">
                <svg class="w-5 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span class="text-sm font-bold">Keluar</span>
            </button>
        </form>
    </div>
</nav>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
</style>
