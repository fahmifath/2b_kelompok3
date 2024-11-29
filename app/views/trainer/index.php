<!-- app/views/trainer/index.php -->
<?php require_once '../app/views/templates/nav.php'; ?>
<div class="container mt-5 pt-5">
    <div class="text-center mb-4">
        <h2 class="text-uppercase fw-bold" style="color: #fff;">Daftar Trainer</h2>
    </div>
    
    <div class="text-center mb-4">
        <a class="btn btn-dark" href="/trainer/create" style="border-radius: 30px; font-weight: bold;">
            <i class="bi bi-person-plus-fill"></i> Tambah Trainer Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle shadow-sm" style="background-color: #000; color: #fff; border-radius: 10px; overflow: hidden;">
            <thead class="text-white" style="background-color: #333;">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Trainer</th>
                    <th>Spesialisasi</th>
                    <th>Jadwal</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($trainers as $trainer): ?>
                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= htmlspecialchars($trainer['nama_trainer']); ?></td>
                    <td><?= htmlspecialchars($trainer['spesialisasi']); ?></td>
                    <td><?= htmlspecialchars($trainer['jadwal']); ?></td>
                    <td class="text-center">
                        <a class="btn btn-success btn-sm shadow-sm me-2" href="/trainer/edit/<?php echo $trainer['id_trainer']; ?>" style="border-radius: 20px;">
                            <i class="bi bi-pencil-fill"></i> Edit
                        </a>
                        <a class="btn btn-outline-danger btn-sm shadow-sm" href="/trainer/delete/<?php echo $trainer['id_trainer']; ?>" style="border-radius: 20px;" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="bi bi-trash-fill"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php $no++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Tambahkan Style untuk sentuhan elegan -->
<style>
    body {
        background-color: #121212;
        color: #fff;
    }
    .btn-dark:hover {
        background-color: #444;
    }
    .btn-outline-light:hover {
        background-color: #fff;
        color: #000;
    }
    .btn-outline-danger:hover {
        background-color: #ff4d4d;
        color: #fff;
    }
    table {
        border: none;
    }
    table thead {
        border-bottom: 2px solid #444;
    }
</style>

<!-- Link Icon Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
