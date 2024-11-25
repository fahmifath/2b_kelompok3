<!-- app/views/user/create.php -->
<h2>Tambah Pengguna Baru</h2>
<form action="/user/store" method="POST">
    <label for="name">Nama Alat:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Jenis Alat:</label>
    <input type="type" name="type" id="type" required>
    <label for="type">Kondisi:</label>
    <input type="type" name="type" id="type" required>
    <button type="submit">Simpan</button>
</form>
