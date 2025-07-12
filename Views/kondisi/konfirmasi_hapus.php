<main class="flex-1 p-10 overflow-y-auto bg-gray-50">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-xl mx-auto mt-20">
        <h1 class="text-2xl font-bold text-red-600 mb-4">Konfirmasi Penghapusan</h1>
        <p class="mb-6 text-gray-700">
            Apakah Anda yakin ingin menghapus kondisi lahan <strong><?= htmlspecialchars($kebun['nama']) ?></strong>?
        </p>
        <div class="flex justify-end space-x-4">
            <a href="index.php?page=kebun" class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 font-semibold">Batal</a>
            <a href="index.php?page=kebun&action=hapus&id=<?= $kebun['id'] ?>" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 font-semibold">Ya, Hapus</a>
        </div>
    </div>
</main>
