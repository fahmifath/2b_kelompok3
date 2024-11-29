<!-- app/views/user/edit.php -->
<?php require_once '../app/views/templates/nav.php'; ?>
<div class="container mt-5 pt-5" style="max-width: 700px;">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white text-center">
            <h2 class="my-2">Edit Equipment</h2>
        </div>
        <div class="card-body">
            <form action="/equipment/update/<?php echo $equipments['id_equipment']; ?>" method="POST">
                <div class="mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat:</label>
                    <input type="text" class="form-control" id="nama_alat" name="nama_alat" 
                        value="<?php echo htmlspecialchars($equipments['nama_alat']); ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="jenis_alat" class="form-label">Jenis Alat:</label>
                    <input type="text" class="form-control" id="jenis_alat" name="jenis_alat" 
                        value="<?php echo htmlspecialchars($equipments['jenis_alat']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi:</label>
                    <select class="form-select" id="kondisi" name="kondisi" required>
                        <option value="Baik" <?php echo $equipments['kondisi'] === 'Baik' ? 'selected' : ''; ?>>Baik</option>
                        <option value="Rusak" <?php echo $equipments['kondisi'] === 'Rusak' ? 'selected' : ''; ?>>Rusak</option>
                    </select>
                </div>

                <input type="hidden" id="id_equipment" name="id_equipment" value="<?php echo htmlspecialchars($equipments['id_equipment']); ?>">

                <div class="d-flex justify-content-between">
                    <a href="/equipment/index" class="btn btn-primary">Back to List</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>