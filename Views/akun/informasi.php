<main class="flex-1 p-10 overflow-y-auto  bg-[#f0f7f4] min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Informasi Akun</h1>
        <a href="index.php?page=dashboard" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Dashboard
        </a>
    </div>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses_password'): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md">
            Password berhasil diubah!
        </div>
    <?php endif; ?>

    <div class="bg-white p-8 rounded-xl shadow-sm border w-full max-w-lg mx-auto">
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-500">Nama Lengkap</label>
                <p class="mt-1 text-lg font-semibold text-gray-900"><?= htmlspecialchars($user['nama'] ?? 'Tidak ditemukan') ?></p>
            </div>
            <div class="border-t my-4"></div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Alamat Email</label>
                <p class="mt-1 text-lg text-gray-900"><?= htmlspecialchars($user['email'] ?? 'Tidak ditemukan') ?></p>
            </div>
            <div class="border-t my-4"></div>
            <div>
                <label class="block text-sm font-medium text-gray-500">Password</label>
                <p class="mt-1 text-lg text-gray-900">********</p>
            </div>
            <div class="text-right pt-6">
                <a href="index.php?page=ubah-password" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600">
                    Ubah Password
                </a>
            </div>
        </div>
    </div>
</main>