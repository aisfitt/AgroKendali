<main class="flex-1 p-10 overflow-y-auto bg-[#f0f7f4] min-h-screen">
    <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
    <p class="mt-1 text-gray-500 mb-8">Selamat datang di AgroKendali! Berikut ringkasan data Anda.</p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
        <!-- Jumlah Kebun -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-base font-medium text-gray-500">Jumlah Kebun</p>
                    <p class="text-5xl font-bold text-gray-900 mt-2"><?= $jumlahKebun ?? 0 ?></p>
                </div>
                <div class="bg-green-100 p-5 rounded-lg">
                    <i class="fas fa-seedling text-3xl text-green-600"></i>
                </div>
            </div>
        </div>

        <!-- Kondisi Tanah -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-base font-medium text-gray-500">Kondisi Tanah</p>
                    <p class="text-5xl font-bold text-gray-900 mt-2"><?= $kondisiTanah ?? 0 ?></p>
                    <p class="text-sm text-gray-400 mt-1">Terdata</p>
                </div>
                <div class="bg-blue-100 p-5 rounded-lg">
                    <i class="fas fa-layer-group text-3xl text-blue-600"></i>
                </div>
            </div>
        </div>

        <!-- Total Panen -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-base font-medium text-gray-500">Total Panen</p>
                    <p class="text-5xl font-bold text-gray-900 mt-2"><?= number_format($totalPanen ?? 0, 1) ?> <span class="text-3xl font-semibold">Ton</span></p>
                </div>
                <div class="bg-yellow-100 p-5 rounded-lg">
                    <i class="fas fa-tractor text-3xl text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Jenis Pupuk -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-base font-medium text-gray-500">Jenis Pupuk</p>
                    <p class="text-5xl font-bold text-gray-900 mt-2"><?= $jenisPupuk ?? 0 ?></p>
                </div>
                <div class="bg-purple-100 p-5 rounded-lg">
                    <i class="fas fa-vial text-3xl text-purple-600"></i>
                </div>
            </div>
        </div>

        <!-- Laporan Hama -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-base font-medium text-gray-500">Laporan Hama</p>
                    <p class="text-5xl font-bold text-gray-900 mt-2"><?= $laporanHama ?? 0 ?></p>
                </div>
                <div class="bg-red-100 p-5 rounded-lg">
                    <i class="fas fa-bug text-3xl text-red-600"></i>
                </div>
            </div>
        </div>
    </div>
</main>
