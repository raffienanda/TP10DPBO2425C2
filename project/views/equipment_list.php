<h3>Daftar Alat Gym</h3>
<a href="index.php?page=equipment&action=create">Tambah Alat Baru</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Alat</th>
        <th>Kondisi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($equipmentList as $e): ?>
    <tr>
        <td><?= $e->id ?></td>
        <td><?= $e->name ?></td>
        <td><?= $e->condition_status ?></td>
        <td>
            <a href="index.php?page=equipment&action=edit&id=<?= $e->id ?>">Edit</a> | 
            <a href="index.php?page=equipment&action=delete&id=<?= $e->id ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>