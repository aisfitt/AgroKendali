<!-- Views/popUpAkun.php -->
<div id="popUpAkun" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-lg">Akun Pengguna</h2>
            <button onclick="closePopUp()" class="text-xl">&times;</button>
        </div>
        <p>Nama: <?= $_SESSION['user_nama']; ?></p>
        <p>Email: <?= $_SESSION['user_email']; ?></p>
        <a href="index.php?page=logout" class="bg-red-500 text-white p-2 rounded">Logout</a>
    </div>
</div>

<script>
    // Fungsi untuk membuka dan menutup pop-up
    function openPopUp() {
        document.getElementById('popUpAkun').classList.remove('hidden');
    }
    
    function closePopUp() {
        document.getElementById('popUpAkun').classList.add('hidden');
    }
</script>
