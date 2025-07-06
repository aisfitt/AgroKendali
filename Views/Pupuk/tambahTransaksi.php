<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi Pupuk - AgroKendali</title>
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
                    <h1 class="text-3xl font-bold text-gray-800">Tambah Transaksi Pemakaian Pupuk</h1>
                    <p class="mt-1 text-gray-500">Catat penggunaan pupuk baru ke dalam sistem.</p>
                </div>
                <a href="index.php" class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
                </a>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
                <form action="#" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Pemakaian</label>
                            <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                        </div>

                        <div>
                            <label for="jenis_pupuk" class="block text-sm font-medium text-gray-700 mb-1">Pilih Jenis Pupuk</label>
                            <select id="jenis_pupuk" name="jenis_pupuk" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                                <option value="" disabled selected>-- Pilih Pupuk --</option>
                                <option value="Urea">Urea</option>
                                <option value="NPK Mutiara">NPK Mutiara 16-16-16</option>
                                <option value="Pupuk Kompos">Pupuk Kompos</option>
                            </select>
                        </div>

                        <div>
                            <label for="jumlah" class="block text-sm font-medium text-gray-700 mb-1">Jumlah</label>
                            <div class="flex gap-2">
                                <input type="number" id="jumlah" name="jumlah" placeholder="10" class="w-2/3 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                                <select id="satuan" name="satuan" class="w-1/3 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                                    <option>Kg</option>
                                    <option>Liter</option>
                                    <option>Karung</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="lokasi_kebun" class="block text-sm font-medium text-gray-700 mb-1">Lokasi Kebun</label>
                            <select id="lokasi_kebun" name="lokasi_kebun" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" required>
                                 <option value="" disabled selected>-- Pilih Kebun --</option>
                                <option>Kebun A</option>
                                <option>Kebun B</option>
                                <option>Kebun C (Pembibitan)</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan (Opsional)</label>
                        <textarea id="catatan" name="catatan" rows="4" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500" placeholder="Contoh: Pemupukan tahap pertama untuk 100 bibit."></textarea>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-4">
                        <button type="reset" class="bg-gray-200 text-gray-700 font-bold py-2 px-6 rounded-lg hover:bg-gray-300 transition-colors">
                            Reset
                        </button>
                        <button type="submit" class="bg-green-500 text-white font-bold py-2 px-6 rounded-lg hover:bg-green-600 transition-colors">
                            Simpan Transaksi
                        </button>
                    </div>
                </form>
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