@extends('layouts.public')

@section('title', 'Hubungi Kami')

@section('content')
<section class="pt-40 pb-20 bg-green-950 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/leaf.png')] opacity-10"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 uppercase tracking-tight">Hubungi Kami</h1>
        <p class="text-green-100/70 max-w-2xl mx-auto text-lg font-light leading-relaxed">Kami siap melayani dan menjawab pertanyaan Anda seputar sektor pertanian.</p>
    </div>
</section>

<section class="py-24">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Info -->
            <div class="space-y-12">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-8 uppercase tracking-tight">Informasi Kontak</h2>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-700 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Alamat Kantor</h4>
                                <p class="text-slate-700 font-medium leading-relaxed">{{ $settings['address'] ?? 'Kabupaten Kepulauan Sangihe' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-700 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Email Resmi</h4>
                                <p class="text-slate-700 font-medium leading-relaxed">{{ $settings['email'] ?? 'dinaspertanian@sangihe.go.id' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-700 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Jam Operasional</h4>
                                <p class="text-slate-700 font-medium leading-relaxed">{{ $settings['working_hours'] ?? 'Senin - Jumat: 08:00 - 16:00' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social -->
                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="{{ $settings['facebook'] ?? '#' }}" class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path></svg></a>
                        <a href="{{ $settings['instagram'] ?? '#' }}" class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-600 hover:bg-pink-600 hover:text-white transition-all shadow-sm"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058z"></path></svg></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white p-8 md:p-12 rounded-[3rem] shadow-2xl shadow-slate-200/50 border border-slate-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-8 uppercase tracking-tight">Kirim Pesan</h2>
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm" placeholder="Contoh: John Doe">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Email</label>
                            <input type="email" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Subjek</label>
                        <input type="text" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm" placeholder="Tanya Program / Layanan">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-widest mb-2">Pesan</label>
                        <textarea rows="5" class="w-full px-6 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all text-sm" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-5 bg-green-primary text-white rounded-full font-bold shadow-xl shadow-green-900/20 hover:bg-green-800 transition-all active:scale-95 uppercase text-xs tracking-widest">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="h-[500px] w-full bg-slate-100">
    <iframe class="w-full h-full grayscale hover:grayscale-0 transition-all duration-700" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127641.1328925585!2d125.42277085!3d3.516666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3278918d6e3f5b7d%3A0x30303b4440f3160!2sKabupaten%20Kepulauan%20Sangihe%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1700000000000" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
@endsection
