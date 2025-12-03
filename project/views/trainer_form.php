<h3><?= isset($trainer) ? 'Edit' : 'Tambah' ?> Pelatih</h3>
<form method="POST" action="index.php?page=trainers&action=store">
    <input type="hidden" name="id" value="<?= isset($trainer) ? $trainer->id : '' ?>">
    
    <label>Nama Pelatih:</label><br>
    <input type="text" name="name" value="<?= isset($trainer) ? $trainer->name : '' ?>" required><br><br>
    
    <label>Spesialisasi:</label><br>
    <select name="specialization">
        <option value="Bodybuilding" <?= (isset($trainer) && $trainer->specialization == 'Bodybuilding') ? 'selected' : '' ?>>Bodybuilding</option>
        <option value="Cardio" <?= (isset($trainer) && $trainer->specialization == 'Cardio') ? 'selected' : '' ?>>Cardio</option>
        <option value="Yoga" <?= (isset($trainer) && $trainer->specialization == 'Yoga') ? 'selected' : '' ?>>Yoga</option>
        <option value="Crossfit" <?= (isset($trainer) && $trainer->specialization == 'Crossfit') ? 'selected' : '' ?>>Crossfit</option>
    </select><br><br>
    
    <button type="submit">Simpan</button>
</form>