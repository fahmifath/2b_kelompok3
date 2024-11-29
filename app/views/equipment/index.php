<!-- app/views/user/index.php -->
<?php require_once '../app/views/templates/nav.php'; ?>
<div class="container mt-5 pt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h2 class="text-center my-2">Daftar Alat Gym</h2>
        </div>
        <div class="card-body">
            <a style="width: 190px;" href="../equipment/create" class="btn btn-success mb-3">Tambah Alat Baru</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover align-middle">
                    <thead style="background-color: #e9ecef; color: #343a40; font-weight: bold;">
                        <tr>
                            <th style="width: 80px;">No.</th>
                            <th>Nama Alat</th>
                            <th>Jenis Alat</th>
                            <th>Kondisi</th>
                            <th style="width: 200px;" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($equipments as $equipment): ?>
                            <tr>
                                <td class="text-center"><?= $no; ?></td>
                                <td><?= htmlspecialchars($equipment['nama_alat']); ?></td>
                                <td><?= htmlspecialchars($equipment['jenis_alat']); ?></td>
                                <td><?= htmlspecialchars($equipment['kondisi']); ?></td>
                                <td class="d-flex justify-content-center">
                                    <a style="width: 70px;" class="btn btn-warning btn-sm me-2" href="../equipment/edit/<?php echo $equipment['id_equipment']; ?>">Edit</a>
                                    <a style="width: 70px;" class="btn btn-danger btn-sm" href="../equipment/delete/<?php echo $equipment['id_equipment']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
