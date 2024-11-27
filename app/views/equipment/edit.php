<!-- app/views/user/edit.php -->
    <h2>Edit Equipment</h2>
    <form action="/equipment/update/<?php echo $equipments['id_equipment']; ?>" method="POST">
        <label for="nama_alat">Nama Alat:</label>
        <input type="text" id="nama_alat" name="nama_alat" value="<?php echo $equipments['nama_alat']; ?>" required>
        <input type="hidden" id="id_equipment" name="id_equipment" value="<?php echo $equipments['id_equipment']; ?>" required>
        <br>
        <label for="jenis_alat">Jenis Alat:</label>
        <input type="text" id="jenis_alat" name="jenis_alat" value="<?php echo $equipments['jenis_alat']; ?>" required>
        <br>
        <label for="kondisi">Kondisi:</label>
        <input type="text" id="kondisi" name="kondisi" value="<?php echo $equipments['kondisi']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/equipment/index">Back to List</a>
</body>
</html>