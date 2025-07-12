<main class="flex-1 bg-[#f0f7f4] min-h-screen p-10">
    <div class="bg-white p-6 rounded-2xl shadow-md">
        <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-bold text-gray-800">Kelola Jenis Pupuk</h1>
        <a href="index.php?page=pupuk" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
    </div>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses_jenis'): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            <p>Jenis pupuk baru berhasil ditambahkan.</p>
        </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-1 bg-white p-8 rounded-xl shadow-sm border">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">Form Tambah Jenis Baru</h3>
            <form action="index.php?page=pupuk&action=store_jenis" method="POST" class="space-y-4">
                <div>
                    <label for="nama_pupuk" class="block text-sm font-medium text-gray-700 mb-1">Nama Pupuk</label>
                    <input type="text" id="nama_pupuk" name="nama_pupuk" placeholder="Contoh: Urea" class="w-full p-3 border rounded-md" required>
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="w-full p-3 border rounded-md"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-6 rounded-lg">
                        Simpan Jenis
                    </button>
                </div>
            </form>
        </div>

        <div class="lg:col-span-2 bg-white p-8 rounded-xl shadow-sm border">
            <h3 class="text-xl font-semibold text-gray-800 mb-6">Daftar Jenis Pupuk Tersedia</h3>
            <div class="overflow-y-auto max-h-96">
                <table class="w-full text-left">
                    <thead class="bg-gray-100 sticky top-0">
                        <tr>
                            <th class="p-4 font-semibold">Nama Pupuk</th>
                            <th class="p-4 font-semibold">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <?php if(empty($dataJenis)): ?>
                            <tr><td colspan="2" class="p-4 text-center text-gray-500">Belum ada data.</td></tr>
                        <?php else: ?>
                            <?php foreach ($dataJenis as $jenis): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-medium"><?= htmlspecialchars($jenis['nama']) ?></td>
                                <td class="p-4 text-sm text-gray-600"><?= htmlspecialchars($jenis['deskripsi']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</main>