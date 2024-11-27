<!-- app/views/member/create.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center">Tambah Member Baru</h2>
    <form action="/member/store" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_member" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail11" class="form-label">Usia</label>
            <input type="text" class="form-control" id="exampleInputEmail11" name="usia" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail12" class="form-label">Jenis kelamin</label>
            <input type="text" class="form-control" id="exampleInputEmail12" name="jenis_kelamin" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail13" class="form-label">Paket langganan</label>
            <input type="text" class="form-control" id="exampleInputEmail13" name="paket_langganan" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Tambah</button>
            <a class="btn btn-primary" href="/member/index">Back to List</a>
        </div>
    </form>
</div>