<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Program Pertanian') }}
            </h2>
            <a href="{{ route('admin.programs.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-all shadow-md">
                + Tambah Program
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm rounded-r-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($programs as $program)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 flex flex-col group">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $program->image ?? 'https://via.placeholder.com/800x600' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-lg leading-tight uppercase tracking-tight">{{ $program->title }}</h3>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col">
                        <p class="text-sm text-gray-500 line-clamp-3 mb-6 leading-relaxed">{{ strip_tags($program->description) }}</p>
                        <div class="mt-auto flex justify-between items-center pt-4 border-t border-gray-50">
                            <a href="{{ route('admin.programs.edit', $program) }}" class="text-blue-600 font-bold text-xs uppercase tracking-widest hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" onsubmit="return confirm('Hapus program ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 font-bold text-xs uppercase tracking-widest hover:text-red-800">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
