<!-- app/views/user/edit.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Edit Equipment</h2>
    <form action="/equipment/update/<?php echo $equipments['id_equipment']; ?>" method="POST">
        <div class="mb-3">
            <label for="nama_alat" class="form-label" >Nama Alat:</label>
            <input type="text" class="form-control"  id="nama_alat" name="nama_alat" value="<?php echo $equipments['nama_alat']; ?>" aria-describedby="emailHelp" required>
        </div>
        
        <div class="mb-3">
            <label for="jenis_alat" class="form-label">Jenis Alat:</label>
            <input type="text" class="form-control"  id="jenis_alat" name="jenis_alat" value="<?php echo $equipments['jenis_alat']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="kondisi"  class="form-label">Kondisi:</label>
            <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?php echo $equipments['kondisi']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <input type="hidden" id="id_equipment" name="id_equipment" value="<?php echo $equipments['id_equipment']; ?>" required>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/equipment/index" class="btn btn-primary">Back to List</a>
        </div>
    </table>
    </form>
    