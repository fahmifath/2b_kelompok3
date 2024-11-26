<!-- app/views/user/index.php -->
<h2>Daftar Alat Gym</h2>
<a href="/equipment/create">Tambah Alat Baru</a>
<ul>
    <?php foreach ($equipments as $equipment): ?>
        <div>
            <p><?= htmlspecialchars($equipment['nama_alat']) ?> - <?= htmlspecialchars($equipment['jenis_alat']) ?> - <?= htmlspecialchars($equipment['kondisi']) ?>
            <a href="/equipment/edit/<?php echo $equipment['id_equipment']; ?>">Edit</a> |
            <a href="/equipment/delete/<?php echo $equipment['id_equipment']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
