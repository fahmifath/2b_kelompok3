<!-- app/views/trainer/edit.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Edit Trainers</h2>
    <form action="/trainer/update/<?php echo $trainers['id_trainer']; ?>" method="POST">
        <div class= "mb-3">
            <label for="name" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="name" name="nama_trainer" value="<?php echo $trainers['nama_trainer']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class= "mb-3">
            <label for="spesialisasi" class="form-label">Spesialisasi:</label>
            <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" value="<?php echo $trainers['spesialisasi']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class= "mb-3">
            <label for="jadwal" class="form-label">Jadwal:</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?php echo $trainers['jadwal']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3 d-flex justify-content-between">
                <input type="hidden" name="id_trainer" value="<?php echo $trainers['id_trainer']; ?>">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/trainer/index" class="btn btn-primary">Back to List</a>
            </div>
    </form>
    
</div>