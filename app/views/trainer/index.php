<!-- app/views/trainer/index.php -->
<div class="container mt-5 pt-5">
    <h2 class="text-center mt-4 pb-2" style="margin-top: 100px;">Daftar Trainer</h2>
    <a style="width: 190px;" class="btn btn-success mb-3" href="/trainer/create">Tambah Trainer Baru</a>
    <table class="table table-striped table-bordered table-hover">
    <thead>
            <tr>
                <th style="width: 80px;">No.</th>
                <th>Nama Trainer</th>
                <th>Spesialisasi</th>
                <th>Jadwal</th>
                <th style="width: 200px;" class="text-center">Aksi</th>
            </tr>
    </thead>

    <tbody>
            <tr>
                <?php $no=1;
                foreach ($trainers as $trainer): ?>
                <td><?=$no;?></td>
                <td><?= htmlspecialchars($trainer['nama_trainer']) ?></td>
                <td><?= htmlspecialchars($trainer['spesialisasi']) ?></td>
                <td><?= htmlspecialchars($trainer['jadwal']) ?></td>
                <td class="d-flex justify-content-center">
                    <a style="width: 70px;" class="btn btn-warning btn-sm me-2" href="/trainer/edit/<?php echo $trainer['id_trainer']; ?>">Edit </a>
                    <a style="width: 70px;" class="btn btn-danger btn-sm" href="/trainer/delete/<?php echo $trainer['id_trainer']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php $no++;
                endforeach; ?>
        </tbody>
    </table>
</div>