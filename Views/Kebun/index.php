<div class="flex-1 bg-[#f0f7f4] min-h-screen p-6">
    <div class="bg-white h-screen p-6 rounded-2xl shadow-md">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold text-green-700 p-5">🌱 Daftar Kebun Anda</h1>
            <a href="index.php?page=kebun&action=tambah" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-4 rounded-lg">
                <i class="fas fa-plus mr-2"></i> Tambah Kebun Baru
            </a>
        </div>

        <?php if (isset($status)): ?>
            <?php if ($status == 'hapus_sukses'): ?>
                <div class="bg-green-100 ...">Data kebun berhasil dihapus.</div>
            <?php elseif ($status == 'hapus_gagal'): ?>
                <div class="bg-red-100 ...">Terjadi kesalahan saat menghapus data.</div>
            <?php elseif ($status == 'id_tidak_valid'): ?>
                <div class="bg-orange-100 ...">ID tidak valid.</div>
            <?php elseif ($status == 'sukses_tambah'): ?>
                <div class="bg-green-100 ...">Data kebun berhasil ditambahkan.</div>
            <?php elseif ($status == 'gagal_tambah'): ?>
                <div class="bg-red-100 ...">Gagal menambahkan data.</div>
            <?php endif; ?>
        <?php endif; ?>

        <div class="bg-white rounded-2xl shadow-lg overflow-auto border border-gray-200">
    <table class="min-w-full table-fixed divide-y divide-gray-200">
        <thead class="bg-emerald-50">
            <tr>
                <th class="w-[5%] px-4 py-3 text-left font-semibold text-teal-900">No</th>
                <th class="w-[20%] px-4 py-3 text-left font-semibold text-teal-900">Nama</th>
                <th class="w-[15%] px-4 py-3 text-left font-semibold text-teal-900">Luas Lahan</th>
                <th class="w-[15%] px-4 py-3 text-left font-semibold text-teal-900">Jumlah Pohon</th>
                <th class="w-[15%] px-4 py-3 text-left font-semibold text-teal-900">Tipe Tanah</th>
                <th class="w-[20%] px-4 py-3 text-left font-semibold text-teal-900">Alamat Kebun</th>
                <th class="w-[10%] px-4 py-3 text-center font-semibold text-teal-900">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($semuaKebun)): ?>
                <tr>
                    <td colspan="7" class="text-center text-gray-500 py-6">Belum ada data kebun.</td>
                </tr>
            <?php else: ?>
                <?php $no = 1; foreach ($semuaKebun as $kebun): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3"><?= $no++ ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($kebun['nama']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($kebun['size']) ?> Ha</td>
                        <td class="px-4 py-3"><?= htmlspecialchars($kebun['jumlah_pohon']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($kebun['tipe_tanah']) ?></td>
                        <td class="px-4 py-3"><?= htmlspecialchars($kebun['alamat_kebun']) ?></td>
                        <td class="px-4 py-3 text-center">
                            <a href="index.php?page=kebun&action=konfirmasi_hapus&id=<?= htmlspecialchars($kebun['id']) ?>"
                                class="text-red-600 hover:text-red-900 text-sm">
                                <i class="fas fa-trash-alt mr-1"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

    </main>
</div>
