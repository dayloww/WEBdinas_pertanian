<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Add Category Form -->
                <div class="lg:col-span-1">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-6 uppercase tracking-wider text-xs border-b pb-2">Tambah Kategori</h3>
                        <form action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
                            <div class="space-y-4">
                                <div>
                                    <x-input-label for="name" :value="__('Nama Kategori')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <x-primary-button class="w-full justify-center bg-blue-600 hover:bg-blue-700 shadow-lg shadow-blue-500/20">
                                    {{ __('Simpan Kategori') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Category List -->
                <div class="lg:col-span-2">
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded-r-lg">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 shadow-sm rounded-r-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100">
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500">Nama</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500">Slug</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 text-center">Total Berita</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-500 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @foreach($categories as $category)
                                <tr class="hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 font-bold text-gray-900">{{ $category->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $category->slug }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="px-3 py-1 bg-gray-100 text-gray-600 text-xs font-bold rounded-full">{{ $category->posts_count }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
