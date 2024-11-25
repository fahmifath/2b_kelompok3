<!-- app/views/kelas/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>
    <form action="/kelas/update/<?php echo $kelas['id_kelas']; ?>" method="POST">

        <label for="kelas">Nama Kelas:</label>
        <input type="text" id="kelas" name="kelas" value="<?php echo $kelas['nama_kelas']; ?>" required>
        <br>

        <label for="waktu">Waktu:</label>
        <input type="datetime-local" id="waktu" name="waktu" value="<?php echo $kelas['waktu']; ?>" required>
        <br>

        <label for="pelatih">Pelatih:</label>
        <input type="text" id="pelatih" name="pelatih" value="<?php echo $kelas['pelatih']; ?>" required>
        <br>

        <label for="kuota">Email:</label>
        <input type="number" id="kuota" name="kuota" value="<?php echo $kelas['kuota']; ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
    <a href="/kelas/index">Back to List</a>
</body>
</html>
