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
        [x-cloak] { display: none !important; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        .green-gradient {
            background: linear-gradient(135deg, #1a4d2e 0%, #34a853 100%);
        }
        .text-green-primary { color: #1a4d2e; }
        .bg-green-primary { background-color: #1a4d2e; }
        .border-green-primary { border-color: #1a4d2e; }

        /* Smooth Transitions */
        .page-transition {
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Reveal on Scroll */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased bg-slate-50 text-slate-900 page-transition">

    <!-- Header & Navbar (Transparent to White on Scroll) -->
    <header class="fixed top-0 inset-x-0 z-[100] transition-all duration-500" 
            x-data="{ scrolled: false, mobileOpen: false }" 
            @scroll.window="scrolled = (window.pageYOffset > 50)"
            :class="scrolled ? 'bg-white/90 backdrop-blur-md shadow-lg py-3' : 'bg-transparent py-6'">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center group">
                    <img src="{{ asset('logo-pemerintah.png') }}" class="w-12 h-12 object-contain group-hover:rotate-6 transition-transform drop-shadow-xl" alt="Logo Sangihe">
                    <div class="ml-4">
                        <h1 class="text-xl font-bold leading-none uppercase tracking-tight transition-colors" :class="scrolled ? 'text-green-950' : 'text-white lg:group-hover:text-green-400'">Dinas Pertanian</h1>
                        <p class="text-[10px] font-bold uppercase tracking-[0.3em] mt-1" :class="scrolled ? 'text-slate-400' : 'text-green-100/60'">Kab. Kepulauan Sangihe</p>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden lg:flex items-center space-x-10">
                    <a href="{{ route('home') }}" class="text-sm font-bold uppercase tracking-widest transition-colors" :class="scrolled ? 'text-slate-600 hover:text-green-600' : 'text-white/80 hover:text-white'">Beranda</a>
                    <a href="{{ route('profile') }}" class="text-sm font-bold uppercase tracking-widest transition-colors" :class="scrolled ? 'text-slate-600 hover:text-green-600' : 'text-white/80 hover:text-white'">Profil</a>
                    <a href="{{ route('programs') }}" class="text-sm font-bold uppercase tracking-widest transition-colors" :class="scrolled ? 'text-slate-600 hover:text-green-600' : 'text-white/80 hover:text-white'">Program</a>
                    <a href="{{ route('news') }}" class="text-sm font-bold uppercase tracking-widest transition-colors" :class="scrolled ? 'text-slate-600 hover:text-green-600' : 'text-white/80 hover:text-white'">Berita</a>
                    <a href="{{ route('gallery') }}" class="text-sm font-bold uppercase tracking-widest transition-colors" :class="scrolled ? 'text-slate-600 hover:text-green-600' : 'text-white/80 hover:text-white'">Galeri</a>
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-green-primary text-white rounded-full text-xs font-black uppercase tracking-[0.2em] hover:bg-green-800 transition-all shadow-xl shadow-green-900/20 active:scale-95">Hubungi Kami</a>
                </nav>

                <!-- Mobile Toggle -->
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-xl transition-colors" :class="scrolled ? 'text-slate-900 bg-slate-100' : 'text-white bg-white/10'">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileOpen"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileOpen" x-cloak><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="lg:hidden bg-white border-t border-slate-100 shadow-2xl absolute inset-x-0 top-full" x-cloak>
            <div class="px-6 py-8 space-y-6">
                <a href="{{ route('home') }}" class="block text-sm font-bold uppercase tracking-widest text-slate-900">Beranda</a>
                <a href="{{ route('profile') }}" class="block text-sm font-bold uppercase tracking-widest text-slate-900">Profil</a>
                <a href="{{ route('programs') }}" class="block text-sm font-bold uppercase tracking-widest text-slate-900">Program</a>
                <a href="{{ route('news') }}" class="block text-sm font-bold uppercase tracking-widest text-slate-900">Berita</a>
                <a href="{{ route('gallery') }}" class="block text-sm font-bold uppercase tracking-widest text-slate-900">Galeri</a>
                <a href="{{ route('contact') }}" class="block text-sm font-bold uppercase tracking-widest text-green-600">Kontak</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-green-950 text-white pt-32 pb-12 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-5"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-20 mb-24">
                <div class="lg:col-span-1">
                    <div class="flex items-center mb-8">
                        <img src="{{ asset('logo-pemerintah.png') }}" class="w-14 h-14 object-contain" alt="Logo Sangihe">
                        <div class="ml-4">
                            <h2 class="text-xl font-bold uppercase tracking-tight">Dinas Pertanian</h2>
                            <p class="text-[10px] text-green-400 font-bold uppercase tracking-[0.2em]">Sangihe Kepulauan</p>
                        </div>
                    </div>
                    <p class="text-green-100/50 text-sm leading-relaxed mb-10 italic">
                        "Mewujudkan kemandirian pangan dan kesejahteraan petani di bumi Sangihe melalui inovasi dan pemberdayaan berkelanjutan."
                    </p>
                </div>
                <div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-white/40 mb-8">Tautan Cepat</h3>
                    <ul class="space-y-4 text-green-100/70 text-sm font-medium">
                        <li><a href="{{ route('vision') }}" class="hover:text-white transition-colors">Visi & Misi</a></li>
                        <li><a href="{{ route('programs') }}" class="hover:text-white transition-colors">Program Utama</a></li>
                        <li><a href="{{ route('documents') }}" class="hover:text-white transition-colors">PPID Dokumen</a></li>
                        <li><a href="{{ route('news') }}" class="hover:text-white transition-colors">Warta Berita</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-white/40 mb-8">Hubungi Kami</h3>
                    <ul class="space-y-6 text-green-100/70 text-sm font-medium">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-4 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>{{ \App\Models\Setting::where('key', 'address')->first()->value ?? 'Kabupaten Kepulauan Sangihe' }}</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-4 text-green-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>{{ \App\Models\Setting::where('key', 'phone')->first()->value ?? '' }}</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xs font-black uppercase tracking-[0.3em] text-white/40 mb-8">Jam Operasional</h3>
                    <p class="text-green-100/70 text-sm mb-6">{{ \App\Models\Setting::where('key', 'working_hours')->first()->value ?? 'Senin - Jumat: 08.00 - 16.00' }}</p>
                    <div class="bg-green-900/30 p-6 rounded-2xl border border-white/5">
                        <p class="text-[10px] text-green-500 font-bold uppercase tracking-widest mb-2">Email Resmi</p>
                        <a href="mailto:{{ \App\Models\Setting::where('key', 'email')->first()->value ?? '' }}" class="text-sm font-bold hover:text-white transition-colors">{{ \App\Models\Setting::where('key', 'email')->first()->value ?? '' }}</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center text-[10px] text-white/20 font-bold uppercase tracking-[0.2em]">
                <p>&copy; {{ date('Y') }} Dinas Pertanian Kabupaten Kepulauan Sangihe. All rights reserved.</p>
                <div class="flex space-x-8 mt-6 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Reveal animation on scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Initial call
        reveal();
    </script>
</body>
</html>
