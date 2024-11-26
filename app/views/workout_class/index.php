<!-- app/views/kelas/index.php -->
<h2>Daftar Kelas</h2>
<a href="/workout_class/create">Tambah Kelas Baru</a>
<ul>
    <?php foreach ($kelas as $class): ?>
        <div>

            <p>
                <?= htmlspecialchars($class['nama_kelas']) ?> - 
                <?= htmlspecialchars($class['waktu']) ?> - 
                <?= htmlspecialchars($class['pelatih']) ?> - 
                <?= htmlspecialchars($class['kuota']) ?>
            
                <p>
                    <a href="/workout_class/edit/<?php echo $class['id_workout_class'];?>">Edit</a> |
                    <a href="/workout_class/delete/<?php echo $class['id_workout_class'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                </p>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
