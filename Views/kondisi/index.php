<!-- Views/LaporanKondisi/index.php -->

<div>
    <h2>Laporan Kondisi Kebun</h2>
    <table>
        <thead>
            <tr>
                <th>Kelembapan</th>
                <th>pH</th>
                <th>Area ID</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataLaporan as $laporan): ?>
                <tr>
                    <td><?= htmlspecialchars($laporan['kelembapan']) ?></td>
                    <td><?= htmlspecialchars($laporan['ph']) ?></td>
                    <td><?= htmlspecialchars($laporan['area_id']) ?></td>
                    <td><?= htmlspecialchars($laporan['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
