<!-- Views/Kebun/index.php -->

<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'sukses'): ?>
        <p class="text-green-500">Kebun berhasil dihapus!</p>
    <?php elseif ($_GET['status'] == 'gagal'): ?>
        <p class="text-red-500">Terjadi kesalahan saat menghapus kebun.</p>
    <?php elseif ($_GET['status'] == 'error'): ?>
        <p class="text-red-500">ID kebun tidak ditemukan.</p>
    <?php endif; ?>
<?php endif; ?>

<!-- Daftar Kebun -->
<table>
    <!-- Tabel kebun -->
    <tbody>
        <?php foreach ($semuaKebun as $kebun): ?>
        <tr>
            <td><?= htmlspecialchars($kebun['nama']) ?></td>
            <td>
                <a href="hapusKebun.php?id=<?= $kebun['id'] ?>" class="text-red-500">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
