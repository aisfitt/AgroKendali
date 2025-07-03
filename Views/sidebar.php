<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgroKendali Sidebar</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
      width: 260px;
      background-color: #ffffff;
      border-right: 2px solid #00b894;
      height: 100vh;
      padding: 20px;
      box-sizing: border-box;
    }

    .logo {
      font-size: 22px;
      font-weight: bold;
      color: #00b894;
      margin-bottom: 30px;
    }

    .menu-section {
      margin-bottom: 25px;
    }

    .menu-title {
      font-size: 11px;
      font-weight: bold;
      color: #888;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .menu-item {
      display: flex;
      align-items: center;
      padding: 10px 8px;
      color: #00b894;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      transition: background 0.2s ease;
      border-radius: 8px;
    }

    .menu-item:hover {
      background-color: #e0f7f1;
    }

    .menu-item i {
      margin-right: 12px;
      width: 20px;
      text-align: center;
    }

  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>

  <div class="sidebar">
    <div class="logo">🌾 AgroKendali</div>

    <div class="menu-section">
      <div class="menu-title">Fitur Utama</div>
      <div class="menu-item"><i class="fas fa-seedling"></i> Kebun</div>
      <div class="menu-item"><i class="fas fa-water"></i> Kondisi Lahan</div>
      <div class="menu-item"><i class="fas fa-tractor"></i> Panen</div>
      <div class="menu-item"><i class="fas fa-vial"></i> Pupuk</div>
      <div class="menu-item"><i class="fas fa-bug"></i> Hama</div>
    </div>
  </div>

</body>
</html>
