<main class="flex-1 p-10 overflow-y-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-emerald-600">🌴 Tambah Kebun Sawit Baru</h1>
        <a href="index.php?page=kebun" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-10 border">
        <form action="index.php?page=kebun&action=store" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
            <div>
                <div class="mb-4">
                    <label for="nama_kebun" class="block text-sm font-semibold">Nama Kebun</label>
                    <input type="text" id="nama_kebun" name="nama_kebun" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="luas_lahan" class="block text-sm font-semibold">Luas Lahan (Ha)</label>
                    <input type="text" id="luas_lahan" name="luas_lahan" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                </div>
            </div>

            <div>
                <div class="mb-4">
                    <label for="jumlah_pohon" class="block text-sm font-semibold">Jumlah Pohon</label>
                    <input type="number" id="jumlah_pohon" name="jumlah_pohon" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="tipe_tanah" class="block text-sm font-semibold">Jenis Tanah</label>
                    <select id="tipe_tanah" name="tipe_tanah" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                        <option value="">-- Pilih Jenis --</option>
                        <option value="Gambut">Gambut</option>
                        <option value="Lempung">Lempung</option>
                        <option value="Pasir">Pasir</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="alamat_kebun" class="block text-sm font-semibold">Alamat Kebun</label>
                    <input type="text" id="alamat_kebun" name="alamat_kebun" class="bg-gray-100 border w-full p-2 rounded-lg" required>
                </div>
            </div>

            <div class="md:col-span-2 flex justify-end">
                <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-6 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</main>
