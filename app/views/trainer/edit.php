<!-- app/views/trainer/edit.php -->
<?php require_once '../app/views/templates/nav.php'; ?>
<div class="container mt-5 pt-5" style="max-width: 700px;">
    <h2 class="text-center text-uppercase fw-bold pb-3" style="color: #000;">Edit Trainer</h2>

    <div class="card shadow-lg" style="background-color: #121212; border-radius: 15px; color: #fff;">
        <div class="card-body p-4">
            <form action="/trainer/update/<?php echo $trainers['id_trainer']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Trainer:</label>
                    <input type="text" class="form-control" id="name" name="nama_trainer" value="<?php echo htmlspecialchars($trainers['nama_trainer']); ?>" style="background-color: #222; color: #fff; border: none; border-radius: 10px;" required>
                </div>

                <div class="mb-3">
                    <label for="spesialisasi" class="form-label">Spesialisasi:</label>
                    <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" value="<?php echo htmlspecialchars($trainers['spesialisasi']); ?>" style="background-color: #222; color: #fff; border: none; border-radius: 10px;" required>
                </div>

                <div class="mb-3">
                    <label for="jadwal" class="form-label">Jadwal:</label>
                    <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?php echo htmlspecialchars($trainers['jadwal']); ?>" style="background-color: #222; color: #fff; border: none; border-radius: 10px;" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/trainer/index" class="btn btn-outline-light shadow px-4 py-2" style="border-radius: 30px;">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success shadow px-4 py-2" style="border-radius: 30px;">
                        <i class="bi bi-check-circle-fill"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Link Bootstrap CSS dan JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
