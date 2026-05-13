<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Data Lahan</h2>
                <p class="text-sm text-gray-500 mt-1">Lihat dan kelola data lahan yang dipakai pada dashboard admin</p>
            </div>
            <a href="{{ route('admin.lands.create') }}" class="px-6 py-3 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
                Tambah Lahan
            </a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-100 bg-green-50 px-6 py-4 text-sm font-semibold text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50/50">
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kecamatan</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Bidang</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Luas</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Koordinat</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($lands as $land)
                    <tr class="hover:bg-gray-50/30 transition-colors">
                        <td class="px-8 py-6 font-bold text-gray-900">{{ $land->district->name }}</td>
                        <td class="px-8 py-6 text-gray-700">{{ $land->sector->name }}</td>
                        <td class="px-8 py-6 font-bold text-green-600">{{ number_format($land->area, 2, ',', '.') }} <span class="text-[10px] text-gray-400 uppercase tracking-widest">Ha</span></td>
                        <td class="px-8 py-6 text-sm text-gray-600">{{ $land->lat ?: '-' }}, {{ $land->lng ?: '-' }}</td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex items-center justify-end space-x-3">
                                <a href="{{ route('admin.lands.edit', $land) }}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </a>
                                <form action="{{ route('admin.lands.destroy', $land) }}" method="POST" onsubmit="return confirm('Hapus data lahan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-8 py-10 text-center text-sm text-gray-500">Belum ada data lahan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
