<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengaturan Website') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded-r-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf
                        
                        <div class="space-y-10">
                            <!-- Basic Info -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-6 border-b pb-2 uppercase tracking-wider text-xs">Informasi Umum</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-input-label for="site_name" :value="__('Nama Website')" />
                                        <x-text-input id="site_name" class="block mt-1 w-full" type="text" name="site_name" :value="$settings['site_name'] ?? ''" />
                                    </div>
                                    <div>
                                        <x-input-label for="site_tagline" :value="__('Tagline')" />
                                        <x-text-input id="site_tagline" class="block mt-1 w-full" type="text" name="site_tagline" :value="$settings['site_tagline'] ?? ''" />
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Info -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-6 border-b pb-2 uppercase tracking-wider text-xs">Kontak & Alamat</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-input-label for="phone" :value="__('Nomor Telepon')" />
                                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$settings['phone'] ?? ''" />
                                    </div>
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$settings['email'] ?? ''" />
                                    </div>
                                    <div class="md:col-span-2">
                                        <x-input-label for="address" :value="__('Alamat')" />
                                        <textarea name="address" id="address" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $settings['address'] ?? '' }}</textarea>
                                    </div>
                                    <div class="md:col-span-2">
                                        <x-input-label for="working_hours" :value="__('Jam Kerja')" />
                                        <x-text-input id="working_hours" class="block mt-1 w-full" type="text" name="working_hours" :value="$settings['working_hours'] ?? ''" />
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-6 border-b pb-2 uppercase tracking-wider text-xs">Media Sosial</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <x-input-label for="facebook" :value="__('Facebook URL')" />
                                        <x-text-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" :value="$settings['facebook'] ?? ''" />
                                    </div>
                                    <div>
                                        <x-input-label for="instagram" :value="__('Instagram URL')" />
                                        <x-text-input id="instagram" class="block mt-1 w-full" type="text" name="instagram" :value="$settings['instagram'] ?? ''" />
                                    </div>
                                </div>
                            </div>

                            <!-- About -->
                            <div>
                                <h3 class="text-lg font-bold text-gray-900 mb-6 border-b pb-2 uppercase tracking-wider text-xs">Visi & Misi</h3>
                                <div class="space-y-6">
                                    <div>
                                        <x-input-label for="vision" :value="__('Visi')" />
                                        <textarea name="vision" id="vision" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $settings['vision'] ?? '' }}</textarea>
                                    </div>
                                    <div>
                                        <x-input-label for="mission" :value="__('Misi')" />
                                        <textarea name="mission" id="mission" rows="5" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $settings['mission'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-10 border-t pt-8">
                                <x-primary-button class="bg-green-600 hover:bg-green-700 focus:bg-green-700 active:bg-green-800 shadow-lg shadow-green-500/20 px-8 py-3 rounded-xl font-bold uppercase tracking-widest text-xs">
                                    {{ __('Simpan Perubahan') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
