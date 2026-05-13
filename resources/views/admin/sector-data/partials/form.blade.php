<form action="{{ $action }}" method="POST" class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50 space-y-8">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    @if ($errors->any())
        <div class="rounded-2xl border border-red-100 bg-red-50 px-6 py-4 text-sm text-red-700">
            <p class="font-bold mb-2">Periksa kembali input data:</p>
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Pilih Bidang</label>
            <select name="sector_id" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                @foreach($sectors as $sector)
                    <option value="{{ $sector->id }}" @selected(old('sector_id', optional($data)->sector_id) == $sector->id)>{{ $sector->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Kategori Data</label>
            <select name="dataset_type" id="dataset_type" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                @foreach($datasetTypes as $value => $label)
                    <option value="{{ $value }}" @selected(old('dataset_type', optional($data)->dataset_type) == $value)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Jenis Hewan</label>
            <input type="text" name="animal_name" required value="{{ old('animal_name', optional($data)->animal_name) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Ayam Buras / Sapi Potong">
        </div>
        <div id="district_wrapper">
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Kecamatan</label>
            <select name="district_name" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                <option value="">Pilih kecamatan</option>
                @foreach($districts as $value => $label)
                    <option value="{{ $value }}" @selected(old('district_name', optional($data)->district_name) == $value)>{{ $label }}</option>
                @endforeach
            </select>
            <p class="text-[10px] text-gray-400 mt-2">Untuk data daging, kecamatan tidak perlu diisi.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Nilai (Angka)</label>
            <input type="number" step="0.01" name="value" required value="{{ old('value', optional($data)->value) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="0">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Satuan</label>
            <input type="text" name="unit" required value="{{ old('unit', optional($data)->unit ?: 'Ekor') }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Ekor / Kg">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Tahun</label>
            <input type="number" name="year" required value="{{ old('year', optional($data)->year ?: date('Y')) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Bulan</label>
            <input type="number" name="month" min="1" max="12" value="{{ old('month', optional($data)->month) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Opsional">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Label Tambahan</label>
            <input type="text" name="label" value="{{ old('label', optional($data)->label) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Kosongkan jika sama dengan jenis hewan">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Sumber Data</label>
            <input type="text" name="source" value="{{ old('source', optional($data)->source) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Contoh: Dinas Pertanian Kabupaten Kepulauan Sangihe">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <label class="flex items-start gap-4 rounded-[2rem] border border-slate-100 bg-slate-50 px-6 py-5 cursor-pointer">
            <input type="checkbox" name="show_on_admin_dashboard" value="1" @checked(old('show_on_admin_dashboard', optional($data)->show_on_admin_dashboard ?? true)) class="mt-1 rounded border-slate-300 text-green-600 focus:ring-green-500">
            <span>
                <span class="block text-sm font-bold text-slate-900">Tampilkan di Dashboard Admin</span>
                <span class="block text-xs text-slate-500 mt-1">Data ini ikut dipakai untuk diagram di halaman admin.</span>
            </span>
        </label>

        <label class="flex items-start gap-4 rounded-[2rem] border border-slate-100 bg-slate-50 px-6 py-5 cursor-pointer">
            <input type="checkbox" name="show_on_front" value="1" @checked(old('show_on_front', optional($data)->show_on_front)) class="mt-1 rounded border-slate-300 text-green-600 focus:ring-green-500">
            <span>
                <span class="block text-sm font-bold text-slate-900">Tampilkan di Front</span>
                <span class="block text-xs text-slate-500 mt-1">Data ini boleh muncul di beranda/front website.</span>
            </span>
        </label>

        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Urutan di Front</label>
            <input type="number" name="front_order" min="0" value="{{ old('front_order', optional($data)->front_order ?? 0) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="0">
        </div>
    </div>

    <div class="flex items-center space-x-4 pt-4">
        <button type="submit" class="px-8 py-4 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
            {{ $submitLabel }}
        </button>
        <a href="{{ route('admin.sector-data.index') }}" class="px-8 py-4 bg-gray-100 text-gray-500 text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-gray-200 transition-all">
            Batal
        </a>
    </div>
</form>

@push('scripts')
<script>
    (function () {
        const typeInput = document.getElementById('dataset_type');
        const districtWrapper = document.getElementById('district_wrapper');
        const unitInput = document.querySelector('input[name="unit"]');

        if (!typeInput || !districtWrapper) {
            return;
        }

        const syncDistrictVisibility = () => {
            districtWrapper.style.display = typeInput.value === 'daging' ? 'none' : 'block';

            if (unitInput) {
                unitInput.value = typeInput.value === 'daging' ? 'Kg' : (unitInput.value === 'Kg' ? 'Ekor' : unitInput.value || 'Ekor');
            }
        };

        syncDistrictVisibility();
        typeInput.addEventListener('change', syncDistrictVisibility);
    })();
</script>
@endpush
