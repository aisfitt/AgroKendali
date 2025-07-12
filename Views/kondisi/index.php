<main class="flex-1 p-10 overflow-y-auto  bg-[#f0f7f4] min-h-screen">
    <div class="bg-white h-screen p-6 rounded-2xl shadow-md">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-teal-700">Laporan Kondisi Lahan</h1>
        <a href="index.php?page=kondisi-lahan&action=tambah" class="bg-emerald-500 hover:bg-sky-600 text-white font-bold py-2 px-5 rounded-lg">
            <i class="fas fa-plus mr-2"></i> Tambah Laporan Baru
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border">
        <table class="min-w-full">
            <thead class="bg-teal-50">
                <tr>
                    <th class="p-4 text-left text-sm font-semibold text-teal-800">TANGGAL</th>
                    <th class="p-4 text-left text-sm font-semibold text-teal-800">KEBUN / AREA</th>
                    <th class="p-4 text-left text-sm font-semibold text-teal-800">KELEMBAPAN</th>
                    <th class="p-4 text-left text-sm font-semibold text-teal-800">PH TANAH</th>
                    <th class="p-4 text-center text-sm font-semibold text-teal-800">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($semuaLaporan)): ?>
                    <tr><td colspan="5" class="p-6 text-center text-gray-500">Belum ada data laporan.</td></tr>
                <?php else: ?>
                    <?php foreach ($semuaLaporan as $laporan): ?>
                    <tr>
                        <td class="p-4"><?= date('d M Y', strtotime($laporan['created_at'])) ?></td>
                        <td class="p-4 font-medium"><?= htmlspecialchars($laporan['nama_kebun']) ?></td>
                        <td class="p-4"><?= htmlspecialchars($laporan['kelembapan']) ?>%</td>
                        <td class="p-4"><?= htmlspecialchars($laporan['ph']) ?></td>
                        <td class="p-4 text-center"><a href="#" class="text-red-500">Hapus</a></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    </div>
</main>

<div id="modalTambahLaporan" class="hidden fixed inset-0 bg-black/60 flex justify-center items-center z-50 p-4">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-teal-700">Input Laporan Baru</h2>
            <button onclick="closeModal()" class="text-2xl text-gray-500 hover:text-gray-800">&times;</button>
        </div>
        <form action="index.php?page=kondisi-lahan&action=store" method="POST">
            <div class="space-y-4">
                <div>
                    <label for="area_id" class="block text-sm font-medium text-gray-700">Pilih Kebun</label>
                    <select id="area_id" name="area_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="">-- Pilih Kebun --</option>
                        <?php foreach ($semuaKebun as $kebun): ?>
                            <option value="<?= $kebun['id'] ?>"><?= htmlspecialchars($kebun['nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="kelembapan" class="block text-sm font-medium text-gray-700">Kelembapan (%)</label>
                    <input type="number" step="0.1" id="kelembapan" name="kelembapan" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="ph" class="block text-sm font-medium text-gray-700">pH Tanah</label>
                    <input type="number" step="0.1" id="ph" name="ph" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>
            </div>
            <div class="flex justify-end space-x-4 pt-6 mt-4 border-t">
                <button type="button" onclick="closeModal()" class="bg-gray-200 font-semibold py-2 px-6 rounded-lg">Batal</button>
                <button type="submit" class="bg-teal-500 text-white font-semibold py-2 px-6 rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('modalTambahLaporan').style.display = 'flex';
    }
    function closeModal() {
        document.getElementById('modalTambahLaporan').style.display = 'none';
    }
</script>