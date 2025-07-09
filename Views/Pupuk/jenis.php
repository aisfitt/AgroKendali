<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jenis Pupuk - AgroKendali</title>
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

    <div class="flex flex-1 overflow-hidden">
        <main class="flex-1 p-10 overflow-y-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Kelola Jenis Pupuk</h1>
        <a href="index.php?page=pupuk" class="bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-lg"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
    </div>
    <div class="bg-white p-8 rounded-xl shadow-sm border">
        </div>
</main>
    </div>

    <script>
        // Mengubah 'path' agar link "Pupuk" di sidebar menjadi aktif
        const path = "pupuk"; 
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