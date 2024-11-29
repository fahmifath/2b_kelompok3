<!-- app/views/kelas/edit.php -->
<?php require_once '../app/views/templates/nav.php' ?>
<div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-4 pt-5">
        <h1 class="display-5 fw-bold text-dark">Edit Kelas</h1>
        <p class="text-muted">Perbarui informasi kelas gym Anda</p>
    </div>

    <!-- Form -->
    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-body">
            <form action="/workout_class/update/<?php echo $kelass['id_workout_class']; ?>" method="POST">
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas:</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo htmlspecialchars($kelass['nama_kelas']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu:</label>
                    <input type="datetime-local" class="form-control" id="waktu" name="waktu" value="<?php echo $kelass['waktu']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="pelatih" class="form-label">Pelatih:</label>
                    <select name="pelatih" id="id_events" class="form-select" required>
                        <option hidden value="<?= $kelass['id_trainer'] ?>"><?= htmlspecialchars($kelass['nama_trainer']) ?></option>
                        <?php foreach ($trainers as $index): ?>
                            <option value="<?= $index['id_trainer'] ?>"><?= htmlspecialchars($index['nama_trainer']) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota:</label>
                    <input type="number" class="form-control" id="kuota" name="kuota" value="<?php echo $kelass['kuota']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="alat" class="form-label">Alat:</label>
                    <select name="alat" id="id_events" class="form-select" required>
                        <option hidden value="<?= $kelass['id_equipment'] ?>"><?= htmlspecialchars($kelass['nama_alat']) ?></option>
                        <?php foreach ($alat as $index): ?>
                            <option value="<?= $index['id_equipment'] ?>"><?= htmlspecialchars($index['nama_alat']) ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/workout_class/index" class="btn btn-outline-primary">Back to List</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>