<main class="flex-1 p-10 overflow-y-auto bg-[#f0f7f4] min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Riwayat Pemakaian Pupuk</h1>
        <div>
            <a href="index.php?page=pupuk" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg mr-4">
                <i class="fas fa-arrow-left"></i>
            </a>
            <button onclick="openModal('modalTransaksi')" class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg">
                <i class="fas fa-plus mr-2"></i>Tambah Transaksi
            </button>
        </div>
    </div>
    <div class="bg-white p-8 rounded-xl shadow-sm border">
        <table class="w-full text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 font-semibold">Tanggal</th>
                    <th class="p-4 font-semibold">Jenis Pupuk</th>
                    <th class="p-4 font-semibold">Jumlah</th>
                    <th class="p-4 font-semibold">Lokasi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (empty($dataTransaksi)): ?>
                    <tr><td colspan="4" class="p-6 text-center text-gray-500">Belum ada data transaksi.</td></tr>
                <?php else: ?>
                    <?php foreach ($dataTransaksi as $transaksi): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-4"><?= htmlspecialchars(date('d M Y', strtotime($transaksi['created_at']))) ?></td>
                        <td class="p-4 font-medium"><?= htmlspecialchars($transaksi['nama_pupuk']) ?></td>
                        <td class="p-4"><?= htmlspecialchars($transaksi['jumlah']) ?> Kg</td>
                        <td class="p-4"><?= htmlspecialchars($transaksi['nama_area']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?php 
    // Memanggil file modal popup
    include '../AgroKendali/Views/Pupuk/modal_tranx.php'; 
?>

<script>
    // JavaScript untuk kontrol modal
    function openModal(id) { document.getElementById(id).style.display = 'flex'; }
    function closeModal(id) { document.getElementById(id).style.display = 'none'; }
</script>