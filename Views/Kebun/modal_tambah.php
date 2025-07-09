<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Kebun</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="container max-w-4xl mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-emerald-600 mb-10 text-center flex items-center justify-center gap-2">
      🌴 Tambah Kebun Sawit
    </h1>

    <div class="bg-white rounded-2xl shadow-lg p-10 border border-gray-200">
      <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
        <!-- Kolom Kiri -->
        <div>
          <div class="mb-3">
            <label for="nama_kebun" class="block text-sm font-semibold text-gray-700 mb-1">Nama Kebun</label>
            <input type="text" id="nama_kebun" name="nama_kebun" placeholder="Contoh: Kebun Riau 1"
              class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
          </div>
          <div class="mb-3">
            <label for="luas_lahan" class="block text-sm font-semibold text-gray-700 mb-1">Luas Lahan (Ha)</label>
            <input type="text" id="luas_lahan" name="luas_lahan" placeholder="Contoh: 15,5"
              class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
            <p class="text-xs text-gray-500 mt-1">Gunakan koma (,) untuk desimal.</p>
          </div>
          <div class="mb-3">
            <label for="jumlah_pohon" class="block text-sm font-semibold text-gray-700 mb-1">Jumlah Pohon</label>
            <input type="number" id="jumlah_pohon" name="jumlah_pohon" placeholder="Contoh: 300"
              class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
          </div>
        </div>

        <!-- Kolom Kanan -->
        <div>
          <div class="mb-3">
            <label for="jenis_tanah" class="block text-sm font-semibold text-gray-700 mb-1">Jenis Tanah</label>
            <select id="jenis_tanah" name="jenis_tanah"
              class="bg-gray-100 border border-gray-300 rounded-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-emerald-500" required>
              <option value="">-- Pilih jenis tanah --</option>
              <option value="lempung">Lempung</option>
              <option value="pasir">Pasir</option>
              <option value="liat">Liat</option>
              <option value="humus">Humus</option>
              <option value="humus">Gambut</option>
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

        <!-- Tombol -->
        <div class="md:col-span-2 flex justify-end space-x-4 pt-6">
          <a href="tampilan.php"
            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-6 rounded-lg transition">Batal</a>
          <button type="submit"
            class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-2 px-6 rounded-lg transition">Tambah</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>