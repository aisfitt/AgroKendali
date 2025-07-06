<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body>

  <header class="bg-white px-8 py-4 flex justify-between items-center border-b border-gray-200">
    <a href="dashboard.php" class="flex items-center gap-3 cursor-pointer">
        <i class="fas fa-leaf text-green-500 text-3xl"></i>
        <span class="text-2xl font-bold text-gray-800">AgroKendali</span>
    </a>
    <div class="flex items-center gap-4">
        <span class="font-semibold text-gray-700 hidden sm:block">Nama Pengguna</span>
        <button class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center">
            <i class="fas fa-user text-gray-600"></i>
        </button>
    </div>
</header>
  </body>
</html>