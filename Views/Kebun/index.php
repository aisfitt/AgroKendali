<?php
// 1. Panggil file koneksi dan model dari lokasi yang benar
require_once '../../Model/KoneksiDB.php';
require_once '../../Model/Lahan_model.php'; // Nama file dan folder sudah benar

// 2. Ambil semua data kebun menggunakan fungsi dari model
$semuaKebun = getAllKebun($con); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kebun - AgroKendali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; background-color: #f8fafc; } </style>
</head>
<body class="flex flex-col h-screen">

    <?php include '../Layouts/header.php'; ?>

    <div class="flex flex-1 overflow-hidden">
        <?php include '../Layouts/sidebar.php'; ?>

        <main class="flex-1 p-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-emerald-600">🌱 Daftar Kebun Anda</h1>
                <button class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-5 rounded-lg">
                    <i class="fas fa-plus mr-2"></i> Tambah Kebun
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-emerald-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-emerald-800 uppercase">No</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-emerald-800 uppercase">Nama Kebun</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-emerald-800 uppercase">Luas</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-emerald-800 uppercase">Jml Pohon</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-emerald-800 uppercase">Jenis Tanah</th>
                                <th class="px-6 py-4 text-center text-sm font-semibold text-emerald-800 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            <?php if (empty($semuaKebun)): ?>
                                <tr>
                                    <td colspan="6" class="px-6 py-12 text-center text-gray-500">Tidak ada data kebun.</td>
                                </tr>
                            <?php else: ?>
                                <?php $no = 1; foreach ($semuaKebun as $kebun): ?>
                                <tr>
                                    <td class="px-6 py-4 text-gray-700"><?= $no++ ?></td>
                                    <td class="px-6 py-4 font-semibold text-gray-800"><?= htmlspecialchars($kebun['nama']) ?></td>
                                    <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($kebun['size']) ?></td>
                                    <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($kebun['jumlah_pohon']) ?></td>
                                    <td class="px-6 py-4 text-gray-700"><?= htmlspecialchars($kebun['tipe_tanah']) ?></td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="#" class="text-blue-600 hover:text-blue-800 mr-4 font-medium">Edit</a>
                                        <a href="#" class="text-red-600 hover:text-red-800 font-medium">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        const path = "kebun"; // Jangan lupa sesuaikan path ini
        const menuLinks = document.querySelectorAll(".menu-link");
        menuLinks.forEach(link => {
            if (link.dataset.page === path) {
                link.classList.add("bg-green-500", "text-white");
                link.classList.remove("text-gray-700", "hover:bg-green-50", "hover:text-green-700");
            }
        });
    </script>
</body>
</html>