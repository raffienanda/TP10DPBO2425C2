<!DOCTYPE html>
<html>
<head>
    <title>Form Tim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2><?= isset($data['team']) ? 'Edit' : 'Tambah' ?> Tim</h2>
    
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nama Tim</label>
            <input type="text" name="name" class="form-control" value="<?= $data['team']['name'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Kota Asal</label>
            <input type="text" name="city" class="form-control" value="<?= $data['team']['city'] ?? '' ?>" required>
        </div>
        <div class="mb-3">
            <label>Kategori Olahraga</label>
            <select name="category_id" class="form-control">
                <?php while($cat = $categories->fetch_assoc()): ?>
                    <option value="<?= $cat['id'] ?>" 
                        <?= (isset($data['team']['category_id']) && $data['team']['category_id'] == $cat['id']) ? 'selected' : '' ?>>
                        <?= $cat['name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?page=teams" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>