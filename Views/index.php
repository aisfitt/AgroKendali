<!-- Views/Kebun/index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kebun</title>
</head>
<body>
    <h1>Daftar Kebun</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Kebun</th>
            <th>Luas</th>
            <th>Jumlah Pohon</th>
            <th>Jenis Tanah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($semuaKebun as $kebun): ?>
            <tr>
                <td><?= $kebun['id'] ?></td>
                <td><?= htmlspecialchars($kebun['nama']) ?></td>
                <td><?= htmlspecialchars($kebun['size']) ?></td>
                <td><?= htmlspecialchars($kebun['jumlah_pohon']) ?></td>
                <td><?= htmlspecialchars($kebun['tipe_tanah']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $kebun['id'] ?>">Edit</a>
                    <a href="hapus.php?id=<?= $kebun['id'] ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
