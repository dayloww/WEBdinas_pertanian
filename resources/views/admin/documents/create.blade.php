<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Unggah Dokumen Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="title" :value="__('Judul Dokumen')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="category" :value="__('Kategori Dokumen')" />
                                <select name="category" id="category" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="Informasi Berkala">Informasi Berkala</option>
                                    <option value="Informasi Serta Merta">Informasi Serta Merta</option>
                                    <option value="Informasi Tersedia Setiap Saat">Informasi Tersedia Setiap Saat</option>
                                    <option value="Laporan Keuangan">Laporan Keuangan</option>
                                    <option value="Produk Hukum">Produk Hukum</option>
                                </select>
                            </div>

                            <div>
                                <x-input-label for="file" :value="__('Pilih File (PDF, DOC, XLS)')" />
                                <input type="file" name="file" id="file" class="block mt-1 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
                                <p class="mt-2 text-xs text-gray-500">Maksimal 10MB.</p>
                                <x-input-error :messages="$errors->get('file')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Keterangan (Opsional)')" />
                                <textarea name="description" id="description" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.documents.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20 px-8">
                                    {{ __('Unggah Dokumen') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
