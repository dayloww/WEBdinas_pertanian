<x-app-layout>
    <div class="space-y-10 pb-20">
        <!-- Header -->
        <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tighter uppercase italic">Dashboard DISPERTA</h1>
                <p class="mt-2 text-sm text-slate-500">Kelola data utama dari tombol cepat berikut agar admin lebih mudah menambahkan isi website.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('admin.sector-data.create') }}" class="px-5 py-3 rounded-2xl bg-[#1a332a] text-white text-xs font-bold uppercase tracking-widest hover:bg-[#244638] transition-all">
                    Tambah Statistik
                </a>
                <a href="{{ route('admin.lands.create') }}" class="px-5 py-3 rounded-2xl bg-white border border-slate-200 text-slate-700 text-xs font-bold uppercase tracking-widest hover:bg-slate-50 transition-all">
                    Tambah Lahan
                </a>
                <a href="{{ route('admin.infographics.create') }}" class="px-5 py-3 rounded-2xl bg-white border border-slate-200 text-slate-700 text-xs font-bold uppercase tracking-widest hover:bg-slate-50 transition-all">
                    Tambah Infografis
                </a>
            </div>
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
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Produksi {{ $latestDataYear }}</p>
                    <h3 class="text-3xl font-black text-slate-900 leading-none">{{ number_format($totalProduksi, 0, ',', '.') }} ton</h3>
                    <p class="text-[10px] text-slate-400 mt-2">Akumulasi produksi pada tahun data terbaru</p>
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

        <div
            x-data="livestockDashboard(@js($livestockCharts))"
            x-init="init()"
            class="bg-white p-10 rounded-[3rem] shadow-xl shadow-slate-900/5 border border-white"
        >
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div>
                    <h3 class="text-sm font-black text-slate-900 uppercase tracking-widest">Diagram Peternakan</h3>
                    <p class="text-sm text-slate-500 mt-2 max-w-2xl">
                        Admin dapat memilih tampilan data unggas, ternak, atau daging. Jenis hewan juga ditampilkan pada diagram dan tabel agar data lebih mudah dipahami.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('admin.sector-data.index') }}" class="px-5 py-3 rounded-2xl bg-slate-100 text-slate-700 text-sm font-bold transition-all hover:bg-slate-200">
                        Lihat Semua Data
                    </a>
                    <a href="{{ route('admin.sector-data.create') }}" class="px-5 py-3 rounded-2xl bg-[#1a332a] text-white text-sm font-bold transition-all hover:bg-[#244638]">
                        Input Data Baru
                    </a>
                    <template x-for="(config, key) in charts" :key="key">
                        <button
                            type="button"
                            @click="setActive(key)"
                            class="px-5 py-3 rounded-2xl text-sm font-black transition-all"
                            :class="active === key ? 'bg-[#1a332a] text-white shadow-lg shadow-green-900/20' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                            x-text="config.label"
                        ></button>
                    </template>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 xl:grid-cols-[minmax(0,2fr)_minmax(320px,1fr)] gap-8">
                <div class="rounded-[2rem] border border-slate-100 bg-slate-50 p-6">
                    <div class="mb-5">
                        <h4 class="text-lg font-black text-slate-900" x-text="current.title"></h4>
                        <p class="text-[11px] uppercase tracking-[0.25em] text-slate-400 mt-2">
                            Satuan: <span x-text="current.unit"></span>
                        </p>
                    </div>

                    <div class="h-[420px]">
                        <canvas x-ref="livestockChart"></canvas>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="rounded-[2rem] border border-slate-100 bg-slate-50 p-6">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-3">Jenis Hewan</p>
                        <div class="space-y-3" x-show="current.totals.length > 0">
                            <template x-for="item in current.totals" :key="item.label">
                                <div class="flex items-center justify-between gap-4 rounded-2xl bg-white px-4 py-3 border border-slate-100">
                                    <div>
                                        <p class="text-sm font-bold text-slate-900" x-text="item.label"></p>
                                        <p class="text-[10px] uppercase tracking-widest text-slate-400">Total Akumulasi</p>
                                    </div>
                                    <p class="text-sm font-black text-slate-900">
                                        <span x-text="formatNumber(item.value)"></span>
                                        <span x-text="current.unit"></span>
                                    </p>
                                </div>
                            </template>
                        </div>
                        <div x-show="current.totals.length === 0" class="rounded-2xl bg-white px-4 py-5 border border-dashed border-slate-200 text-sm text-slate-500">
                            Belum ada data untuk kategori ini. Klik `Input Data Baru` untuk menambahkan data admin.
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 overflow-x-auto" x-show="current.rows.length > 0">
                <table class="w-full min-w-[900px]">
                    <thead>
                        <tr class="border-b border-slate-200">
                            <th class="text-left py-4 px-4 text-[11px] font-black uppercase tracking-[0.25em] text-slate-400">
                                <span x-text="active === 'daging' ? 'Jenis Hewan' : 'Kecamatan'"></span>
                            </th>
                            <template x-for="header in current.animalLabels" :key="header">
                                <th class="text-right py-4 px-4 text-[11px] font-black uppercase tracking-[0.15em] text-slate-400" x-text="header"></th>
                            </template>
                            <th class="text-right py-4 px-4 text-[11px] font-black uppercase tracking-[0.25em] text-slate-400">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="row in current.rows" :key="row.label">
                            <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors">
                                <td class="py-4 px-4 text-sm font-bold text-slate-900" x-text="row.label"></td>
                                <template x-for="header in current.animalLabels" :key="header">
                                    <td class="py-4 px-4 text-right text-sm text-slate-600" x-text="formatNumber(row.values[header] ?? 0)"></td>
                                </template>
                                <td class="py-4 px-4 text-right text-sm font-black text-slate-900" x-text="formatNumber(row.total)"></td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
            <div x-show="current.rows.length === 0" class="mt-8 rounded-[2rem] border border-dashed border-slate-200 bg-slate-50 px-6 py-10 text-center text-sm text-slate-500">
                Belum ada data yang ditampilkan pada dashboard admin untuk kategori ini.
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
                    <p class="text-[10px] text-slate-400 mb-8 italic">Lahan Pertanian Sangihe • Berlaku Tahun {{ $latestDataYear }}</p>
                    
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
        function livestockDashboard(initialCharts) {
            return {
                charts: initialCharts,
                active: 'unggas',
                current: initialCharts.unggas,
                chartInstance: null,
                init() {
                    this.renderChart();
                },
                setActive(key) {
                    this.active = key;
                    this.current = this.charts[key];
                    this.renderChart();
                },
                renderChart() {
                    if (this.chartInstance) {
                        this.chartInstance.destroy();
                    }

                    const ctx = this.$refs.livestockChart.getContext('2d');
                    const isLine = this.current.type === 'line';

                    this.chartInstance = new Chart(ctx, {
                        type: this.current.type,
                        data: {
                            labels: this.current.labels,
                            datasets: this.current.datasets.map((dataset) => ({
                                ...dataset,
                                tension: isLine ? 0.3 : 0,
                                fill: false,
                                borderWidth: isLine ? 3 : 1,
                                pointRadius: isLine ? 4 : 0,
                                borderRadius: isLine ? 0 : 10,
                                maxBarThickness: isLine ? undefined : 28,
                            })),
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        usePointStyle: true,
                                        boxWidth: 10,
                                        font: {
                                            size: 11,
                                            weight: 'bold',
                                        }
                                    }
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callback: (value) => this.formatNumber(value),
                                    }
                                },
                                x: {
                                    grid: { display: false }
                                }
                            }
                        }
                    });
                },
                formatNumber(value) {
                    return new Intl.NumberFormat('id-ID').format(value || 0);
                }
            }
        }

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
