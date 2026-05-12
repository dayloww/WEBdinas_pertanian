<x-app-layout>
    <div class="space-y-10 pb-20">
        <!-- Header -->
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tighter uppercase italic">Dashboard DISPERTA</h1>
        </div>

        <!-- Stat Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-900/5 border border-white flex items-start space-x-6">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Total Lahan</p>
                    <h3 class="text-3xl font-black text-slate-900 leading-none">{{ $totalLahan }}</h3>
                    <p class="text-[10px] text-slate-400 mt-2">Lahan terdaftar di sistem</p>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-900/5 border border-white flex items-start space-x-6">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Produksi 2024</p>
                    <h3 class="text-3xl font-black text-slate-900 leading-none">{{ number_format($totalProduksi, 0, ',', '.') }} ton</h3>
                    <p class="text-[10px] text-slate-400 mt-2">Akumulasi produksi tahun berjalan</p>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-900/5 border border-white flex items-start space-x-6">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Komoditas Unggulan</p>
                    <h3 class="text-2xl font-black text-slate-900 leading-none">{{ $komoditasUnggulan }}</h3>
                    <p class="text-[10px] text-slate-400 mt-2">Komoditas dengan produksi tertinggi</p>
                </div>
            </div>
            <div class="bg-white p-8 rounded-[2rem] shadow-xl shadow-slate-900/5 border border-white flex items-start space-x-6">
                <div class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v12a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4h4"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 15h6M9 11h6"></path></svg>
                </div>
                <div>
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Berita Published</p>
                    <h3 class="text-3xl font-black text-slate-900 leading-none">{{ $totalBerita }}</h3>
                    <p class="text-[10px] text-slate-400 mt-2">Total berita aktif</p>
                </div>
            </div>
        </div>

        <!-- Trend Chart -->
        <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-900/5 border border-white">
            <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-10">Trend Produksi 5 Tahun</h3>
            <div class="h-80">
                <canvas id="trendChart"></canvas>
            </div>
        </div>

        <!-- Map & Infographic Section -->
        <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-900/5 border border-white">
            <div class="flex flex-col md:flex-row gap-12">
                <!-- Map -->
                <div class="md:w-7/12">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest">Peta Lahan</h3>
                            <p class="text-[10px] text-slate-400 mt-1">Klik marker/polygon untuk detail</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center text-[10px] font-bold text-slate-600">
                                <input type="checkbox" checked class="rounded mr-2 text-green-600 focus:ring-green-500"> Batas Kabupaten Sangihe
                            </label>
                        </div>
                    </div>
                    <div id="map" class="h-[500px] rounded-[2rem] border border-gray-100 z-0"></div>
                    <p class="text-[10px] text-slate-400 mt-6 leading-relaxed">
                        Basemap tersedia: Jalan dan Satelit. Layer batas Kabupaten Kepulauan Sangihe dimuat dari layanan geospatial BIG, dan polygon lahan tetap berasal dari input admin.
                    </p>
                </div>

                <!-- Donut Chart & Summary -->
                <div class="md:w-5/12">
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-8">Komposisi Produksi per Komoditas</h3>
                    <p class="text-[10px] text-slate-400 mb-8 italic">Lahan Pertanian Sangihe • Berlaku Tahun 2024</p>
                    
                    <div class="h-64 mb-12 relative flex items-center justify-center">
                        <canvas id="komposisiChart"></canvas>
                        <div class="absolute text-center">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Total</p>
                            <p class="text-xl font-black text-slate-900">{{ number_format($totalProduksi, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Total Produksi</p>
                            <h4 class="text-lg font-black text-slate-900">{{ number_format($totalProduksi, 0, ',', '.') }} Ton</h4>
                        </div>
                        <div class="bg-slate-50 p-6 rounded-2xl border border-gray-100">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Luas Lahan</p>
                            <h4 class="text-lg font-black text-slate-900">{{ $lands->sum('area') }} Ha</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            <!-- Latest News -->
            <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-900/5 border border-white">
                <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-10">Berita Terbaru</h3>
                <div class="space-y-6">
                    @foreach($latestNews as $news)
                    <div class="flex items-center space-x-6 p-4 hover:bg-slate-50 rounded-[1.5rem] transition-all cursor-pointer">
                        <img src="{{ $news->image }}" class="w-16 h-16 rounded-xl object-cover" alt="">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 leading-tight">{{ $news->title }}</h4>
                            <p class="text-[10px] text-slate-400 mt-1 uppercase font-bold">{{ $news->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- More Charts (Sebaran Lahan) -->
            <div class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-900/5 border border-white flex flex-col">
                <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest mb-10">Sebaran Lahan per Kecamatan</h3>
                <div class="flex-1 min-h-[300px]">
                    <canvas id="sebaranChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Trend Chart
        const trendCtx = document.getElementById('trendChart').getContext('2d');
        new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($trendData->pluck('year')) !!},
                datasets: [{
                    label: 'Total Produksi',
                    data: {!! json_encode($trendData->pluck('total')) !!},
                    borderColor: '#1a332a',
                    backgroundColor: 'rgba(26, 51, 42, 0.05)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#1a332a'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: false, grid: { borderDash: [5, 5] } },
                    x: { grid: { display: false } }
                }
            }
        });

        // Komposisi Chart (Donut)
        const komposisiCtx = document.getElementById('komposisiChart').getContext('2d');
        new Chart(komposisiCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($komposisi->map(fn($k) => $k->sector->name)) !!},
                datasets: [{
                    data: {!! json_encode($komposisi->pluck('total')) !!},
                    backgroundColor: ['#1a332a', '#22c55e', '#3b82f6', '#ef4444', '#f59e0b', '#8b5cf6'],
                    borderWidth: 0,
                    cutout: '80%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: { usePointStyle: true, font: { size: 10, weight: 'bold' } }
                    }
                }
            }
        });

        // Sebaran Lahan Chart (Bar)
        const sebaranCtx = document.getElementById('sebaranChart').getContext('2d');
        new Chart(sebaranCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($sebaranLahan->map(fn($s) => $s->district->name)) !!},
                datasets: [{
                    label: 'Luas Lahan (Ha)',
                    data: {!! json_encode($sebaranLahan->pluck('total_area')) !!},
                    backgroundColor: '#1a332a',
                    borderRadius: 12,
                    barThickness: 30
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true, grid: { borderDash: [5, 5] } },
                    x: { grid: { display: false } }
                }
            }
        });

        // Map Implementation
        var map = L.map('map').setView([3.516666, 125.422770], 12);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var lands = {!! json_encode($lands) !!};
        lands.forEach(function(land) {
            if(land.lat && land.lng) {
                L.marker([land.lat, land.lng]).addTo(map)
                    .bindPopup('<b>' + land.sector.name + '</b><br>Kecamatan: ' + land.district.name + '<br>Luas: ' + land.area + ' Ha');
            }
        });
    </script>
    @endpush
</x-app-layout>
