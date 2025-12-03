<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Daftar Tim Olahraga</h2>
    <a href="index.php?page=teams&action=create" class="btn btn-primary mb-3">Tambah Tim</a>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tim</th>
                <th>Kota</th>
                <th>Kategori (Relation)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $teams->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['category_name'] ?></td>
                <td>
                    <a href="index.php?page=teams&action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="index.php?page=teams&action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="index.php">Kembali ke Menu Utama</a>
</body>
</html>