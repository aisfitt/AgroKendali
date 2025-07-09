<!DOCTYPE html>
<html lang="id">
<head>
    <title>Analisis Panen - AgroKendali</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="flex flex-col h-screen">

    <div class="flex flex-1 overflow-hidden">

        <main class="flex-1 p-10 overflow-y-auto bg-gray-50">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Analisis Hasil Panen</h1>
                <button onclick="openModal()" class="bg-green-600 text-white font-bold px-5 py-2 rounded-lg hover:bg-green-700">
                    <i class="fas fa-plus mr-2"></i>Tambah Data Panen
                </button>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-lg font-semibold mb-4">Grafik Tren Panen (kg)</h3>
                    <canvas id="grafikPanen"></canvas>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border">
                    <h3 class="text-lg font-semibold mb-4">Riwayat Panen Terbaru</h3>
                    <div class="max-h-96 overflow-y-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-gray-50 sticky top-0">
                                <tr>
                                    <th class="p-3 font-semibold">Tanggal</th>
                                    <th class="p-3 font-semibold">Area</th>
                                    <th class="p-3 font-semibold">Berat (kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($dataPanen)): ?>
                                    <?php foreach ($dataPanen as $row): ?>
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-3"><?= htmlspecialchars(date('d M Y', strtotime($row['tanggal']))) ?></td>
                                        <td class="p-3"><?= htmlspecialchars($row['nama_area'] ?? 'N/A') ?></td>
                                        <td class="p-3 font-medium"><?= htmlspecialchars($row['berat']) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr><td colspan="3" class="p-6 text-center text-gray-500">Belum ada data panen.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include '../AgroKendali/Views/Panen/modal_tambah.php'; // Panggil modal ?>
    
    <script>
        function openModal() { document.getElementById('modalTambahPanen').style.display='flex'; }
        function closeModal() { document.getElementById('modalTambahPanen').style.display='none'; }

        // Script Grafik
        const ctx = document.getElementById('grafikPanen');
        new Chart(ctx, { type: 'line', data: { labels: <?= json_encode($labels ?? []) ?>, datasets: [{ label: 'Hasil Panen (kg)', data: <?= json_encode($hasil ?? []) ?>, borderColor: '#16a34a' }] } });
        
        // Script Sidebar Aktif
        const currentPage = 'panen';
        // ... (logika sidebar aktif Anda) ...
    </script>

</body>
</html>