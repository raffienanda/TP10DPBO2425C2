<h3>Buat Jadwal Latihan Baru</h3>
<form method="POST" action="index.php?page=sessions&action=store">
    
    <label>Pilih Anggota:</label><br>
    <select name="member_id" required>
        <option value="">-- Pilih Member --</option>
        <?php foreach ($membersList as $m): ?>
            <option value="<?= $m->id ?>"><?= $m->name ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Pilih Pelatih:</label><br>
    <select name="trainer_id" required>
        <option value="">-- Pilih Pelatih --</option>
        <?php foreach ($trainersList as $t): ?>
            <option value="<?= $t->id ?>"><?= $t->name ?> - <?= $t->specialization ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Waktu Latihan:</label><br>
    <input type="datetime-local" name="session_date" required><br><br>

    <label>Catatan:</label><br>
    <textarea name="notes"></textarea><br><br>
    
    <button type="submit">Buat Jadwal</button>
</form>