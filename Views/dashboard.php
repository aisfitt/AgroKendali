
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AgroKendali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
      body { 
        font-family: 'Inter', sans-serif; 
        background-color: #f8fafc;
      }
    </style>
</head>
<body class="flex flex-col h-screen">

    <?php include 'Layouts/header.php'; ?>

    <div class="flex flex-1 overflow-hidden">
        
        <?php include 'Layouts/sidebar.php'; ?>

        <main class="flex-1 p-10 overflow-y-auto">
            <h1 class="text-3xl font-bold text-gray-800">Dashboard </h1>
            <p class="mt-1 text-gray-500 mb-8"></p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">

                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-base font-medium text-gray-500">Jumlah Kebun</p>
                            <p class="text-5xl font-bold text-gray-900 mt-2">12</p>
                        </div>
                        <div class="bg-green-100 p-5 rounded-lg">
                            <i class="fas fa-seedling text-3xl text-green-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-base font-medium text-gray-500">Kondisi Tanah</p>
                            <p class="text-5xl font-bold text-gray-900 mt-2">8</p>
                            <p class="text-sm text-gray-400 mt-1">Terdata</p>
                        </div>
                        <div class="bg-blue-100 p-5 rounded-lg">
                            <i class="fas fa-layer-group text-3xl text-blue-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-base font-medium text-gray-500">Total Panen</p>
                            <p class="text-5xl font-bold text-gray-900 mt-2">1.2 <span class="text-3xl font-semibold">Ton</span></p>
                        </div>
                         <div class="bg-yellow-100 p-5 rounded-lg">
                            <i class="fas fa-tractor text-3xl text-yellow-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-base font-medium text-gray-500">Jenis Pupuk</p>
                            <p class="text-5xl font-bold text-gray-900 mt-2">5</p>
                        </div>
                        <div class="bg-purple-100 p-5 rounded-lg">
                            <i class="fas fa-vial text-3xl text-purple-600"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-base font-medium text-gray-500">Laporan Hama</p>
                            <p class="text-5xl font-bold text-gray-900 mt-2">3</p>
                        </div>
                        <div class="bg-red-100 p-5 rounded-lg">
                            <i class="fas fa-bug text-3xl text-red-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Script untuk menandai menu sidebar yang aktif
        const path = "dashboard"; 
        const menuLinks = document.querySelectorAll(".menu-link");

        menuLinks.forEach(link => {
            if (link.dataset.page === path) {
                link.classList.add("bg-green-500", "text-white");
                link.classList.remove("text-gray-700");
            }
        });
    </script>
</body>
</html>