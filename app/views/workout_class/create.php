<!-- app/views/kelas/create.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Tambah Kelas Baru</h2>
    <form action="/workout_class/store" method="POST">
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas:</label>
            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="waktu">Waktu:</label>
            <input type="datetime-local" class="form-control" name="waktu" id="waktu" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <td><label for="pelatih">Pelatih:</label></td>
            <td><input type="text" class="form-control" name="pelatih" id="pelatih" aria-describedby="emailHelp" required></td>
        </div>
        <div class="mb-3">
            <label for="kuota">Kuota:</label>
            <input type="number" class="form-control" name="kuota" id="kuota" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <input type="hidden" name="id_kelas" id="id_kelas">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/workout_class/index" class="btn btn-primary">Back to List</a>
        </div>
    </form>
</div>