<!-- app/views/kelas/create.php -->
<h2>Tambah Kelas Baru</h2>
<form action="/WorkoutClass/store" method="POST">
    <table>
        <tr>
            <td><label for="nama_kelas">Nama Kelas:</label></td>
            <td><input type="text" name="nama_kelas" id="nama_kelas" required></td>
        </tr>
        <tr>
            <td><label for="waktu">Waktu:</label></td>
            <td><input type="datetime-local" name="waktu" id="waktu" required></td>
        </tr>
        <tr>
            <td><label for="pelatih">Pelatih:</label></td>
            <td><input type="text" name="pelatih" id="pelatih" required></td>
        </tr>
        <tr>
            <td><label for="kuota">Kuota:</label></td>
            <td><input type="number" name="kuota" id="kuota" required></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id_kelas" id="id_kelas"></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>
