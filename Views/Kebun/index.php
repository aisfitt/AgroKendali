<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kebun Anda - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="flex flex-col h-screen bg-gray-50">

    <div class="flex flex-1 overflow-hidden">
        <main class="flex-1 p-10 overflow-y-auto bg-gray-50">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-emerald-600">🌱 Daftar Kebun Anda</h1>
                <button onclick="openModal()" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-5 rounded-lg">
                    <i class="fas fa-plus mr-2"></i> Tambah Kebun Baru
                </button>
            </div>

            <?php if (isset($status)): // Cek apakah ada variabel status dari controller ?>
                <?php if ($status == 'hapus_sukses'): ?>
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md" role="alert">
                        <p class="font-bold">Berhasil!</p>
                        <p>Data kebun berhasil dihapus.</p>
                    </div>
                <?php elseif ($status == 'hapus_gagal'): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md" role="alert">
                        <p class="font-bold">Gagal!</p>
                        <p>Terjadi kesalahan saat menghapus data kebun.</p>
                    </div>
                <?php elseif ($status == 'id_tidak_valid'): ?>
                    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-4 rounded-md" role="alert">
                        <p class="font-bold">Peringatan!</p>
                        <p>ID kebun tidak valid untuk penghapusan.</p>
                    </div>
                <?php elseif ($status == 'sukses_tambah'): ?>
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md" role="alert">
                        <p class="font-bold">Berhasil!</p>
                        <p>Data kebun baru berhasil ditambahkan.</p>
                    </div>
                <?php elseif ($status == 'gagal_tambah'): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md" role="alert">
                        <p class="font-bold">Gagal!</p>
                        <p>Terjadi kesalahan saat menambahkan data kebun baru.</p>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                <div class="overflow-x-auto"> 
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-emerald-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Nama</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Luas Lahan</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Jumlah Pohon</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Tipe Tanah</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Alamat Kebun</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php if (empty($semuaKebun)): ?>
                                <tr>
                                    <td colspan="7" class="px-6 py-6 text-center text-gray-500 text-lg">Belum ada data kebun yang tersedia.</td>
                                </tr>
                            <?php else: ?>
                                <?php $no = 1; ?>
                                <?php foreach ($semuaKebun as $kebun): ?>
                                    <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $no++ ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= htmlspecialchars($kebun['nama']) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($kebun['size']) ?> Ha</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($kebun['jumlah_pohon']) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($kebun['tipe_tanah']) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700"><?= htmlspecialchars($kebun['alamat_kebun']) ?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <a href="index.php?page=kebun&action=hapus&id=<?= htmlspecialchars($kebun['id']) ?>" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus kebun ini?')" 
                                               class="text-red-600 hover:text-red-900 ml-4 transition duration-150 ease-in-out">
                                                <i class="fas fa-trash-alt mr-1"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div> </div>
        </main>
    </div>

    <script>
        // Pastikan path ini sesuai dengan nilai 'page' di router utama Anda
        const path = "kebun"; 
        const menuLinks = document.querySelectorAll(".menu-link");
        menuLinks.forEach(link => {
            if (link.dataset.page === path) {
                link.classList.add("bg-emerald-600", "text-white", "shadow-md");
                link.classList.remove("text-gray-700", "hover:bg-gray-100");
            }
        });
    </script>
</body>
</html>