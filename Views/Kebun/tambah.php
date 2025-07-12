<main class="flex-1 p-10 bg-[#f0f7f4] overflow-y-auto min-h-screen">
    <div class="bg-white p-10 rounded-2xl shadow-lg w-full max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-emerald-600">🌴 Tambah Kebun Sawit Baru</h2>
            <a href="index.php?page=kebun" class="text-xl text-gray-500 hover:text-gray-800">&larr; Kembali</a>
        </div>

        <form action="index.php?page=kebun&action=store" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
            <div>
                <label for="nama_kebun" class="block text-sm font-semibold">Nama Kebun</label>
                <input type="text" id="nama_kebun" name="nama_kebun" class="bg-gray-100 border w-full p-2 rounded-lg" required>

                <label for="luas_lahan" class="block mt-4 text-sm font-semibold">Luas Lahan (Ha)</label>
                <input type="text" id="luas_lahan" name="luas_lahan" class="bg-gray-100 border w-full p-2 rounded-lg" required>

                <label for="jumlah_pohon" class="block mt-4 text-sm font-semibold">Jumlah Pohon</label>
                <input type="number" id="jumlah_pohon" name="jumlah_pohon" class="bg-gray-100 border w-full p-2 rounded-lg" required>
            </div>
            <div>
                <label for="tipe_tanah" class="block text-sm font-semibold">Jenis Tanah</label>
                <select id="tipe_tanah" name="tipe_tanah" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Gambut">Gambut</option>
                    <option value="Lempung">Lempung</option>
                </select>

                <label for="alamat_kebun" class="block mt-4 text-sm font-semibold">Alamat Kebun</label>
                <textarea id="alamat_kebun" name="alamat_kebun" rows="5" class="bg-gray-100 border w-full p-2 rounded-lg"></textarea>
            </div>
            <div class="md:col-span-2 flex justify-end space-x-4 pt-6 border-t mt-4">
                <a href="index.php?page=kebun" class="bg-gray-200 py-2 px-6 rounded-lg font-semibold">Batal</a>
                <button type="submit" class="bg-emerald-500 text-white py-2 px-6 rounded-lg font-semibold">Simpan</button>
            </div>
        </form>
    </div>
</main>
