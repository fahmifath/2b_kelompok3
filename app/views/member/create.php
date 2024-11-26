<!-- app/views/member/create.php -->
<h2>Tambah Member Baru</h2>
<form action="/member/store" method="POST">
    <label for="name">Nama member:</label>
    <input type="text" name="nama_member" id="name" required>
    <label for="usia">Usia:</label>
    <input type="text" name="usia" id="usia" required>
    <label for="jenis_kelamin">Jenis kelamin:</label>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
    <label for="paket_langganan">Paket langganan:</label>
    <input type="text" name="paket_langganan" id="paket_langganan" required>
    <button type="submit">Simpan</button>
</form>
