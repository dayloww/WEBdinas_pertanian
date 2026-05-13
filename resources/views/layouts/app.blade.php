<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800|outfit:400,500,600,700,800" rel="stylesheet" />

        <!-- Leaflet Map -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            [x-cloak] { display: none !important; }
            body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f1f5f9; }
            h1, h2, h3, h4, .font-heading { font-family: 'Outfit', sans-serif; }
            .sidebar-active { background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.1); }
        </style>
    </head>
    <body class="antialiased">
        <div class="min-h-screen flex" x-data="{ sidebarOpen: true }">
            <!-- Sidebar -->
            <aside 
                class="fixed lg:relative z-50 transition-transform duration-300 transform"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:hidden'"
            >
                @include('layouts.navigation')
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col min-w-0">
                <!-- Top Navbar -->
                <header class="bg-white border-b border-gray-100 sticky top-0 z-40">
                    <div class="px-8 h-20 flex items-center justify-between">
                        <div class="flex items-center flex-1">
                            <button @click="sidebarOpen = !sidebarOpen" class="p-2 mr-6 rounded-lg text-gray-500 hover:bg-gray-50 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            </button>
                            
                            <!-- Search Bar -->
                            <div class="max-w-md w-full relative hidden md:block">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </span>
                                <input type="text" placeholder="Cari..." class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-xl text-sm focus:ring-2 focus:ring-green-500 transition-all">
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-6">
                            <!-- Notification -->
                            <button class="relative p-2 text-gray-400 hover:text-green-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                            </button>

                            <!-- User Profile -->
                            <div class="flex items-center pl-6 border-l border-gray-100">
                                <div class="text-right mr-4 hidden md:block">
                                    <p class="text-sm font-black text-gray-900 leading-none">Admin DISPERTA</p>
                                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Super Admin</p>
                                </div>
                                <img src="https://ui-avatars.com/api/?name=Admin+DISPERTA&background=1a332a&color=fff" class="w-10 h-10 rounded-xl shadow-lg" alt="Avatar">
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="p-6 md:p-8 xl:p-10 bg-[#eef3ef]">
                    @php
                        $adminQuickLinks = [
                            [
                                'label' => 'Data Statistik',
                                'description' => 'Input unggas, ternak, dan daging',
                                'index' => Route::has('admin.sector-data.index') ? route('admin.sector-data.index') : null,
                                'create' => Route::has('admin.sector-data.create') ? route('admin.sector-data.create') : null,
                                'active' => request()->routeIs('admin.sector-data.*'),
                            ],
                            [
                                'label' => 'Data Lahan',
                                'description' => 'Kelola lahan untuk peta admin',
                                'index' => Route::has('admin.lands.index') ? route('admin.lands.index') : null,
                                'create' => Route::has('admin.lands.create') ? route('admin.lands.create') : null,
                                'active' => request()->routeIs('admin.lands.*'),
                            ],
                            [
                                'label' => 'Infografis',
                                'description' => 'Tambah materi visual publikasi',
                                'index' => Route::has('admin.infographics.index') ? route('admin.infographics.index') : null,
                                'create' => Route::has('admin.infographics.create') ? route('admin.infographics.create') : null,
                                'active' => request()->routeIs('admin.infographics.*'),
                            ],
                            [
                                'label' => 'Berita',
                                'description' => 'Tulis dan publish berita terbaru',
                                'index' => Route::has('admin.posts.index') ? route('admin.posts.index') : null,
                                'create' => Route::has('admin.posts.create') ? route('admin.posts.create') : null,
                                'active' => request()->routeIs('admin.posts.*'),
                            ],
                            [
                                'label' => 'Galeri',
                                'description' => 'Kelola foto kegiatan dinas',
                                'index' => Route::has('admin.galleries.index') ? route('admin.galleries.index') : null,
                                'create' => Route::has('admin.galleries.create') ? route('admin.galleries.create') : null,
                                'active' => request()->routeIs('admin.galleries.*'),
                            ],
                            [
                                'label' => 'Bidang',
                                'description' => 'Atur kategori sektor data',
                                'index' => Route::has('admin.sectors.index') ? route('admin.sectors.index') : null,
                                'create' => Route::has('admin.sectors.create') ? route('admin.sectors.create') : null,
                                'active' => request()->routeIs('admin.sectors.*'),
                            ],
                        ];
                    @endphp

                    <div class="space-y-8">
                        @isset($header)
                            <section class="rounded-[2rem] border border-white bg-white px-6 py-6 shadow-xl shadow-slate-900/5 md:px-8">
                                {{ $header }}
                            </section>
                        @endisset

                        <section class="rounded-[2rem] border border-white bg-white p-6 shadow-xl shadow-slate-900/5">
                            <div class="flex flex-col gap-2 md:flex-row md:items-end md:justify-between">
                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Aksi Cepat Admin</p>
                                    <h2 class="mt-2 text-2xl font-black text-slate-900">Tambah dan lihat data lebih cepat</h2>
                                    <p class="mt-2 max-w-2xl text-sm text-slate-500">
                                        Semua halaman admin sekarang punya jalur yang sama untuk membuka daftar data dan menambahkan data baru tanpa kembali ke dashboard.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
                                @foreach ($adminQuickLinks as $link)
                                    @if ($link['index'] || $link['create'])
                                        <div class="rounded-[1.75rem] border {{ $link['active'] ? 'border-green-200 bg-green-50/70' : 'border-slate-100 bg-slate-50/80' }} p-5 transition-all">
                                            <div class="flex items-start justify-between gap-4">
                                                <div>
                                                    <h3 class="text-base font-black text-slate-900">{{ $link['label'] }}</h3>
                                                    <p class="mt-2 text-sm text-slate-500">{{ $link['description'] }}</p>
                                                </div>
                                                @if ($link['active'])
                                                    <span class="rounded-full border border-green-200 bg-white px-3 py-1 text-[10px] font-black uppercase tracking-widest text-green-700">
                                                        Aktif
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="mt-5 flex flex-wrap gap-3">
                                                @if ($link['index'])
                                                    <a href="{{ $link['index'] }}" class="rounded-2xl border border-slate-200 bg-white px-4 py-2 text-xs font-black uppercase tracking-widest text-slate-700 transition-all hover:border-slate-300 hover:bg-slate-100">
                                                        Lihat Data
                                                    </a>
                                                @endif
                                                @if ($link['create'])
                                                    <a href="{{ $link['create'] }}" class="rounded-2xl bg-[#1a332a] px-4 py-2 text-xs font-black uppercase tracking-widest text-white transition-all hover:bg-[#244638]">
                                                        Tambah Data
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </section>

                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
        
        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        @stack('scripts')
    </body>
</html>
