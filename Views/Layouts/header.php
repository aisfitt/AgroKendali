<?php
// Memastikan session dimulai untuk mengambil nama pengguna
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Panggil BASE_URL jika belum ada, sesuaikan path jika perlu
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/../Config/KoneksiDB.php';
}
?>
<header class="bg-white px-8 py-4 flex justify-between items-center shadow-sm sticky top-0 z-20">
    <a href="<?php echo BASE_URL; ?>/index.php?page=dashboard" class="flex items-center gap-3 cursor-pointer">
        <i class="fas fa-leaf text-green-500 text-3xl"></i>
        <span class="text-2xl font-bold text-gray-800">AgroKendali</span>
    </a>

    <div class="relative group">
        
        <div class="flex items-center gap-4 cursor-pointer p-2">
            <span class="font-medium"><?= htmlspecialchars($_SESSION['user_name'] ?? 'Pengguna') ?></span>
            <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center">
                <i class="fas fa-user text-gray-500"></i>
            </div>
        </div>

        <div class="absolute top-full right-0 mt-2 w-56 bg-white rounded-md shadow-lg border py-1 hidden group-hover:block z-30">
            <div class="px-4 py-3 border-b">
                <p class="text-sm font-semibold text-gray-800"><?= htmlspecialchars($_SESSION['user_name'] ?? 'Pengguna') ?></p>
                <p class="text-xs text-gray-500">Status: Aktif</p>
            </div>
            <a href="#" class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="fas fa-user-circle fa-fw w-5 mr-2 text-gray-500"></i>
                Informasi Akun
            </a>
            <a href="<?php echo BASE_URL; ?>/logout.php" class="flex items-center w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                <i class="fas fa-sign-out-alt fa-fw w-5 mr-2"></i>
                Logout
            </a>
        </div>
        
    </div>
</header>