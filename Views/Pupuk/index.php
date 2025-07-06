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

    <?php include '../Layouts/header.php'; // Path ke header ?>

    <div class="flex flex-1 overflow-hidden">
        
        <?php include '../Layouts/sidebar.php'; // Path ke sidebar ?>

        <main class="flex-1 p-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Riwayat Pemakaian Pupuk</h1>
                    <p class="mt-1 text-gray-500">Catatan semua transaksi penggunaan pupuk.</p>
                </div>
                <div class="flex items-center gap-4">
                    <a href="tambahPupuk.php" class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                        <i class="fas fa-cog mr-2"></i>Kelola Jenis Pupuk
                    </a>
                    <a href="tambahTransaksi.php" class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600 transition-colors">
                        <i class="fas fa-plus mr-2"></i>Tambah Transaksi
                    </a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-end">
                    <div>
                        <label for="tgl_mulai" class="block text-sm font-medium text-gray-700">Dari Tanggal</label>
                        <input type="date" id="tgl_mulai" name="tgl_mulai" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="tgl_selesai" class="block text-sm font-medium text-gray-700">Sampai Tanggal</label>
                        <input type="date" id="tgl_selesai" name="tgl_selesai" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="jenis_pupuk" class="block text-sm font-medium text-gray-700">Jenis Pupuk</label>
                        <select id="jenis_pupuk" name="jenis_pupuk" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm">
                            <option>Semua</option>
                            <option>Urea</option>
                            <option>NPK Mutiara</option>
                            <option>Pupuk Kompos</option>
                        </select>
                    </div>
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 w-full md:w-auto">
                        Filter
                    </button>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="p-4 font-semibold text-gray-600">No</th>
                                <th class="p-4 font-semibold text-gray-600">Tanggal</th>
                                <th class="p-4 font-semibold text-gray-600">Jenis Pupuk</th>
                                <th class="p-4 font-semibold text-gray-600">Jumlah</th>
                                <th class="p-4 font-semibold text-gray-600">Lokasi Kebun</th>
                                <th class="p-4 font-semibold text-gray-600">Dicatat Oleh</th>
                                <th class="p-4 font-semibold text-gray-600 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="p-4">1</td>
                                <td class="p-4">05 Juli 2025</td>
                                <td class="p-4">NPK Mutiara</td>
                                <td class="p-4">10 Kg</td>
                                <td class="p-4">Kebun A</td>
                                <td class="p-4">Budi Santoso</td>
                                <td class="p-4 flex gap-2 justify-center">
                                    <button title="Edit" class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                    <button title="Hapus" class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50">
                                <td class="p-4">2</td>
                                <td class="p-4">03 Juli 2025</td>
                                <td class="p-4">Pupuk Kompos</td>
                                <td class="p-4">25 Kg</td>
                                <td class="p-4">Kebun B</td>
                                <td class="p-4">Budi Santoso</td>
                                <td class="p-4 flex gap-2 justify-center">
                                    <button title="Edit" class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                    <button title="Hapus" class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                             <tr class="border-b">
                                <td class="p-4">3</td>
                                <td class="p-4">01 Juli 2025</td>
                                <td class="p-4">Urea</td>
                                <td class="p-4">5 Kg</td>
                                <td class="p-4">Kebun A</td>
                                <td class="p-4">Admin</td>
                                <td class="p-4 flex gap-2 justify-center">
                                    <button title="Edit" class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                    <button title="Hapus" class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Tandai bahwa halaman ini adalah "pupuk"
        const path = "pupuk"; 
        const menuLinks = document.querySelectorAll(".menu-link");

        menuLinks.forEach(link => {
            // Hapus style aktif dari semua link terlebih dahulu
            link.classList.remove("bg-green-500", "text-white");
            link.classList.add("text-gray-700", "hover:bg-green-50", "hover:text-green-700");

            // Tambahkan style aktif hanya ke link yang cocok
            if (link.dataset.page === path) {
                link.classList.add("bg-green-500", "text-white");
                link.classList.remove("text-gray-700", "hover:bg-green-50", "hover:text-green-700");
            }
        });
    </script>
</body>
</html>