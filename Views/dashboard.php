<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AgroKendali Sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    rel="stylesheet"
  />
</head>
<body class="flex">

  <!-- Sidebar -->
  <aside class="w-64 min-h-screen bg-white border-r-2 border-green-500 p-6">
    <h1 class="text-2xl font-bold text-green-600 mb-8 flex items-center gap-2">
      <span>🌾</span> AgroKendali
    </h1>

    <div>
      <h2 class="text-xs text-gray-500 uppercase font-bold mb-4">Menu</h2>
      <nav class="flex flex-col space-y-2">
        <!-- Aktifkan menu dengan bg dan font berbeda -->
        <a href="#" class="flex items-center bg-green-100 text-green-700 font-semibold px-3 py-2 rounded-md">
          <i class="fas fa-home w-5 mr-3"></i> Dashboard
        </a>
        <a href="#" class="flex items-center text-green-600 hover:bg-green-100 px-3 py-2 rounded-md transition">
          <i class="fas fa-seedling w-5 mr-3"></i> Kebun
        </a>
        <a href="#" class="flex items-center text-green-600 hover:bg-green-100 px-3 py-2 rounded-md transition">
          <i class="fas fa-water w-5 mr-3"></i> Kondisi Lahan
        </a>
        <a href="#" class="flex items-center text-green-600 hover:bg-green-100 px-3 py-2 rounded-md transition">
          <i class="fas fa-tractor w-5 mr-3"></i> Panen
        </a>
        <a href="#" class="flex items-center text-green-600 hover:bg-green-100 px-3 py-2 rounded-md transition">
          <i class="fas fa-vial w-5 mr-3"></i> Pupuk
        </a>
        <a href="#" class="flex items-center text-green-600 hover:bg-green-100 px-3 py-2 rounded-md transition">
          <i class="fas fa-bug w-5 mr-3"></i> Hama
        </a>
      </nav>
    </div>
  </aside>
</body>
</html>
