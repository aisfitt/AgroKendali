<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Grafik Panen - AgroKendali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; background-color: #f8fafc; } </style>
</head>
<body class="flex flex-col h-screen">

    <?php include '../../Layouts/header.php'; ?>

    <div class="flex flex-1 overflow-hidden">
        <?php include '../../Layouts/sidebar.php'; ?>

        <main class="flex-1 p-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Analisis Hasil Panen</h1>
                <button onclick="document.getElementById('modalTambah').classList.remove('hidden')" class="bg-green-600 text-white font-bold px-5 py-2 rounded-lg hover:bg-green-700 transition-colors">
                    <i class="fas fa-plus mr-2"></i>Tambah Data Panen
                </button>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
                <canvas id="grafikPanen"></canvas>
            </div>
            
            </main>
    </div>

    <?php 
        // Memanggil file modal agar bisa ditampilkan
        include("TambahPanen.php"); 
    ?>

    <script>
        // Script untuk Grafik
        const ctx = document.getElementById('grafikPanen');
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: <?= json_encode($labels) ?>,
            datasets: [{
              label: 'Hasil Panen (kg)',
              data: <?= json_encode($hasil) ?>,
              borderColor: '#16a34a', // Warna garis hijau
              backgroundColor: 'rgba(22, 163, 74, 0.1)',
              fill: true,
              tension: 0.3
            }]
          },
          options: {
            responsive: true,
            scales: { y: { beginAtZero: true } }
          }
        });

        // Script untuk menandai sidebar aktif
        const path = "panen"; 
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