<h3><?= isset($member) ? 'Edit' : 'Tambah' ?> Anggota</h3>
<form method="POST" action="index.php?page=members&action=store">
    <input type="hidden" name="id" value="<?= isset($member) ? $member->id : '' ?>">
    
    <label>Nama:</label><br>
    <input type="text" name="name" value="<?= isset($member) ? $member->name : '' ?>" required><br><br>
    
    <label>Email:</label><br>
    <input type="email" name="email" value="<?= isset($member) ? $member->email : '' ?>"><br><br>
    
    <label>No HP:</label><br>
    <input type="text" name="phone" value="<?= isset($member) ? $member->phone : '' ?>"><br><br>
    
    <button type="submit">Simpan</button>
</form>