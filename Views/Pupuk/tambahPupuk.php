<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jenis Pupuk - AgroKendali</title>
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

    <?php include '../Layouts/header.php'; // Sesuaikan path jika perlu ?>

    <div class="flex flex-1 overflow-hidden">
        
        <?php include '../Layouts/sidebar.php'; // Sesuaikan path jika perlu ?>

        <main class="flex-1 p-10 overflow-y-auto">
            
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Kelola Jenis Pupuk</h1>
                    <p class="mt-1 text-gray-500">Tambah, lihat, atau perbarui jenis pupuk yang tersedia.</p>
                </div>
                <a href="index.php" class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
                </a>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Form Tambah Pupuk Baru</h3>
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_pupuk" class="block text-sm font-medium text-gray-700 mb-1">Nama Pupuk</label>
                            <input type="text" id="nama_pupuk" name="nama_pupuk" placeholder="Contoh: NPK Mutiara 16-16-16" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                        </div>
                        <div>
                            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                            <select id="kategori" name="kategori" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                <option>Anorganik</option>
                                <option>Organik</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat (Opsional)</label>
                        <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Kandungan, cara pakai, dll."></textarea>
                    </div>
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-green-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-600 transition-colors">
                            Simpan Pupuk
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Daftar Jenis Pupuk</h3>
                </div>
        </main>
    </div>

    <script>
        // Mengubah 'path' agar link "Pupuk" di sidebar menjadi aktif
        const path = "pupuk"; 
        const menuLinks = document.querySelectorAll(".menu-link");

        menuLinks.forEach(link => {
            if (link.dataset.page === path) {
                link.classList.add("bg-green-500", "text-white");
                link.classList.remove("text-gray-700");
            }
        });
    </script>
</body>
</html>