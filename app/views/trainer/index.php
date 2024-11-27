<!-- app/views/trainer/index.php -->
<h2>Daftar Trainers</h2>
<a href="/trainer/create">Tambah Trainers Baru</a>
<ul>
    <?php foreach ($trainers as $trainer): ?>
        <div>
            <p><?= htmlspecialchars($trainer['nama_trainer']) ?> - 
            <?= htmlspecialchars($trainer['spesialisasi']) ?> - 
            <?= htmlspecialchars($trainer['jadwal']) ?>
            
            <a href="/trainer/edit/<?php echo $trainer['id_trainer']; ?>">Edit</a> |
            <a href="/trainer/delete/<?php echo $trainer['id_trainer']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach;?>
</ul>