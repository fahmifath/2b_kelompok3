<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/member/create">Tambah Pengguna Baru</a>
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
