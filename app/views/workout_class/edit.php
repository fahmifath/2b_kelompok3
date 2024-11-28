<!-- app/views/kelas/edit.php -->
<div class="container center mt-5" style="width: 700px;">
    <h2 class="mt-5 text-center pb-2 pt-5">Edit Kelas</h2>
    <form action="/workout_class/update/<?php echo $kelass['id_workout_class']; ?>" method="POST">
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas:</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo $kelass['nama_kelas']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu:</label>
            <input type="datetime-local" class="form-control" id="waktu" name="waktu" value="<?php echo $kelass['waktu']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3">
            <td><label for="pelatih">Pelatih:</label></td>
            <td>
                <select name="pelatih" id="id_events" required class="form-control" aria-placeholder="Pilih pelatih">

                    <option hidden value="<?= $kelass['id_trainer'] ?>"><?= $kelass['nama_trainer'] ?></option>
                    <?php foreach ($trainers as $index): ?>
                        <option value="<?= $index['id_trainer'] ?>"><?= $index['nama_trainer'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </div>

        <div class="mb-3">
            <label for="kuota" class="form-label">Kuota:</label>
            <input type="number" class="form-control" id="kuota" name="kuota" value="<?php echo $kelass['kuota']; ?>" aria-describedby="emailHelp" required>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <a href="/workout_class/index" class="btn btn-primary">Back to List</a>
            <input type="hidden" name="id_kelas" value="<?php echo $kelass['id_workout_class']; ?>">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        </table>
    </form>

</div>