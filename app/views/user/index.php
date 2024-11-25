<!-- app/views/kelas/index.php -->
<h2>Daftar Kelas</h2>
<a href="/kelas/create">Tambah Kelas Baru</a>
<ul>
    <?php foreach ($kelas as $kelas): ?>
        <div>
            
            <p><?= htmlspecialchars($kelas['nama_kelas']) ?> - <?= htmlspecialchars($kelas['waktu']) ?> - <?= htmlspecialchars($kelas['peltih']) ?> - <?= htmlspecialchars($kelas['kuota']) ?>
            
            <a href="/kelas/edit/<?php echo $kelas['id_kelas']; ?>">Edit</a> |
            <a href="/kelas/delete/<?php echo $kelas['id_kelas']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
