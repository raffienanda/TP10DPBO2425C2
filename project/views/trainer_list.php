<h3>Daftar Pelatih</h3>
<a href="index.php?page=trainers&action=create">Tambah Pelatih Baru</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Spesialisasi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($trainers as $t): ?>
    <tr>
        <td><?= $t->id ?></td>
        <td><?= $t->name ?></td>
        <td><?= $t->specialization ?></td>
        <td>
            <a href="index.php?page=trainers&action=edit&id=<?= $t->id ?>">Edit</a> | 
            <a href="index.php?page=trainers&action=delete&id=<?= $t->id ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>