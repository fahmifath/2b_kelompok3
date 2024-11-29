<!-- app/views/kelas/create.php -->
<?php require_once'../app/views/templates/nav.php' ?>
<div class="container py-5">
    <div class="text-center mb-4 pt-5">
        <h1 class="display-5 fw-bold text-dark">Tambah Kelas Baru</h1>
        <p class="text-muted">Masukkan informasi kelas yang akan ditambahkan</p>
    </div>

    <div class="card shadow-sm mx-auto" style="max-width: 700px;">
        <div class="card-body">
            <form action="/workout_class/store" method="POST">
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas:</label>
                    <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" required>
                </div>

                <div class="mb-3">
                    <label for="waktu" class="form-label">Waktu:</label>
                    <input type="datetime-local" class="form-control" name="waktu" id="waktu" required>
                </div>

                <div class="mb-3">
                    <label for="pelatih" class="form-label">Pelatih:</label>
                    <select name="pelatih" id="id_events" class="form-select" required>
                        <option value="" selected disabled hidden>Pilih pelatih</option>
                        <?php foreach ($trainers as $index): ?>
                            <option value="<?= $index['id_trainer'] ?>"><?= $index['nama_trainer'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kuota" class="form-label">Kuota:</label>
                    <input type="number" class="form-control" name="kuota" id="kuota" required>
                </div>

                <div class="mb-3">
                    <label for="alat" class="form-label">Alat:</label>
                    <select name="alat" id="id_events" class="form-select" required>
                        <option value="" selected disabled hidden>Pilih alat</option>
                        <?php foreach ($alat as $index): ?>
                            <option value="<?= $index['id_equipment'] ?>"><?= $index['nama_alat'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/workout_class/index" class="btn btn-outline-primary">Back to List</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>