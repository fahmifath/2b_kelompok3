<!-- app/views/kelas/create.php -->
<h2>Tambah Kelas Baru</h2>
<form action="/kelas/store" method="POST">

    <input type="hidden" name="id_kelas" id="id_kelas">

    <label for="kelas">Nama Kelas:</label>
    <input type="text" name="kelas" id="kelas" required>

    <label for="waktu">Waktu:</label>
    <input type="datetime-local" name="waktu" id="waktu" required>
    
    <label for="pelatih">Pelatih:</label>
    <input type="text" name="pelatih" id="pelatih" required>

    <label for="kuota">Kuota:</label>
    <input type="number" name="kuota" id="kuota" required>

    <button type="submit">Simpan</button>
</form>
