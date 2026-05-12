<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Tambah Data Statistik</h2>
            <p class="text-sm text-gray-500 mt-1">Input angka statistik produksi atau populasi baru</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('admin.sector-data.store') }}" method="POST" class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50 space-y-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Pilih Bidang</label>
                    <select name="sector_id" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                        @foreach($sectors as $sector)
                            <option value="{{ $sector->id }}">{{ $sector->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Label Data</label>
                    <input type="text" name="label" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Produksi Jagung">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Nilai (Angka)</label>
                    <input type="number" step="0.01" name="value" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="0">
                </div>
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Satuan</label>
                    <input type="text" name="unit" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Ton / Ekor">
                </div>
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Tahun</label>
                    <input type="number" name="year" required value="{{ date('Y') }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="{{ date('Y') }}">
                </div>
            </div>

            <div class="flex items-center space-x-4 pt-4">
                <button type="submit" class="px-8 py-4 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
                    Simpan Data
                </button>
                <a href="{{ route('admin.sector-data.index') }}" class="px-8 py-4 bg-gray-100 text-gray-500 text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-gray-200 transition-all">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
