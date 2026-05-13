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
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Kecamatan</label>
            <select name="district_id" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                @foreach($districts as $district)
                    <option value="{{ $district->id }}" @selected(old('district_id', optional($land)->district_id) == $district->id)>{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Bidang</label>
            <select name="sector_id" required class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900">
                @foreach($sectors as $sector)
                    <option value="{{ $sector->id }}" @selected(old('sector_id', optional($land)->sector_id) == $sector->id)>{{ $sector->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Luas (Ha)</label>
            <input type="number" step="0.01" name="area" required value="{{ old('area', optional($land)->area) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="0.00">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Latitude</label>
            <input type="number" step="0.00000001" name="lat" value="{{ old('lat', optional($land)->lat) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Opsional">
        </div>
        <div>
            <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Longitude</label>
            <input type="number" step="0.00000001" name="lng" value="{{ old('lng', optional($land)->lng) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Opsional">
        </div>
    </div>

    <div class="flex items-center space-x-4 pt-4">
        <button type="submit" class="px-8 py-4 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
            {{ $submitLabel }}
        </button>
        <a href="{{ route('admin.lands.index') }}" class="px-8 py-4 bg-gray-100 text-gray-500 text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-gray-200 transition-all">
            Batal
        </a>
    </div>
</form>
