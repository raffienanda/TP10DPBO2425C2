<h3><?= isset($session) ? 'Edit' : 'Buat' ?> Jadwal Latihan</h3>
<form method="POST" action="index.php?page=sessions&action=store">
    <input type="hidden" name="id" value="<?= isset($session) ? $session->id : '' ?>">

    <label>Pilih Anggota:</label><br>
    <select name="member_id" required>
        <option value="">-- Pilih Member --</option>
        <?php foreach ($membersList as $m): ?>
            <?php $selected = (isset($session) && $session->member_id == $m->id) ? 'selected' : ''; ?>
            <option value="<?= $m->id ?>" <?= $selected ?>><?= $m->name ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Pilih Pelatih:</label><br>
    <select name="trainer_id" required>
        <option value="">-- Pilih Pelatih --</option>
        <?php foreach ($trainersList as $t): ?>
            <?php $selected = (isset($session) && $session->trainer_id == $t->id) ? 'selected' : ''; ?>
            <option value="<?= $t->id ?>" <?= $selected ?>><?= $t->name ?> - <?= $t->specialization ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Waktu Latihan:</label><br>
    <?php 
        $sDate = isset($session) ? date('Y-m-d\TH:i', strtotime($session->session_date)) : '';
    ?>
    <input type="datetime-local" name="session_date" value="<?= $sDate ?>" required><br><br>

    <label>Catatan:</label><br>
    <textarea name="notes"><?= isset($session) ? $session->notes : '' ?></textarea><br><br>
    
    <button type="submit">Simpan Jadwal</button>
</form>