<!-- app/views/trainer/create.php -->

<div class="container center mt-5" style="width: 700px;">
<h2 class="mt-5 text-center pb-2 pt-5" style="margin-top: 100px;">Tambah Trainers Baru</h2>

    <form action="/trainer/store" method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" name="nama_trainer" id="nama" class="form-control" aria describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="spesialisasi" class="form-label">Spesialisasi:</label>
            <input type="text" name="spesialisasi" id="spesialisasi" class="form-control" aria describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="jadwal" class="form-label">Jadwal:</label>
            <input type="text" name="jadwal" id="jadwal" class="form-control" aria describedby="emailHelp" required>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <input type="hidden" name="id_trainer" id="id_trainer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/trainer/index" class="btn btn-primary">Back to List</a>
        </div>
    </form>
</div>