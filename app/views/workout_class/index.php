<!-- app/views/kelas/index.php -->
<?php require_once'../app/views/templates/nav.php' ?>
<div class="container py-5">
        <div class="text-center mb-4 pt-5">
            <h1 class="display-5 fw-bold text-dark">Daftar Kelas Gym</h1>
            <p class="text-muted">Pilih kelas terbaik untuk mendukung kebugaran Anda</p>
            <a href="/workout_class/create" class="btn btn-primary btn-lg shadow-sm">Tambah Kelas Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No.</th>
                        <th>Nama Kelas</th>
                        <th>Waktu</th>
                        <th>Pelatih</th>
                        <th>Kuota</th>
                        <th>Alat</th>
                        <th style="width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($kelas as $class): ?>
                        <tr class="text-center">
                            <td><?= $no; ?></td>
                            <td><?= htmlspecialchars($class['nama_kelas']) ?></td>
                            <td><?= htmlspecialchars($class['waktu']) ?></td>
                            <td><?= htmlspecialchars($class['nama_trainer']) ?></td>
                            <td><?= htmlspecialchars($class['kuota']) ?></td>
                            <td><?= htmlspecialchars($class['nama_alat']) ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Aksi">
                                    <a class="btn btn-outline-success btn-sm" href="/workout_class/edit/<?= $class['id_workout_class']; ?>">Edit</a>
                                    <a class="btn btn-outline-danger btn-sm" href="/workout_class/delete/<?= $class['id_workout_class']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>