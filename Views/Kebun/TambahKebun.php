<?php
// File ini dipanggil oleh fungsi showTambahForm() di KebunController.php
// Controller sudah menyiapkan semua variabel yang dibutuhkan.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kebun Baru - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">


    <div class="container max-w-4xl mx-auto px-6 py-10">

        <main class="flex-1 p-10 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-emerald-600 text-center flex items-center justify-center gap-2">
                🌴 Tambah Kebun Sawit
                </h1>
                <a href="index.php?page=kebun" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg hover:bg-gray-300">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar
                </a>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-10 border  border-gray-200">
                <form action="index.php?page=kebun&action=store" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
                    
                    <div>
                        <div class="mb-4">
                            <label for="nama_kebun" class="block text-sm font-semibold text-gray-700 mb-1">Nama Kebun</label>
                            <input type="text" id="nama_kebun" name="nama_kebun" placeholder="Contoh: Kebun Inti Riau" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
                        </div>
                        <div class="mb-4">
                            <label for="luas_lahan" class="block text-sm font-semibold text-gray-700 mb-1">Luas Lahan (Ha)</label>
                            <input type="text" id="luas_lahan" name="luas_lahan" placeholder="Contoh: 15.5" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
                        </div>
                        <div class="mb-4">
                            <label for="jumlah_pohon" class="block text-sm font-semibold text-gray-700 mb-1">Jumlah Pohon</label>
                            <input type="number" id="jumlah_pohon" name="jumlah_pohon" placeholder="Contoh: 300" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required />
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                            <label for="tipe_tanah" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Tanah</label>
                            <select id="tipe_tanah" name="tipe_tanah" class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full" required>
                                <option value="">-- Pilih Jenis Tanah --</option>
                                <option value="Gambut">Gambut</option>
                                <option value="Lempung">Lempung</option>
                                <option value="Pasir">Pasir</option>
                            </select>
                        </div>

                        <div class="mb-3">
                          <label for="rentang_panen" class="block text-sm font-semibold text-gray-700 mb-1">Rentang Panen (Bulan)</label>
                          <input type="text" id="rentang_panen" name="rentang_panen" placeholder="Contoh: 1-3 bulan"
                            class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                          <p class="text-xs text-gray-500 mt-1">Estimasi waktu panen.</p>
                        </div>

                        <div class="mb-3">
                          <label for="alamat_kebun" class="block text-sm font-semibold text-gray-700 mb-1">Alamat Kebun</label>
                          <input type="text" id="alamat_kebun" name="alamat_kebun" placeholder="Contoh: Desa Suka Makmur"
                            class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
                        </div>
                      </div>

                    </div>

                    <div class="md:col-span-2 flex justify-end space-x-4 pt-6 border-t mt-4">
                        <a href="index.php?page=kebun" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-6 rounded-lg">Batal</a>
                        <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-6 rounded-lg">Simpan Kebun</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Script untuk sidebar aktif
        const path = "kebun"; 
        const menuLinks = document.querySelectorAll(".menu-link");
        menuLinks.forEach(link => {
            if (link.dataset.page === path) {
                link.classList.add("bg-green-500", "text-white");
            }
        });
    </script>
</body>
</html>