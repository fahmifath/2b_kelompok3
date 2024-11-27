<!-- app/views/kelas/index.php -->

<div class="container mt-5">
    <h2 class="text-center mt-5 pb-2 pt-5" style="margin-top: 100px;">Daftar Kelas</h2>
    <a href="/workout_class/create" class="btn btn-success mb-3">Tambah Kelas Baru</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kelas</th>
                <th>Waktu</th>
                <th>Pelatih</th>
                <th>Kuota</th>
                <th style="width: 200px;" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($kelas as $class): ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= htmlspecialchars($class['nama_kelas']) ?></td>
                    <td><?= htmlspecialchars($class['waktu']) ?></td>
                    <td><?= htmlspecialchars($class['pelatih']) ?></td>
                    <td><?= htmlspecialchars($class['kuota']) ?></td>
                    <td class="d-flex justify-content-center">
                        <a style="width: 70px;" class="btn btn-warning btn-sm me-2" href="/workout_class/edit/<?php echo $class['id_workout_class']; ?>">Edit</a>
                        <a style="width: 70px;" class="btn btn-danger btn-sm" href="/workout_class/delete/<?php echo $class['id_workout_class']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>