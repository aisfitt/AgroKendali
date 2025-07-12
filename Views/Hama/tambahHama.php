<main class="flex-1 p-10 overflow-y-auto bg-[#f0f7f4] min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-emerald-600">🐛 Tambah Data Hama Baru</h1>
        <a href="index.php?page=hama" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg hover:bg-gray-300">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>
    <div class="bg-white p-8 rounded-xl shadow-sm border">
        <form action="index.php?page=hama&action=store" method="POST" enctype="multipart/form-data" class="space-y-6">
            <div>
                <label for="judul" class="block text-sm font-semibold text-gray-700">Nama Hama/Penyakit</label>
                <input type="text" id="judul" name="judul" required class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="content" class="block text-sm font-semibold text-gray-700">Deskripsi</label>
                <textarea id="content" name="content" rows="4" required class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"></textarea>
            </div>
             <div>
                <label for="penanganan" class="block text-sm font-semibold text-gray-700">Penanganan</label>
                <textarea id="penanganan" name="penanganan" rows="4" required class="mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500"></textarea>
            </div>
            <div>
                <label for="gambar" class="block text-sm font-semibold text-gray-700">Upload Gambar</label>
                <input type="file" id="gambar" name="gambar" required class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                <p class="text-xs text-gray-500 mt-1">* Pastikan folder `uploads` ada di dalam folder utama proyek Anda.</p>
            </div>
            <div class="text-right pt-4 border-t">
                <button type="submit" class="bg-emerald-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-emerald-600">Simpan Data</button>
            </div>
        </form>
    </div>
</main>