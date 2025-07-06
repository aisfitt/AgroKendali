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

  <aside class="w-64 bg-white p-6 flex-col border-r border-gray-200 hidden lg:flex">
    <h2 class="text-xs text-gray-500 uppercase font-semibold tracking-wider mb-4 px-2">Menu</h2>
    <nav class="flex flex-col space-y-2">
        <a href="/dashboard.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="dashboard">
            <i class="fas fa-home fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Dashboard</span>
        </a>
        <a href="../Views/Kebun/index.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="kebun">
            <i class="fas fa-seedling fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Kebun</span>
        </a>
        <a href="../Views/kondisi/index.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="kondisi">
            <i class="fas fa-layer-group fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Kondisi Lahan</span>
        </a>
        <a href="../Views/Panen/index.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="panen">
            <i class="fas fa-tractor fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Panen</span>
        </a>
        <a href="../Views/Pupuk/index.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="pupuk">
            <i class="fas fa-vial fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Pupuk</span>
        </a>
        <a href="../Views/Hama/index.php" class="menu-link flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors duration-200" data-page="hama">
            <i class="fas fa-bug fa-fw w-5 mr-3"></i>
            <span class="font-semibold">Hama</span>
        </a>
    </nav>
</aside>

  <script>
  const path = "<?php 
    // Ambil nama file aktif
    $current = basename($_SERVER['PHP_SELF']);
    // Tentukan path aktif berdasar file
    if ($current === 'dashboard.php') echo 'dashboard';
    else if ($current === 'index.php' && strpos($_SERVER['SCRIPT_FILENAME'], 'Kebun')) echo 'kebun';
    else if ($current === 'index.php' && strpos($_SERVER['SCRIPT_FILENAME'], 'kondisi')) echo 'kondisi';
    else if ($current === 'index.php' && strpos($_SERVER['SCRIPT_FILENAME'], 'Panen')) echo 'panen';
    else if ($current === 'index.php' && strpos($_SERVER['SCRIPT_FILENAME'], 'Pupuk')) echo 'pupuk';
    else if ($current === 'index.php' && strpos($_SERVER['SCRIPT_FILENAME'], 'Hama')) echo 'hama';
    else echo '';
  ?>";

  const menuLinks = document.querySelectorAll(".menu-link");

  menuLinks.forEach(link => {
    link.classList.remove("bg-green-600", "text-white", "font-semibold");
    link.classList.add("text-gray-700");

    if (link.dataset.page === path) {
      link.classList.add("bg-green-600", "text-white", "font-semibold");
      link.classList.remove("text-gray-700");
    }
  });
</script>

  </body>
</html>