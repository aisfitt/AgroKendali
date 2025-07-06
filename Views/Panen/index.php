<?php
require_once '../../Model/KoneksiDB.php';
// Fungsi untuk mengambil data panen
function getAllPanen($connection) {
    $query = "SELECT * FROM panen ORDER BY tanggal DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
// Ambil datanya
$dataPanen = getAllPanen($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Panen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="flex flex-col h-screen">
    
    <?php include '../Layouts/header.php'; ?>

    <div class="flex flex-1 overflow-hidden">
        <?php include '../Layouts/sidebar.php'; ?>

        <main class="flex-1 p-10">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold">Data Panen</h1>
                <button onclick="openForm()" class="bg-green-600 text-white font-bold px-5 py-2 rounded-lg">
                    + Tambah Data
                </button>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-3 text-left">Tanggal</th>
                            <th class="p-3 text-left">Berat (kg)</th>
                            <th class="p-3 text-left">Jumlah Tandan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataPanen as $panen): ?>
                        <tr class="border-b">
                            <td class="p-3"><?= htmlspecialchars($panen['tanggal']) ?></td>
                            <td class="p-3"><?= htmlspecialchars($panen['berat']) ?></td>
                            <td class="p-3"><?= htmlspecialchars($panen['jumlah_tandan']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <?php 
        // Panggil file form popup di sini
        include 'form_tambah.php'; 
    ?>

    <script>
        function openForm() { document.getElementById('popupForm').classList.remove('hidden'); }
        function closeForm() { document.getElementById('popupForm').classList.add('hidden'); }

        // Script untuk sidebar aktif
        const path = "panen"; 
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