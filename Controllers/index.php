<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kebun - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; background-color: #f8fafc; } </style>
</head>
<body class="flex flex-col h-screen">

    <?php 
        // View ini sekarang memanggil header-nya sendiri
        include __DIR__ . '/../../Layouts/header.php'; 
    ?>

    <div class="flex flex-1 overflow-hidden">
        <?php 
            // View ini juga memanggil sidebar-nya sendiri
            include __DIR__ . '/../../Layouts/sidebar.php'; 
        ?>

        <main class="flex-1 p-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-emerald-600">🌱 Daftar Kebun Anda</h1>
                <a href="index.php?page=kebun-tambah" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-2 px-5 rounded-lg">
                    <i class="fas fa-plus mr-2"></i> Tambah Kebun Baru
                </a>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border">
                <table class="min-w-full">
                    <thead class="bg-emerald-50">
                        <tr>
                            <th class="p-4 text-left text-sm font-semibold text-emerald-800">NAMA KEBUN</th>
                            <th class="p-4 text-left text-sm font-semibold text-emerald-800">LUAS</th>
                            <th class="p-4 text-left text-sm font-semibold text-emerald-800">JML POHON</th>
                            <th class="p-4 text-center text-sm font-semibold text-emerald-800">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php if (empty($semuaKebun)): ?>
                            <tr><td colspan="4" class="p-6 text-center text-gray-500">Belum ada data kebun.</td></tr>
                        <?php else: ?>
                            <?php foreach ($semuaKebun as $kebun): ?>
                            <tr>
                                <td class="p-4 font-semibold"><?= htmlspecialchars($kebun['nama']) ?></td>
                                <td class="p-4"><?= htmlspecialchars($kebun['size']) ?> Ha</td>
                                <td class="p-4"><?= htmlspecialchars($kebun['jumlah_pohon']) ?></td>
                                <td class="p-4 text-center">
                                    <a href="index.php?page=kebun&action=hapus&id=<?= $kebun['id'] ?>" onclick="return confirm('Yakin?')" class="text-red-500 hover:text-red-700">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>