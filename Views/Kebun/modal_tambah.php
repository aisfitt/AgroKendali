<div id="modalTambahKebun" class="hidden fixed inset-0 bg-black/60 flex justify-center items-center z-50">
  <div class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-4xl">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-emerald-600">🌴 Tambah Kebun Sawit Baru</h2>
        <button onclick="closeModal()" class="text-2xl text-gray-500 hover:text-gray-800">&times;</button>
    </div>
    
    <form action="index.php?page=kebun&action=store" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
        <div>
            <div class="mb-4">
                <label for="nama_kebun" class="block text-sm font-semibold text-gray-700 mb-1">Nama Kebun</label>
                <input type="text" id="nama_kebun" name="nama_kebun" placeholder="Contoh: Kebun Inti Riau" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
            </div>
            <div class="mb-4">
                <label for="luas_lahan" class="block text-sm font-semibold text-gray-700 mb-1">Luas Lahan (Ha)</label>
                <input type="text" id="luas_lahan" name="luas_lahan" placeholder="Contoh: 15.5" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
            </div>
            <div class="mb-4">
                <label for="jumlah_pohon" class="block text-sm font-semibold text-gray-700 mb-1">Jumlah Pohon</label>
                <input type="number" id="jumlah_pohon" name="jumlah_pohon" placeholder="Contoh: 300" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
            </div>
        </div>
        <div>
            <div class="mb-4">
                <label for="tipe_tanah" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Tanah</label>
                <select id="tipe_tanah" name="tipe_tanah" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required>
                    <option value="">-- Pilih Jenis Tanah --</option>
                    <option value="Gambut">Gambut</option>
                    <option value="Lempung">Lempung</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="alamat_kebun" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Kebun</label>
                <textarea id="alamat_kebun" name="alamat_kebun" rows="5" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full"></textarea>
            </div>
        </div>
        <div class="md:col-span-2 flex justify-end space-x-4 pt-6 border-t mt-4">
            <button type="button" onclick="closeModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-6 rounded-lg">Batal</button>
            <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-6 rounded-lg">Simpan</button>
        </div>
    </form>
  </div>
</div>