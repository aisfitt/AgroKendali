<main class="flex-1 p-10  bg-[#f0f7f4] min-h-screen">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Ubah Password</h1>
        <a href="index.php?page=informasi-akun" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg">
            <i class="fas fa-arrow-left mr-2"></i>Kembali ke Informasi Akun
        </a>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm border max-w-lg mx-auto">
        
        <?php if (isset($_GET['status'])): ?>
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg">
                <?php
                    if ($_GET['status'] == 'gagal_kosong') echo 'Semua kolom wajib diisi.';
                    if ($_GET['status'] == 'gagal_tidak_cocok') echo 'Password baru dan konfirmasi tidak cocok.';
                    if ($_GET['status'] == 'gagal_password_lama') echo 'Password lama yang Anda masukkan salah.';
                ?>
            </div>
        <?php endif; ?>

        <form action="index.php?page=ubah-password&action=process" method="POST" class="space-y-6">
            <div>
                <label for="password_lama" class="block text-sm font-medium">Password Lama</label>
                <div class="relative mt-1">
                    <input type="password" id="password_lama" name="password_lama" required class="w-full p-3 border rounded-md">
                    <i class="fas fa-eye absolute top-1/2 right-4 -translate-y-1/2 cursor-pointer text-gray-400 toggle-password"></i>
                </div>
            </div>
            <div>
                <label for="password_baru" class="block text-sm font-medium">Password Baru</label>
                <div class="relative mt-1">
                    <input type="password" id="password_baru" name="password_baru" required class="w-full p-3 border rounded-md">
                    <i class="fas fa-eye absolute top-1/2 right-4 -translate-y-1/2 cursor-pointer text-gray-400 toggle-password"></i>
                </div>
            </div>
            <div>
                <label for="konfirmasi_password" class="block text-sm font-medium">Konfirmasi Password Baru</label>
                <div class="relative mt-1">
                    <input type="password" id="konfirmasi_password" name="konfirmasi_password" required class="w-full p-3 border rounded-md">
                    <i class="fas fa-eye absolute top-1/2 right-4 -translate-y-1/2 cursor-pointer text-gray-400 toggle-password"></i>
                </div>
            </div>
            <div class="text-right pt-4 border-t">
                <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</main>

<script>
    document.querySelectorAll('.toggle-password').forEach(item => {
        item.addEventListener('click', event => {
            const passwordInput = event.target.previousElementSibling;
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            event.target.classList.toggle('fa-eye');
            event.target.classList.toggle('fa-eye-slash');
        });
    });
</script>