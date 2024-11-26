<!-- app/views/user/create.php -->
<h2>Tambah Alat Baru</h2>
<form action="/equipment/store" method="POST">
    <label for="name">Nama Alat:</label>
    <input type="text" name="nama_alat" id="nama_alat" required>
    <br>
    <label for="jenis_alat">Jenis Alat:</label>
    <input type="text" name="jenis_alat" id="jenis_alat" required>
    <br>
    <label for="kondisi">Kondisi:</label>
    <input type="text" name="kondisi" id="kondisi" required><br>
    <button type="submit">Simpan</button>
</form>
<a href="/workout_class/index">Back to List</a>
