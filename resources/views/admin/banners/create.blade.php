<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Banner Hero') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data" x-data="{ imagePreview: null }">
                        @csrf
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="title" :value="__('Judul Banner')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="subtitle" :value="__('Sub-judul')" />
                                <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" :value="old('subtitle')" required />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="order" :value="__('Urutan Tampilan')" />
                                    <x-text-input id="order" class="block mt-1 w-full" type="number" name="order" :value="old('order', 0)" required />
                                </div>
                                <div>
                                    <x-input-label for="link" :value="__('Link Tujuan (Opsional)')" />
                                    <x-text-input id="link" class="block mt-1 w-full" type="text" name="link" :value="old('link')" />
                                </div>
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Image Banner (1920x800 recommended)')" />
                                <div class="mt-2 flex flex-col space-y-4">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="w-full h-48 object-cover rounded-xl shadow-lg border-2 border-white ring-1 ring-gray-100">
                                    </template>
                                    <div class="flex items-center space-x-4">
                                        <input type="file" name="image" id="image" class="hidden" @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }" required>
                                        <label for="image" class="cursor-pointer bg-white py-2 px-6 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 transition-all">
                                            Pilih Gambar
                                        </label>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.banners.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20">
                                    {{ __('Simpan Banner') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
