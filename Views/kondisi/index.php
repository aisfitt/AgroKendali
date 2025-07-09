<main class="flex-1 p-10 overflow-y-auto bg-gray-50">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-sky-600">💧 Laporan Kondisi Lahan</h1>
        <button class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-5 rounded-lg shadow-md hover:-translate-y-0.5 transition-transform">
            <i class="fas fa-plus mr-2"></i> Tambah Laporan Baru
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-sky-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-sky-800 uppercase tracking-wider">Tanggal Laporan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-sky-800 uppercase tracking-wider">Kebun / Area</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-sky-800 uppercase tracking-wider">Kelembapan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-sky-800 uppercase tracking-wider">pH Tanah</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-sky-800 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    <?php if (empty($semuaLaporan)): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                <i class="fas fa-folder-open text-4xl text-gray-300 mb-2"></i>
                                <p>Belum ada data laporan.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($semuaLaporan as $laporan): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                <?= htmlspecialchars(date('d F Y, H:i', strtotime($laporan['created_at']))) ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-800">
                                <?= htmlspecialchars($laporan['nama_area']) ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                <?= htmlspecialchars($laporan['kelembapan']) ?> %
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                <?= htmlspecialchars($laporan['ph']) ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a href="#" class="text-red-600 hover:text-red-900">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>