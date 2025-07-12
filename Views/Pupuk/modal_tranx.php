<div id="modalTransaksi" class="hidden fixed inset-0 bg-black/60 flex justify-center items-center z-50 p-4">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Tambah Transaksi Pemakaian</h2>
            <button onclick="closeModal('modalTransaksi')" class="text-2xl">&times;</button>
        </div>
        <form action="index.php?page=pupuk&action=store_transaksi" method="post" class="space-y-4">
            
            <div>
                <label for="pupuk_id" class="block text-sm font-medium text-gray-700">Jenis Pupuk</label>
                <select name="pupuk_id" id="pupuk_id" required class="mt-1 w-full border p-2 rounded-md">
                    <option value="">-- Pilih Jenis Pupuk --</option>
                    <?php if (empty($dataJenis)): ?>
                        <option disabled>Belum ada pupuk. Tambah di Kelola Jenis.</option>
                    <?php else: ?>
                        <?php foreach($dataJenis as $jenis): ?>
                            <option value="<?= $jenis['id'] ?>"><?= htmlspecialchars($jenis['nama']) ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>

            <div>
                <label for="area_id" class="block text-sm font-medium text-gray-700">Lokasi Kebun</label>
                <select name="area_id" id="area_id" required class="mt-1 w-full border p-2 rounded-md">
                    <option value="">-- Pilih Kebun --</option>
                     <?php foreach($semuaKebun as $kebun): ?>
                        <option value="<?= $kebun['id'] ?>"><?= htmlspecialchars($kebun['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Kg)</label>
                <input type="number" step="0.1" name="jumlah" id="jumlah" placeholder="Contoh: 10.5" required class="mt-1 w-full border p-2 rounded-md">
            </div>
            
            <div class="flex justify-end gap-4 pt-4 mt-4 border-t">
                <button type="button" onclick="closeModal('modalTransaksi')" class="bg-gray-200 font-bold px-6 py-2 rounded-lg">Batal</button>
                <button type="submit" class="bg-green-600 text-white font-bold px-6 py-2 rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>