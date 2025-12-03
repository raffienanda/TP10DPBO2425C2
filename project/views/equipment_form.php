<h3><?= isset($equipment) ? 'Edit' : 'Tambah' ?> Alat</h3>
<form method="POST" action="index.php?page=equipment&action=store">
    <input type="hidden" name="id" value="<?= isset($equipment) ? $equipment->id : '' ?>">
    
    <label>Nama Alat:</label><br>
    <input type="text" name="name" value="<?= isset($equipment) ? $equipment->name : '' ?>" required><br><br>
    
    <label>Kondisi:</label><br>
    <select name="condition_status">
        <option value="Baik" <?= (isset($equipment) && $equipment->condition_status == 'Baik') ? 'selected' : '' ?>>Baik</option>
        <option value="Perbaikan" <?= (isset($equipment) && $equipment->condition_status == 'Perbaikan') ? 'selected' : '' ?>>Perbaikan</option>
        <option value="Rusak" <?= (isset($equipment) && $equipment->condition_status == 'Rusak') ? 'selected' : '' ?>>Rusak</option>
    </select><br><br>
    
    <button type="submit">Simpan</button>
</form>