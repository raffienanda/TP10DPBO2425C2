<h3>Daftar Anggota</h3>
<a href="index.php?page=members&action=create">Tambah Anggota Baru</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($members as $member): ?>
    <tr>
        <td><?= $member->id ?></td>
        <td><?= $member->name ?></td>
        <td><?= $member->email ?></td>
        <td><?= $member->phone ?></td>
        <td>
            <a href="index.php?page=members&action=edit&id=<?= $member->id ?>">Edit</a> | 
            <a href="index.php?page=members&action=delete&id=<?= $member->id ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>