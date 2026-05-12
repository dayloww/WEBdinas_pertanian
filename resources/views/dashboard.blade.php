<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-tight">Admin Control Panel</h2>
                <p class="text-sm text-gray-500 mt-1">Sistem Informasi Terintegrasi Dinas Pertanian Kab. Kepulauan Sangihe</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100 flex items-center">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">System Online</span>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="space-y-10">
        <!-- Main Division Cards -->
        <div>
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.3em] flex items-center">
                    <span class="w-8 h-[1px] bg-gray-200 mr-3"></span>
                    Manajemen Bidang Kerja
                </h3>
                <a href="{{ route('admin.sectors.index') }}" class="text-[10px] font-black text-blue-600 uppercase tracking-widest hover:underline">Kelola Bidang</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($sectors as $sector)
                <div class="relative group h-64 overflow-hidden rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-600 to-teal-900 opacity-90 transition-opacity duration-500 group-hover:opacity-100"></div>
                    <div class="absolute inset-0 p-8 flex flex-col justify-end">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center text-white mb-4 border border-white/30">
                            @if($sector->icon == 'leaf')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            @elseif($sector->icon == 'horse')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            @elseif($sector->icon == 'utensils')
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18z"></path></svg>
                            @else
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            @endif
                        </div>
                        <h4 class="text-xl font-bold text-white uppercase tracking-tight">Bidang {{ $sector->name }}</h4>
                        <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mt-1">{{ $sector->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Trend Analysis Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tight">Analisis Tren Komoditas</h4>
                        <p class="text-xs text-gray-400 mt-1">Perbandingan data terbaru dengan tahun sebelumnya</p>
                    </div>
                    <span class="px-4 py-1.5 bg-gray-50 text-gray-500 text-[10px] font-black uppercase tracking-widest rounded-full border border-gray-100">Tahun {{ $latestYear }}</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($trends as $trend)
                    <div class="p-6 rounded-3xl border border-gray-50 hover:border-green-100 hover:bg-green-50/20 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ $trend['sector'] }}</p>
                                <h5 class="text-lg font-bold text-gray-900 uppercase tracking-tight">{{ $trend['label'] }}</h5>
                            </div>
                            <div class="w-10 h-10 rounded-2xl flex items-center justify-center {{ $trend['status'] == 'up' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
                                @if($trend['status'] == 'up')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">{{ number_format($trend['current_value']) }} <span class="text-xs text-gray-400 font-bold">{{ $trend['unit'] }}</span></p>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Sebelumnya: {{ number_format($trend['previous_value']) }}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-black {{ $trend['status'] == 'up' ? 'text-green-600' : 'text-red-600' }}">
                                    {{ $trend['status'] == 'up' ? '+' : '' }}{{ number_format($trend['percent'], 1) }}%
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Comparison Bar Chart -->
            <div class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50">
                <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tight mb-2">Komparasi Bidang</h4>
                <p class="text-xs text-gray-400 mb-8">Distribusi total data per bidang ({{ $latestYear }})</p>
                <div class="h-80">
                    <canvas id="comparisonChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Line Charts Section -->
        <div>
            <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.3em] mb-6 flex items-center">
                <span class="w-8 h-[1px] bg-gray-200 mr-3"></span>
                Tren Visual Per Bidang
            </h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($sectors as $sector)
                <div class="bg-white p-10 rounded-[3rem] shadow-2xl shadow-slate-200/60 border border-gray-50">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 uppercase tracking-tight">Grafik {{ $sector->name }}</h4>
                            <p class="text-xs text-gray-400 mt-1">Statistik Historis</p>
                        </div>
                        <a href="{{ route('admin.sector-data.index', ['sector' => $sector->id]) }}" class="text-[10px] font-black text-green-600 uppercase tracking-widest hover:underline">Detail Data</a>
                    </div>
                    <div class="h-64">
                        <canvas id="chart-{{ $sector->slug }}"></canvas>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Secondary Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Statistik Berita</h5>
                <p class="text-4xl font-bold text-gray-900">{{ $stats['posts'] }}</p>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Program Aktif</h5>
                <p class="text-4xl font-bold text-gray-900">{{ $stats['programs'] }}</p>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Total Gallery</h5>
                <p class="text-4xl font-bold text-gray-900">{{ $stats['galleries'] }}</p>
            </div>
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-gray-50">
                <h5 class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Total Bidang</h5>
                <p class="text-4xl font-bold text-gray-900">{{ $stats['sectors'] }}</p>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sector Line Charts
            @foreach($sectors as $sector)
            const ctx{{ $loop->index }} = document.getElementById('chart-{{ $sector->slug }}').getContext('2d');
            new Chart(ctx{{ $loop->index }}, {
                type: 'line',
                data: {
                    labels: {!! json_encode($sector->data->pluck('year')) !!},
                    datasets: [{
                        label: '{{ $sector->data->first()->label ?? "Data" }}',
                        data: {!! json_encode($sector->data->pluck('value')) !!},
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#10b981',
                        pointBorderWidth: 2,
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { grid: { color: 'rgba(0, 0, 0, 0.05)', drawBorder: false } },
                        x: { grid: { display: false } }
                    }
                }
            });
            @endforeach

            // Comparison Bar Chart
            const compCtx = document.getElementById('comparisonChart').getContext('2d');
            new Chart(compCtx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($sectors->pluck('name')) !!},
                    datasets: [{
                        label: 'Total Nilai',
                        data: [
                            @foreach($sectors as $sector)
                                {{ $comparisonData[$sector->id] ?? 0 }},
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(59, 130, 246, 0.8)',
                            'rgba(245, 158, 11, 0.8)',
                            'rgba(139, 92, 246, 0.8)'
                        ],
                        borderRadius: 12,
                        borderSkipped: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { grid: { display: false }, ticks: { display: false } },
                        x: { grid: { display: false } }
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
