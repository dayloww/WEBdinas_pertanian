<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1920');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/30 backdrop-blur-[2px]"></div>

        <div class="w-full sm:max-w-md mt-6 px-10 py-12 bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl overflow-hidden sm:rounded-[2.5rem] relative z-10">
            <!-- Header -->
            <div class="mb-10 text-center sm:text-left">
                <h2 class="text-4xl font-bold text-white mb-2">Login</h2>
                <p class="text-white/70 text-sm">Welcome back please login to your account</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="relative group">
                    <input id="email" class="block w-full px-5 py-4 bg-transparent border border-white/30 rounded-2xl text-white placeholder-white/50 focus:border-green-400 focus:ring-0 transition-all peer" type="email" name="email" :value="old('email')" required autofocus placeholder=" " />
                    <label for="email" class="absolute left-5 top-4 text-white/50 text-sm transition-all pointer-events-none peer-focus:-top-6 peer-focus:text-xs peer-focus:text-green-400 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-xs">User Name</label>
                    <div class="absolute right-5 top-4 text-white/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
                </div>

                <!-- Password -->
                <div class="mt-8 relative group">
                    <input id="password" class="block w-full px-5 py-4 bg-transparent border border-white/30 rounded-2xl text-white placeholder-white/50 focus:border-green-400 focus:ring-0 transition-all peer"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder=" " />
                    <label for="password" class="absolute left-5 top-4 text-white/50 text-sm transition-all pointer-events-none peer-focus:-top-6 peer-focus:text-xs peer-focus:text-green-400 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-xs">Password</label>
                    <div class="absolute right-5 top-4 text-white/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-6">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-white/30 bg-transparent text-green-500 focus:ring-green-400 focus:ring-offset-0" name="remember">
                        <span class="ms-3 text-sm text-white/80">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full py-4 bg-gradient-to-r from-lime-500 to-green-600 text-white rounded-2xl font-bold shadow-xl shadow-green-900/20 hover:scale-[1.02] active:scale-[0.98] transition-all uppercase tracking-widest text-sm">
                        Login
                    </button>
                </div>

                <div class="mt-8 text-center text-white/70 text-sm">
                    Don't have an account? <a href="{{ route('register') }}" class="text-white font-bold hover:underline">Signup</a>
                </div>

                <div class="mt-12 text-center text-white/30 text-[10px] font-medium tracking-widest uppercase">
                    Created by <span class="italic">antigravity</span>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
