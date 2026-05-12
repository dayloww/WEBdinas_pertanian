<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pengumuman Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-8">
                    <form action="{{ route('admin.announcements.store') }}" method="POST">
                        @csrf
                        
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="title" :value="__('Judul Pengumuman')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label for="date" :value="__('Tanggal')" />
                                    <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date', date('Y-m-d'))" required />
                                </div>
                                <div>
                                    <x-input-label for="status" :value="__('Status')" />
                                    <select name="status" id="status" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <x-input-label for="content" :value="__('Isi Pengumuman')" />
                                <textarea name="content" id="content" rows="6" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('content') }}</textarea>
                            </div>

                            <div class="flex items-center justify-end mt-10 space-x-4 border-t pt-8">
                                <a href="{{ route('admin.announcements.index') }}" class="text-sm font-bold text-gray-500 hover:text-gray-700 uppercase tracking-widest">Batal</a>
                                <x-primary-button class="bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20">
                                    {{ __('Simpan Pengumuman') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
