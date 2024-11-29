<!-- app/views/member/create.php -->
<?php require_once'../app/views/templates/nav.php' ?>
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Tambah Member Baru</h2>
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
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="lakiLaki" value="Laki-laki">
                <label class="form-check-label" for="lakiLaki">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
            <!-- <input type="text" class="form-control" id="exampleInputEmail12" name="jenis_kelamin" aria-describedby="emailHelp" required> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail13" class="form-label">Paket langganan</label>
            <!-- <input type="text" class="form-control" id="exampleInputEmail13" name="paket_langganan" aria-describedby="emailHelp" required> -->
            <select class="form-select" aria-label="Default select example" name="paket_langganan">
                <option selected hidden>Pilih paket langganan</option>
                <option value="Reguler">Reguler</option>
                <option value="Premium">Premium</option>
            </select>
        </div>
        <div class="mb-3">
            <td><label for="pelatih">Pilih kelas:</label></td>
            <td>
                <select name="kelas" id="id_events" required class="form-control" aria-placeholder="Pilih pelatih">
                    <option value="" selected disabled hidden>Pilih kelas</option>
                    <?php foreach ($classes as $index): ?>
                        <option value="<?= $index['id_workout_class'] ?>"><?= $index['nama_kelas'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <a class="btn btn-primary" href="/member/index" style="width: 120px;">Back to List</a>
            <button type="submit" class="btn btn-success" style="width: 120px;">Tambah</button>
        </div>
    </form>
</div>