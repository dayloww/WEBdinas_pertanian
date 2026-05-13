<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Data Statistik Bidang</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola data real untuk diagram unggas, ternak, dan daging dari input admin</p>
            </div>
            <a href="{{ route('admin.sector-data.create') }}" class="px-6 py-3 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
                Tambah Data
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
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Bidang</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kategori</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Jenis Hewan</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Kecamatan</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Nilai</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Tampil</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Tahun/Bulan</th>
                    <th class="px-8 py-6 text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @foreach($sectorData as $data)
                <tr class="hover:bg-gray-50/30 transition-colors">
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-[10px] font-bold uppercase tracking-widest rounded-full border border-blue-100">
                            {{ $data->sector->name }}
                        </span>
                    </td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-[10px] font-bold uppercase tracking-widest rounded-full border border-emerald-100">
                            {{ \App\Models\SectorData::datasetTypeOptions()[$data->dataset_type] ?? '-' }}
                        </span>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-gray-900">{{ $data->animal_name ?: $data->label }}</p>
                        @if($data->label && $data->label !== $data->animal_name)
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">{{ $data->label }}</p>
                        @endif
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm font-bold text-gray-900">{{ $data->district_name ?: '-' }}</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-green-600">{{ number_format($data->value) }} <span class="text-[10px] text-gray-400 uppercase tracking-widest">{{ $data->unit }}</span></p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="space-y-2">
                            <div>
                                <span class="px-3 py-1 {{ $data->show_on_admin_dashboard ? 'bg-slate-100 text-slate-700 border-slate-200' : 'bg-slate-50 text-slate-400 border-slate-100' }} text-[10px] font-bold uppercase tracking-widest rounded-full border">
                                    Admin {{ $data->show_on_admin_dashboard ? 'On' : 'Off' }}
                                </span>
                            </div>
                            <div>
                                <span class="px-3 py-1 {{ $data->show_on_front ? 'bg-green-50 text-green-700 border-green-100' : 'bg-slate-50 text-slate-400 border-slate-100' }} text-[10px] font-bold uppercase tracking-widest rounded-full border">
                                    Front {{ $data->show_on_front ? 'On' : 'Off' }}
                                </span>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm font-bold text-gray-900">{{ $data->year }}</p>
                        @if($data->month)
                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Bulan: {{ $data->month }}</p>
                        @endif
                        @if($data->show_on_front)
                            <p class="text-[10px] text-green-600 font-bold uppercase tracking-widest mt-1">Urutan Front: {{ $data->front_order }}</p>
                        @endif
                        @if($data->source)
                            <p class="text-[10px] text-gray-400 mt-1">{{ \Illuminate\Support\Str::limit($data->source, 40) }}</p>
                        @endif
                    </td>
                    <td class="px-8 py-6 text-right">
                        <div class="flex items-center justify-end space-x-3">
                            <a href="{{ route('admin.sector-data.edit', $data) }}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </a>
                            <form action="{{ route('admin.sector-data.destroy', $data) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
