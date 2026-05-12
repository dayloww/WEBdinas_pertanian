<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Tambah Bidang</h2>
            <p class="text-sm text-gray-500 mt-1">Buat bidang kerja baru di Dinas Pertanian</p>
        </div>
    </x-slot>

    <div class="max-w-4xl">
        <form action="{{ route('admin.sectors.store') }}" method="POST" class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50 space-y-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Nama Bidang</label>
                    <input type="text" name="name" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Perkebunan">
                </div>
                <div>
                    <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Icon</label>
                    <select name="icon" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                        <option value="leaf">Daun (Perkebunan)</option>
                        <option value="horse">Kuda (Peternakan)</option>
                        <option value="utensils">Alat Makan (Pangan)</option>
                        <option value="users">Orang (Penyuluhan)</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Deskripsi</label>
                <textarea name="description" rows="4" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Jelaskan tupoksi bidang ini..."></textarea>
            </div>

            <div class="flex items-center space-x-4 pt-4">
                <button type="submit" class="px-8 py-4 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
                    Simpan Bidang
                </button>
                <a href="{{ route('admin.sectors.index') }}" class="px-8 py-4 bg-gray-100 text-gray-500 text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-gray-200 transition-all">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
