<div id="modalTambahPanen" class="hidden fixed inset-0 bg-black/60 flex justify-center items-center z-50">
  <div class="bg-white p-8 rounded-xl w-full max-w-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Input Data Panen Baru</h2>
        <button onclick="document.getElementById('modalTambahPanen').style.display='none'" class="text-2xl">&times;</button>
    </div>
    <form action="index.php?page=panen&action=store" method="post" class="space-y-4">
        <div>
            <label for="tanggal">Tanggal Panen</label>
            <input type="date" name="tanggal" required class="mt-1 w-full border p-2 rounded-md">
        </div>
        <div>
            <label for="area_id">Area Kebun</label>
            <select name="area_id" required class="mt-1 w-full border p-2 rounded-md">
                <option value="">-- Pilih Kebun --</option>
                <?php foreach($semuaKebun as $kebun): ?>
                    <option value="<?= $kebun['id'] ?>"><?= htmlspecialchars($kebun['nama']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="berat">Berat Panen (kg)</label>
            <input type="number" step="0.01" name="berat" required class="mt-1 w-full border p-2 rounded-md">
        </div>
        <div>
            <label for="jumlah_tandan">Jumlah Tandan</label>
            <input type="number" name="jumlah_tandan" required class="mt-1 w-full border p-2 rounded-md">
        </div>
        <div class="flex justify-end gap-4 pt-4 border-t">
            <button type="button" onclick="document.getElementById('modalTambahPanen').style.display='none'" class="bg-gray-200 font-bold px-6 py-2 rounded-lg">Batal</button>
            <button type="submit" class="bg-green-600 text-white font-bold px-6 py-2 rounded-lg">Simpan</button>
        </div>
    </form>
  </div>
</div>