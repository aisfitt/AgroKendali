<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pemantauan Perkebunan Kelapa Sawit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<header class="bg-white px-8 py-4 flex justify-between items-center shadow-sm">
    
    <div class="flex items-center gap-x-6">
        <a href="<?= BASE_URL ?>/index.php?page=beranda" class="flex items-center gap-3 cursor-pointer">
            <i class="fas fa-leaf text-green-500 text-3xl"></i> 
            <span class="text-2xl font-bold text-gray-800">AgroKendali</span>
        </a>
        
        <?php if (isUserLoggedIn()): ?>
            <span class="text-gray-600 pt-1">Selamat datang, <?= htmlspecialchars($_SESSION['user_name']) ?>!</span>
        <?php endif; ?>
    </div>

    <div class="flex items-center gap-4">
        <?php if (isUserLoggedIn()): ?>
            <a href="index.php?page=dashboard" class="bg-green-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-600 transition-colors">Dashboard</a>
            <a href="index.php?page=logout" class="text-gray-500 hover:text-red-500" title="Logout">
                <i class="fas fa-sign-out-alt fa-lg"></i>
            </a>
        <?php else: ?>
            <a href="index.php?page=login" class="text-gray-700 font-semibold hover:text-green-600">Masuk</a>
            <a href="index.php?page=register" class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600">Daftar</a>
        <?php endif; ?>
    </div>

</header>
<section class="min-h-screen flex flex-col md:flex-row justify-center items-center bg-blue-400 p-6">
    <div class="flex-1 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 drop-shadow-lg">
            Pemantauan dan Pengendalian Operasional Perkebunan Kelapa Sawit
        </h1>
        <p class="text-white text-lg max-w-xl leading-relaxed">
            Satu langkah lebih mudah dalam memonitor dan mengendalikan kebun sawit Anda dengan teknologi terkini yang sederhana dan efektif.
        </p>
    </div>
    <div class="flex-1 mt-8 md:mt-0 flex justify-center">
        <img src="<?= BASE_URL ?>/Gambar/logo-removebg-preview.png" alt="Perkebunan Kelapa Sawit" class="w-100 rounded-xl shadow-xl hover:scale-200 transition-transform duration-300">
    </div>
</section>

<section class="py-12 bg-white">
    <h2 class="text-center text-3xl font-bold mb-8">Fitur Aplikasi</h2>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-4">

        <div class="bg-green-100 rounded-xl p-6 shadow flex items-center gap-4 hover:shadow-lg transition">
            <img src="<?= BASE_URL ?>/Gambar/informasi-removebg-preview.png" alt="Kebun" class="w-16 h-16">
            <div>
                <h3 class="font-bold text-xl">Koleksi & Informasi Kebun</h3>
                <p class="text-sm mt-2">Mencatat serta menampilkan data kebun seperti nama, luas, jumlah pohon, jenis tanah, dan lainnya.</p>
            </div>
        </div>

        <div class="bg-yellow-100 rounded-xl p-6 shadow flex items-center gap-4 hover:shadow-lg transition">
            <img src="<?= BASE_URL ?>/Gambar/buah-removebg-preview.png" alt="Panen" class="w-16 h-16">
            <div>
                <h3 class="font-bold text-xl">Analisa Panen</h3>
                <p class="text-sm mt-2">Menganalisa panen berdasarkan tanggal, total berat, jumlah tandan, serta memantau tren naik atau turun.</p>
            </div>
        </div>

        <div class="bg-blue-100 rounded-xl p-6 shadow flex items-center gap-4 hover:shadow-lg transition">
            <img src="<?= BASE_URL ?>/Gambar/pupuk-removebg-preview.png" alt="Pupuk" class="w-16 h-16">
            <div>
                <h3 class="font-bold text-xl">Penggunaan Pupuk</h3>
                <p class="text-sm mt-2">Mencatat jenis pupuk, jumlah, serta jadwal penggunaan untuk memastikan kesuburan tanaman tetap terjaga.</p>
            </div>
        </div>

        <div class="bg-red-100 rounded-xl p-6 shadow flex items-center gap-4 hover:shadow-lg transition">
            <img src="<?= BASE_URL ?>/Gambar/Hama-removebg-preview.png" alt="Hama" class="w-16 h-16">
            <div>
                <h3 class="font-bold text-xl">Deteksi Hama</h3>
                <p class="text-sm mt-2">Mendeteksi dan mencatat jenis hama yang menyerang kebun agar penanganan dapat dilakukan lebih cepat.</p>
            </div>
        </div>

    </div>
</section>
</body>
</html>