<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
</head>
<body>
    <h2>Daftar Member</h2>
    <a href="/member/create">Tambah Member Baru</a>
    <ul>
        <?php foreach ($members as $member): ?>
            <div>
                <p><?= htmlspecialchars($member['nama_member']) ?> - <?= htmlspecialchars($member['usia']) ?> - <?= htmlspecialchars($member['jenis_kelamin']) ?> - <?= htmlspecialchars($member['paket_langganan']) ?>
                    <a href="/member/edit/<?php echo $member['id_member']; ?>">Edit</a> |
                    <a href="/member/delete/<?php echo $member['id_member']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </p>
            </div>
        <?php endforeach; ?>
    </ul>
</body>

</html>