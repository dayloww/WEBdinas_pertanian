<x-guest-layout>
    <div
        class="relative min-h-screen overflow-hidden"
        style="background-image:
            linear-gradient(180deg, rgba(17, 24, 39, 0.12), rgba(17, 24, 39, 0.28)),
            url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;"
    >
        <div class="absolute inset-0 bg-gradient-to-br from-white/10 via-transparent to-emerald-950/20"></div>

        <div class="relative flex min-h-screen items-center justify-center px-6 py-10">
            <div class="w-full max-w-md rounded-[2rem] border border-white/40 bg-white/15 p-8 text-white shadow-2xl backdrop-blur-xl md:p-10">
                <div class="mb-8">
                    <div class="mb-6 flex items-center gap-4">
                        <img src="{{ asset('logo-pemerintah.png') }}" alt="Logo DISPERTA" class="h-14 w-14 rounded-2xl border border-white/30 bg-white/20 p-2 backdrop-blur">
                        <div>
                            <p class="text-[10px] font-black uppercase tracking-[0.35em] text-white/70">Admin Panel</p>
                            <p class="mt-1 text-sm font-semibold text-white/80">Dinas Pertanian Kab. Kepulauan Sangihe</p>
                        </div>
                    </div>

                    <h1 class="text-4xl font-black tracking-tight text-white">Login</h1>
                    <p class="mt-3 text-base leading-relaxed text-white/85">
                        Welcome back, silakan masuk untuk mengelola dashboard admin DISPERTA.
                    </p>
                </div>

                <x-auth-session-status class="mb-4 rounded-2xl border border-white/20 bg-white/10 px-4 py-3 text-sm text-white" :status="session('status')" />

                @if ($errors->any())
                    <div class="mb-4 rounded-2xl border border-red-200/30 bg-red-500/15 px-4 py-3 text-sm text-white">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5" x-data="{ showPassword: false }">
                    @csrf

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-white/90">Email</label>
                        <div class="relative">
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Masukkan email admin"
                                class="w-full rounded-2xl border border-white/35 bg-white/10 px-5 py-4 pr-14 text-sm text-white placeholder:text-white/60 focus:border-lime-300 focus:outline-none focus:ring-2 focus:ring-lime-200/50"
                            >
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-5 text-white/65">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16 12H8m0 0l3-3m-3 3l3 3M21 12c0 4.97-4.03 9-9 9a9 9 0 110-18c4.97 0 9 4.03 9 9z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-white/90">Password</label>
                        <div class="relative">
                            <input
                                id="password"
                                name="password"
                                x-bind:type="showPassword ? 'text' : 'password'"
                                required
                                autocomplete="current-password"
                                placeholder="Masukkan password"
                                class="w-full rounded-2xl border border-white/35 bg-white/10 px-5 py-4 pr-14 text-sm text-white placeholder:text-white/60 focus:border-lime-300 focus:outline-none focus:ring-2 focus:ring-lime-200/50"
                            >
                            <button
                                type="button"
                                @click="showPassword = !showPassword"
                                class="absolute inset-y-0 right-0 flex items-center pr-5 text-white/70 transition hover:text-white"
                                aria-label="Tampilkan password"
                            >
                                <svg x-show="!showPassword" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.98 8.223A10.477 10.477 0 0112 5.5c4.132 0 7.85 2.39 9.592 6.223a1.127 1.127 0 010 .554A10.477 10.477 0 0112 18.5a10.477 10.477 0 01-8.02-3.723 1.127 1.127 0 010-.554z" />
                                    <circle cx="12" cy="12" r="3" stroke-width="1.8"></circle>
                                </svg>
                                <svg x-show="showPassword" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 4l16 16M10.58 10.58A2 2 0 0012 14a2 2 0 001.42-.58M9.88 5.09A9.77 9.77 0 0112 4.5c4.13 0 7.85 2.39 9.59 6.22a1.13 1.13 0 010 .56 10.49 10.49 0 01-4.04 4.96M6.1 6.1A10.45 10.45 0 002.41 10.72a1.13 1.13 0 000 .56A10.48 10.48 0 0012 17.5c1.42 0 2.78-.28 4.03-.79" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between gap-4">
                        <label for="remember_me" class="inline-flex items-center gap-3 text-sm text-white/90">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="h-5 w-5 rounded border-white/40 bg-white/10 text-lime-500 focus:ring-lime-300"
                            >
                            <span>Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm font-semibold text-white/80 transition hover:text-white" href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        @endif
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-2xl bg-gradient-to-r from-lime-400 via-lime-500 to-emerald-500 px-6 py-4 text-xl font-black text-white shadow-lg shadow-lime-950/20 transition hover:scale-[1.01] hover:from-lime-300 hover:to-emerald-400"
                    >
                        Login
                    </button>

                    <div class="space-y-2 pt-2 text-center">
                        <p class="text-sm text-white/85">
                            Halaman ini khusus untuk admin DISPERTA.
                        </p>
                        <a href="{{ url('/') }}" class="text-sm font-bold text-white transition hover:text-lime-200">
                            Kembali ke website
                        </a>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm font-semibold text-white/80">
                    Sistem Informasi Dinas Pertanian
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
