<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pupuk - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
      body { 
        font-family: 'Inter', sans-serif; 
        background-color: #f8fafc;
      }
    </style>
</head>
<body class="flex flex-col h-screen">

    <div class="flex flex-1 overflow-hidden">

       <main class="flex-1 p-10 overflow-y-auto">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Pupuk</h1>
        <p class="mt-1 text-gray-500">Pilih aksi yang ingin Anda lakukan di bawah ini.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="index.php?page=pupuk&action=riwayat" class="block bg-white p-8 rounded-2xl shadow-sm border hover:shadow-lg hover:-translate-y-1 transition-all">
            <h3 class="text-xl font-bold text-gray-900">Riwayat Transaksi</h3>
            <p class="text-gray-600 mt-1">Lihat dan kelola semua riwayat pemakaian pupuk.</p>
        </a>
        <a href="index.php?page=pupuk&action=jenis" class="block bg-white p-8 rounded-2xl shadow-sm border hover:shadow-lg hover:-translate-y-1 transition-all">
            <h3 class="text-xl font-bold text-gray-900">Kelola Jenis Pupuk</h3>
            <p class="text-gray-600 mt-1">Tambah atau perbarui data master jenis pupuk.</p>
        </a>
    </div>
</main>
<script>
    // Fungsi untuk membuka-tutup akordion
    function toggleAccordion(contentId, iconId) {
        const content = document.getElementById(contentId);
        const icon = document.getElementById(iconId);
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }

    // Fungsi untuk membuka modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }
</script>
</body>
</html>