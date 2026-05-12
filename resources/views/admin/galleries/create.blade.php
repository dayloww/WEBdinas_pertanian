<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Foto ke Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" x-data="{ imagePreview: null }">
                        @csrf
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="title" :value="__('Judul Foto (Opsional)')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" autofocus />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Deskripsi (Opsional)')" />
                                <textarea name="description" id="description" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('description') }}</textarea>
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Pilih Foto')" />
                                <div class="mt-2 flex flex-col items-center">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="w-full h-64 object-cover rounded-2xl shadow-lg mb-4 border-4 border-white ring-1 ring-gray-100">
                                    </template>
                                    <label class="w-full flex flex-col items-center px-4 py-6 bg-white rounded-2xl shadow-lg border-2 border-dashed border-gray-200 cursor-pointer hover:border-blue-400 transition-colors">
                                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                        <span class="mt-2 text-sm text-gray-500">Klik untuk memilih foto</span>
                                        <input type="file" name="image" class="hidden" @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }" required>
                                    </label>
                                </div>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.galleries.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20 px-8">
                                    {{ __('Upload Foto') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
