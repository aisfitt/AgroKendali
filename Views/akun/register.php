<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-4">Buat Akun Baru</h2>
            <form action="index.php?page=register&action=process" method="POST">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="mt-1 w-full p-3 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input type="email" id="email" name="email" class="mt-1 w-full p-3 border rounded-md" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 w-full p-3 border rounded-md" required>
                </div>
                <button type="submit" class="w-full bg-green-500 text-white font-bold py-3 rounded-lg hover:bg-green-600">
                    Daftar
                </button>
            </form>
            <p class="text-center text-sm text-gray-600 mt-6">
                Sudah punya akun? 
                <a href="index.php?page=login" class="font-medium text-green-600 hover:text-green-500">Login di sini</a>
            </p>
        </div>
    </div>
</body>
</html>