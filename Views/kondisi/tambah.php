<main class="flex-1 p-10 overflow-y-auto" style="background-color: #f0f7f4;">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-teal-700">💧 Tambah Laporan Kondisi Lahan</h1>
        <a href="index.php?page=kondisi-lahan" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg hover:bg-gray-300">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl mx-auto border">
        <form action="index.php?page=kondisi-lahan&action=store" method="POST">
            <div class="space-y-6">
                
                <div>
                    <label for="area_id" class="block text-sm font-semibold text-gray-700 mb-1">Pilih Kebun</label>
                    <select id="area_id" name="area_id" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500" required>
                        <option value="">-- Pilih salah satu kebun --</option>
                        <?php foreach ($semuaKebun as $kebun): ?>
                            <option value="<?= $kebun['id'] ?>"><?= htmlspecialchars($kebun['nama']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="kelembapan" class="block text-sm font-semibold text-gray-700 mb-1">Kelembapan Tanah (%)</label>
                    <input type="number" step="0.1" id="kelembapan" name="kelembapan" placeholder="Contoh: 65.5" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500" required>
                </div>

                <div>
                    <label for="ph" class="block text-sm font-semibold text-gray-700 mb-1">pH Tanah</label>
                    <input type="number" step="0.1" id="ph" name="ph" placeholder="Contoh: 5.8" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500" required>
                </div>

            </div>

            <div class="flex justify-end pt-8 mt-6 border-t">
                <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-8 rounded-lg">
                    Simpan Laporan
                </button>
            </div>
        </form>
    </div>
</main>