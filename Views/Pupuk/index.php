<main class="flex-1 p-10 bg-[#f0f7f4] min-h-screen overflow-y-auto">
    <div class="mb-8 p-3">
        <h1 class="text-3xl font-bold text-green-700">Manajemen Pupuk</h1>
        <p class="text-gray-500">Analisis dan kelola semua data pemakaian pupuk Anda.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        <div class="lg:col-span-1 flex flex-col gap-6 h-full">
            <a href="index.php?page=pupuk&action=riwayat" class="flex-1 block bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition-all h-full min-h-[140px]">
    <div class="flex items-center gap-5 h-full">
        <img src="/Projek/AgroKendali/Gambar/transaksii_pupk.png" alt="Riwayat" class="w-16 h-16">
        <div>
            <h3 class="text-xl font-bold text-gray-900">Riwayat Transaksi</h3>
            <p class="text-gray-600 mt-1">Lihat & catat semua pemakaian pupuk.</p>
        </div>
    </div>
</a>

<a href="index.php?page=pupuk&action=jenis" class="flex-1 block bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition-all h-full min-h-[140px]">
    <div class="flex items-center gap-5 h-full">
        <img src="/Projek/AgroKendali/Gambar/pupuk-removebg-preview.png" alt="Kelola" class="w-16 h-16">
        <div>
            <h3 class="text-xl font-bold text-gray-900">Kelola Jenis Pupuk</h3>
            <p class="text-gray-600 mt-1">Tambah atau perbarui data master pupuk.</p>
        </div>
    </div>
</a>

        </div>

        <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow-sm border h-ful">
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Grafik Total Pemakaian per Jenis Pupuk (Kg)</h3>
            <div class="h-80 w-full">
                 <canvas id="grafikPupuk"></canvas>
            </div>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('grafikPupuk');
    new Chart(ctx, {
        type: 'bar', // Tipe grafik batang
        data: {
            labels: <?= json_encode($grafikLabels) ?>,
            datasets: [{
                label: 'Total Pemakaian (Kg)',
                data: <?= json_encode($grafikData) ?>,
                backgroundColor: 'rgba(34, 197, 94, 0.5)', // Warna hijau transparan
                borderColor: 'rgba(22, 163, 74, 1)',      // Warna hijau solid
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: { y: { beginAtZero: true } }
        }
    });
</script>