<!DOCTYPE html>
<lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-4">Login ke Akun Anda</h2>
            <?php if(isset($_GET['error'])): ?>
                <p class="text-red-500 text-center mb-4">Email atau password salah!</p>
            <?php endif; ?>
            <?php if(isset($_GET['status']) && $_GET['status'] === 'registered'): ?>
                <p class="text-green-500 text-center mb-4">Pendaftaran berhasil! Silakan login.</p>
            <?php endif; ?>

            <form action="index.php?page=login&action=process" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input type="email" id="email" name="email" class="mt-1 w-full p-3 border rounded-md" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 w-full p-3 border rounded-md" required>
                </div>
                <button type="submit" class="w-full bg-green-500 text-white font-bold py-3 rounded-lg hover:bg-green-600">
                    Login
                </button>
            </form>
            <p class="text-center text-sm text-gray-600 mt-6">
                Belum punya akun? 
                <a href="index.php?page=register" class="font-medium text-green-600 hover:text-green-500">Daftar di sini</a>
            </p>
        </div>
    </div>
</body>
</html>