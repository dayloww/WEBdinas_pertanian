<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Dinas Pertanian Sangihe') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        .green-gradient {
            background: linear-gradient(135deg, #1a4d2e 0%, #34a853 100%);
        }
        .text-green-primary {
            color: #1a4d2e;
        }
        .bg-green-primary {
            background-color: #1a4d2e;
        }
        .border-green-primary {
            border-color: #1a4d2e;
        }
    </style>
</head>
<body class="antialiased bg-slate-50 text-slate-900">
    <!-- Topbar -->
    <div class="hidden lg:block bg-green-950 text-white py-2 text-sm">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>{{ \App\Models\Setting::where('key', 'phone')->first()->value ?? '' }}</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>{{ \App\Models\Setting::where('key', 'email')->first()->value ?? '' }}</span>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#" class="hover:text-green-400 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg></a>
                <a href="#" class="hover:text-green-400 transition-colors"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16.36a4.198 4.198 0 110-8.396 4.198 4.198 0 010 8.396zm5.338-907a1.232 1.232 0 11-2.463 0 1.232 1.232 0 012.463 0z"></path></svg></a>
            </div>
        </div>
    </div>

    <!-- Header & Navbar -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-sm" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center group">
                    <div class="bg-green-primary p-2 rounded-xl group-hover:rotate-6 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-xl font-bold text-green-950 leading-tight uppercase tracking-tight">Dinas Pertanian</h1>
                        <p class="text-[10px] text-slate-500 font-medium uppercase tracking-widest">Kab. Kepulauan Sangihe</p>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-sm font-semibold hover:text-green-600 transition-colors">Beranda</a>
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="flex items-center text-sm font-semibold hover:text-green-600 transition-colors">
                            Profil <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open" x-transition class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-xl py-2 border border-slate-100">
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-50 hover:text-green-700">Visi & Misi</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-50 hover:text-green-700">Struktur Organisasi</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-green-50 hover:text-green-700">Tugas & Fungsi</a>
                        </div>
                    </div>
                    <a href="#" class="text-sm font-semibold hover:text-green-600 transition-colors">Program</a>
                    <a href="#" class="text-sm font-semibold hover:text-green-600 transition-colors">Berita</a>
                    <a href="#" class="text-sm font-semibold hover:text-green-600 transition-colors">Galeri</a>
                    <a href="#" class="text-sm font-semibold hover:text-green-600 transition-colors">Kontak</a>
                    <a href="#" class="bg-green-primary text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-green-800 transition-all shadow-lg shadow-green-900/20 active:scale-95">PPID</a>
                </nav>

                <!-- Mobile Toggle -->
                <button @click="open = !open" class="lg:hidden p-2 text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!open"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="open"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div x-show="open" x-transition class="lg:hidden bg-white border-t border-slate-100">
            <div class="px-4 py-6 space-y-4">
                <a href="{{ route('home') }}" class="block font-semibold">Beranda</a>
                <a href="#" class="block font-semibold">Profil</a>
                <a href="#" class="block font-semibold">Program</a>
                <a href="#" class="block font-semibold">Berita</a>
                <a href="#" class="block font-semibold">Galeri</a>
                <a href="#" class="block font-semibold">Kontak</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-green-950 text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="bg-white p-2 rounded-xl">
                            <svg class="w-8 h-8 text-green-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </div>
                        <div class="ml-3">
                            <h2 class="text-xl font-bold uppercase tracking-tight">Dinas Pertanian</h2>
                            <p class="text-[10px] text-green-400 font-medium uppercase tracking-widest">Kab. Kepulauan Sangihe</p>
                        </div>
                    </div>
                    <p class="text-green-100/70 text-sm leading-relaxed mb-6">
                        {{ \App\Models\Setting::where('key', 'about_short')->first()->value ?? '' }}
                    </p>
                    <div class="flex space-x-4">
                        <!-- Sosmed Icons -->
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-6">Tautan Cepat</h3>
                    <ul class="space-y-4 text-green-100/70 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Visi & Misi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Program Utama</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Laporan Tahunan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Berita Terkini</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-6">Kontak Kami</h3>
                    <ul class="space-y-4 text-green-100/70 text-sm">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 text-green-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>{{ \App\Models\Setting::where('key', 'address')->first()->value ?? '' }}</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>{{ \App\Models\Setting::where('key', 'phone')->first()->value ?? '' }}</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-6">Jam Kerja</h3>
                    <p class="text-green-100/70 text-sm mb-4">{{ \App\Models\Setting::where('key', 'working_hours')->first()->value ?? '' }}</p>
                    <div class="bg-green-900/50 p-4 rounded-xl border border-green-800">
                        <p class="text-xs text-green-400 font-medium uppercase mb-2">Punya Pertanyaan?</p>
                        <a href="mailto:{{ \App\Models\Setting::where('key', 'email')->first()->value ?? '' }}" class="text-sm font-bold hover:text-green-300 transition-colors">{{ \App\Models\Setting::where('key', 'email')->first()->value ?? '' }}</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-green-900 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-green-100/40 font-medium">
                <p>&copy; {{ date('Y') }} Dinas Pertanian Kabupaten Kepulauan Sangihe. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-green-200">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-green-200">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
