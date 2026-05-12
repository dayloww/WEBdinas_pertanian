<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Program Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data" x-data="{ imagePreview: null }">
                        @csrf
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="title" :value="__('Nama Program')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Deskripsi Program')" />
                                <textarea name="description" id="description" rows="6" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('description') }}</textarea>
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Gambar Program')" />
                                <div class="mt-2 flex items-center space-x-6">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="w-40 h-24 object-cover rounded-xl shadow-lg border-2 border-white ring-1 ring-gray-100">
                                    </template>
                                    <template x-if="!imagePreview">
                                        <div class="w-40 h-24 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex items-center justify-center text-gray-400">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                    </template>
                                    <input type="file" name="image" id="image" class="hidden" @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }">
                                    <label for="image" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        Pilih File
                                    </label>
                                </div>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.programs.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20">
                                    {{ __('Simpan Program') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
