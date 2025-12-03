<h3>Jadwal Latihan</h3>
<a href="index.php?page=sessions&action=create">Buat Jadwal Baru</a>
<table>
    <tr>
        <th>Tanggal</th>
        <th>Nama Anggota</th>
        <th>Nama Pelatih</th>
        <th>Catatan</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($sessions)): ?>
        <?php foreach ($sessions as $s): ?>
        <tr>
            <td><?= date('d M Y H:i', strtotime($s->session_date)) ?></td>
            <td><?= $s->member_name ?></td>
            <td><?= $s->trainer_name ?></td>
            <td><?= $s->notes ?></td>
            <td>
                <a href="index.php?page=sessions&action=edit&id=<?= $s->id ?>">Edit</a> | 
                <a href="index.php?page=sessions&action=delete&id=<?= $s->id ?>" onclick="return confirm('Yakin hapus jadwal ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" style="text-align:center;">Belum ada jadwal latihan.</td>
        </tr>
    <?php endif; ?>
</table>