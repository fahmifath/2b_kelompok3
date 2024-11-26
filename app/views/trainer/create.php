<!-- app/views/trainer/create.php -->
<h2>Tambah Trainers Baru</h2>
<form action="/user/store" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="name" id="name" required><br><br>

    <label for="spesialisasi">Spesialisasi:</label>
    <input type="spesialisasi" name="spesialisasi" id="spesialisasi" required><br><br>

    <label for="jadwal">Jadwal:</label>
    <input type="jadwal" name="jadwal" id="jadwal" required><br><br>

    <button type="submit">Simpan</button>
</form>
