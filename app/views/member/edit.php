<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Member</title>
</head>
<body>
    <h2>Edit Member</h2>
    <form action="/member/update/<?php echo $member['id_member']; ?>" method="POST">
        <label for="nama_member">Nama member:</label>
        <input type="text" id="nama_member" name="nama_member" value="<?php echo $member['nama_member']; ?>" required>
        <br>
        <label for="usia">Usia:</label>
        <input type="text" id="usia" name="usia" value="<?php echo $member['usia']; ?>" required>
        <br>
        <label for="jenis_kelamin">Jenis kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $member['jenis_kelamin']; ?>" required>
        <br>
        <label for="paket_langganan">Paket langganan:</label>
        <input type="text" id="paket_langganan" name="paket_langganan" value="<?php echo $member['paket_langganan']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/member/index">Back to List</a>
</body>
</html>