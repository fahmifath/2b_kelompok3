<!-- app/views/user/create.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Tambah Alat Baru</h2>
    <form action="/equipment/store" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Alat:</label>
            <input type="text" class="form-control" name="nama_alat" id="nama_alat" aria-describedby="emailHelp" required>
        </div>
        <div  class="mb-3">
            <label for="jenis_alat">Jenis Alat:</label>
            <input type="text" class="form-control" name="jenis_alat" id="jenis_alat" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="kondisi">Kondisi:</label>
            <input type="text"  class="form-control"  name="kondisi" id="kondisi"  aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <input type="hidden" name="id_equipments" id="id_equipment">
            <button type="submit" class="btn btn-success">Simpan</button>
        </tr>
    </table>
</form>
<a href="/equipment/index" class="btn btn-primary">Back to List</a>
