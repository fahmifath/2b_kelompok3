<!-- app/views/kelas/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>
    <form action="/WorkoutClass/update/<?php echo $kelas['id_workout_class']; ?>" method="POST">
    <table>
        <tr>
            <td><label for="nama_kelas">Nama Kelas:</label></td>
            <td><input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas['nama_kelas']; ?>" required></td>
        </tr>

        <tr>
            <td><label for="waktu">Waktu:</label></td>
            <td><input type="datetime-local" id="waktu" name="waktu" value="<?php echo $kelas['waktu']; ?>" required></td>
        </tr>

        <tr>
            <td><label for="pelatih">Pelatih:</label></td>
            <td><input type="text" id="pelatih" name="pelatih" value="<?php echo $kelas['pelatih']; ?>" required></td>
        </tr>

        <tr>
            <td><label for="kuota">Kuota:</label></td>
            <td><input type="number" id="kuota" name="kuota" value="<?php echo $kelas['kuota'];?>" required></td>
        </tr>

        <tr>
            <td><input type="hidden" name="id_kelas" value="<?php echo $kelas['id_workout_class']; ?>"></td>
            <td><button type="submit">Update</button></td>
        </tr>
    </table>
    </form>
    <a href="/WorkoutClass/index">Back to List</a>
</body>
</html>