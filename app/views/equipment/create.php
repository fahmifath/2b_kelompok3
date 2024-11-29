<!-- app/views/user/create.php -->
<?php require_once '../app/views/templates/nav.php'; ?>
<div class="container mt-5 pt-5" style="max-width: 700px;">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white text-center">
            <h2 class="my-2">Tambah Alat Baru</h2>
        </div>
        <div class="card-body">
            <form action="/equipment/store" method="POST">
                <div class="mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat:</label>
                    <input type="text" class="form-control" name="nama_alat" id="nama_alat" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_alat" class="form-label">Jenis Alat:</label>
                    <input type="text" class="form-control" name="jenis_alat" id="jenis_alat" required>
                </div>
                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi:</label>
                    <select class="form-select" name="kondisi" id="kondisi" required>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                    </select>
                </div>
                <input type="hidden" name="id_equipment" id="id_equipment">
                <div class="d-flex justify-content-between">
                    <a href="/equipment/index" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>