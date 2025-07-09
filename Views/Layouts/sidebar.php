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
<?php
// Ambil nama halaman saat ini dari URL.
$currentPage = $_GET['page'] ?? 'dashboard';
?>

<aside class="w-64 bg-white p-6 flex-col border-r border-gray-200 hidden lg:flex">    
    <nav class=" flex flex-col space-y-2">
        <div class="px-1 pb-2">
        <h2 class="text-xs text-gray-500 uppercase font-semibold tracking-wider">MENU</h2>
        </div>    

        <a href="index.php?page=dashboard" 
           class="flex items-center px-4 py-3 font-medium transition-colors
                  <?= ($currentPage === 'dashboard') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 hover:text-green-600 rounded-lg' ?>">
            <i class="fas fa-home fa-fw mr-3"></i>
            <span class="font-semibold">Dashboard</span>
        </a>

        <div class="px-2 pb-4 border-b">
        <h2 class="text-xs text-gray-500 uppercase font-semibold tracking-wider"></h2>
        </div>
    
        <nav class="flex flex-col space-y-2">
        <a href="index.php?page=kebun" 
           class="flex items-center px-4 py-3 ... <?= ($currentPage === 'kebun') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 ...' ?>">
            <i class="fas fa-seedling mr-3"></i>
            <span class="font-semibold">Kebun</span>
        </a>
        </nav>

        <a href="index.php?page=kondisi-lahan"
           class="flex items-center px-4 py-3 font-medium transition-colors
                  <?= ($currentPage === 'kondisi-lahan') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 hover:text-green-600 rounded-lg' ?>">
            <i class="fas fa-layer-group fa-fw mr-3"></i>
            <span class="font-semibold">Kondisi Lahan</span>
        </a>
        
        <a href="index.php?page=panen"
           class="flex items-center px-4 py-3 font-medium transition-colors
                  <?= ($currentPage === 'panen') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 hover:text-green-600 rounded-lg' ?>">
            <i class="fas fa-tractor fa-fw mr-3"></i>
            <span class="font-semibold">Panen</span>
        </a>
        
        <a href="index.php?page=pupuk"
           class="flex items-center px-4 py-3 font-medium transition-colors
                  <?= ($currentPage === 'pupuk') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 hover:text-green-600 rounded-lg' ?>">
            <i class="fas fa-vial fa-fw mr-3"></i>
            <span class="font-semibold">Pupuk</span>
        </a>
        
        <a href="index.php?page=hama"
           class="flex items-center px-4 py-3 font-medium transition-colors
                  <?= ($currentPage === 'hama') ? 'bg-green-600 text-white rounded-lg' : 'text-gray-900 hover:bg-green-100 hover:text-green-600 rounded-lg' ?>">
            <i class="fas fa-bug fa-fw mr-3"></i>
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