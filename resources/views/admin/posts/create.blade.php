<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" x-data="{ imagePreview: null }">
                        @csrf
                        
                        <div class="space-y-6">
                            <!-- Title -->
                            <div>
                                <x-input-label for="title" :value="__('Judul Berita')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <!-- Category & Status -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="category_id" :value="__('Kategori')" />
                                    <select name="category_id" id="category_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="status" :value="__('Status')" />
                                    <select name="status" id="status" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Image Upload -->
                            <div>
                                <x-input-label for="image" :value="__('Thumbnail Image')" />
                                <div class="mt-2 flex items-center space-x-6">
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="w-32 h-20 object-cover rounded-xl shadow-md border-2 border-white ring-1 ring-gray-100">
                                    </template>
                                    <template x-if="!imagePreview">
                                        <div class="w-32 h-20 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 flex items-center justify-center text-gray-400">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        </div>
                                    </template>
                                    <input type="file" name="image" id="image" class="hidden" @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result; }; reader.readAsDataURL(file); }">
                                    <label for="image" class="cursor-pointer bg-white py-2 px-4 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Pilih File
                                    </label>
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Format: JPG, PNG, GIF. Maksimal 2MB.</p>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <!-- Content -->
                            <div>
                                <x-input-label for="content" :value="__('Konten Berita')" />
                                <textarea name="content" id="content" rows="10" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('content') }}</textarea>
                                <x-input-error :messages="$errors->get('content')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.posts.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800 shadow-lg shadow-blue-500/20">
                                    {{ __('Simpan Berita') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
