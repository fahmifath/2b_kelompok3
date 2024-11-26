<!-- app/views/trainer/create.php -->
<h2>Tambah Trainers Baru</h2>

<form action="/trainer/store" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama_trainer" id="nama" required><br><br>

    <label for="spesialisasi">Spesialisasi:</label>
    <input type="text" name="spesialisasi" id="spesialisasi" required><br><br>

    <label for="jadwal">Jadwal:</label>
    <input type="text" name="jadwal" id="jadwal" required><br><br>

    <button type="submit">Simpan</button>
</form>