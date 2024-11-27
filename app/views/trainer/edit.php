<!-- app/views/trainer/edit.php -->
    <h2>Edit User</h2>
    <form action="/trainer/update/<?php echo $trainers['id_trainer']; ?>" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="nama_trainer" value="<?php echo $trainers['nama_trainer']; ?>" required>
        <br>
        <label for="spesialisasi">Spesialisasi:</label>
        <input type="text" id="spesialisasi" name="spesialisasi" value="<?php echo $trainers['spesialisasi']; ?>" required>
        <br>
        <label for="jadwal">Jadwal:</label>
        <input type="text" id="jadwal" name="jadwal" value="<?php echo $trainers['jadwal']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/trainer/index">Back to List</a>