<div class="flex flex-col h-full">
    <!-- Brand -->
    <div class="h-20 flex items-center px-8 border-b border-white/5">
        <div class="flex items-center">
            <div class="bg-green-500 p-2 rounded-xl shadow-lg shadow-green-500/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            </div>
            <div class="ml-3">
                <h1 class="text-white font-bold text-lg tracking-tight">DINAS <span class="text-green-500">PERTANIAN</span></h1>
                <p class="text-[10px] text-white/40 font-bold uppercase tracking-widest leading-none">Sangihe Dashboard</p>
            </div>
        </div>
    </div>

    <!-- Nav Links -->
    <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto">
        <p class="px-4 text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mb-4">Main Menu</p>
        
        <x-admin-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" icon="dashboard">
            Dashboard
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.posts.index')" :active="request()->routeIs('admin.posts.*')" icon="news">
            Berita & Warta
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.*')" icon="category">
            Kategori Berita
        </x-admin-nav-link>

        <p class="px-4 text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-8 mb-4">Publikasi</p>

        <x-admin-nav-link :href="route('admin.programs.index')" :active="request()->routeIs('admin.programs.*')" icon="program">
            Program Kerja
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.galleries.index')" :active="request()->routeIs('admin.galleries.*')" icon="gallery">
            Galeri Foto
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.documents.index')" :active="request()->routeIs('admin.documents.*')" icon="document">
            PPID & Dokumen
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.announcements.index')" :active="request()->routeIs('admin.announcements.*')" icon="announcement">
            Pengumuman
        </x-admin-nav-link>

        <p class="px-4 text-[10px] font-bold text-white/30 uppercase tracking-[0.2em] mt-8 mb-4">Sistem</p>

        <x-admin-nav-link :href="route('admin.banners.index')" :active="request()->routeIs('admin.banners.*')" icon="banner">
            Banner Hero
        </x-admin-nav-link>

        <x-admin-nav-link :href="route('admin.settings.index')" :active="request()->routeIs('admin.settings.*')" icon="setting">
            Pengaturan Situs
        </x-admin-nav-link>
    </nav>

    <!-- Footer Sidebar -->
    <div class="p-6 border-t border-white/5">
        <div class="bg-white/5 rounded-2xl p-4 flex items-center">
            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-500 font-bold text-sm">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
            <div class="ml-3 truncate">
                <p class="text-sm font-bold text-white truncate">{{ Auth::user()->name }}</p>
                <p class="text-[10px] text-white/40 truncate">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
</div>
