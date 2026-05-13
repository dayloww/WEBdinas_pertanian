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

    <div>
        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Judul</label>
        <input type="text" name="title" required value="{{ old('title', optional($infographic)->title) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Judul infografis">
    </div>

    <div>
        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">URL Gambar</label>
        <input type="url" name="image" required value="{{ old('image', optional($infographic)->image) }}" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="https://...">
    </div>

    <div>
        <label class="text-[10px] font-black text-gray-400 uppercase tracking-widest block mb-3">Deskripsi</label>
        <textarea name="description" rows="4" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-green-500 transition-all font-bold text-gray-900" placeholder="Deskripsi singkat infografis">{{ old('description', optional($infographic)->description) }}</textarea>
    </div>

    @if(optional($infographic)->image)
        <div class="rounded-[2rem] overflow-hidden border border-slate-100">
            <img src="{{ $infographic->image }}" alt="{{ $infographic->title }}" class="w-full h-72 object-cover">
        </div>
    @endif

    <div class="flex items-center space-x-4 pt-4">
        <button type="submit" class="px-8 py-4 bg-green-600 text-white text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-green-700 transition-all shadow-lg shadow-green-200">
            {{ $submitLabel }}
        </button>
        <a href="{{ route('admin.infographics.index') }}" class="px-8 py-4 bg-gray-100 text-gray-500 text-xs font-bold uppercase tracking-widest rounded-2xl hover:bg-gray-200 transition-all">
            Batal
        </a>
    </div>
</form>
