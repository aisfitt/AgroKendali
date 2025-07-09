<main class="flex-1 p-10 overflow-y-auto">
    <div class="flex justify-between items-center mb-10">
        <h1 class="text-4xl font-extrabold text-emerald-700 tracking-tight">🐛 Data Hama & Penyakit</h1>
        <a href="index.php?page=hama&action=tambah" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2 px-5 rounded-full shadow transition">
            + Tambah Data Baru
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if (empty($dataHama)): ?>
            <p class="col-span-3 text-center text-gray-500 py-10">Belum ada data hama di database.</p>
        <?php else: ?>
            <?php foreach($dataHama as $hama): ?>
            <div class="bg-white rounded-2xl shadow-md hover:shadow-xl border transition-transform hover:-translate-y-1">
                <img src="<?= htmlspecialchars($hama['image']) ?>" alt="Gambar <?= htmlspecialchars($hama['judul']) ?>" class="w-full h-48 object-cover rounded-t-2xl">
                <div class="p-5">
                    <h2 class="text-lg font-bold text-emerald-700 mb-2"><?= htmlspecialchars($hama['judul']) ?></h2>
                    <p class="text-sm text-gray-600 mb-4 h-16 overflow-hidden"><?= htmlspecialchars($hama['content']) ?></p>
                    <button onclick='showModal(<?= json_encode($hama) ?>)' class="font-semibold text-emerald-600 hover:text-emerald-800">
                        Lihat Detail →
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</main>

<div id="modalDetail" class="hidden fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 p-4">
    <div class="bg-white w-full max-w-lg rounded-xl shadow-xl relative" id="modal-content">
        <button onclick="closeModal()" class="absolute top-3 right-4 text-gray-600 hover:text-red-500 text-2xl font-bold">&times;</button>
        <img id="modal-img" src="" alt="Gambar Hama" class="w-full h-56 object-cover rounded-t-xl">
        <div class="p-6">
            <h2 id="modal-title" class="text-2xl font-bold text-emerald-700 mb-3"></h2>
            <p id="modal-desc" class="text-sm text-gray-700 mb-4"></p>
            <h3 class="text-sm font-semibold text-gray-800 mb-1">Penanganan:</h3>
            <p id="modal-penanganan" class="text-sm text-gray-600"></p>
        </div>
    </div>
</div>

<script>
    function showModal(hamaData) {
        document.getElementById('modal-title').innerText = hamaData.judul;
        document.getElementById('modal-desc').innerText = hamaData.content;
        document.getElementById('modal-penanganan').innerText = hamaData.penanganan;
        document.getElementById('modal-img').src = hamaData.image;
        document.getElementById('modalDetail').classList.remove('hidden');
    }
    function closeModal() {
        document.getElementById('modalDetail').classList.add('hidden');
    }
</script>