<!-- app/views/member/index.php -->
 
<div class="container mt-5">
    <h2 class="text-center mt-4" style="margin-top: 100px;">Daftar Member</h2>
    <a class="btn btn-success mb-3" href="/member/create">Tambah Member Baru</a>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis kelamin</th>
                <th>Paket langganan</th>
                <th style="width: 200px;" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $no=1;
                foreach ($members as $member): ?>
                <td><?=$no;?></td>
                <td><?=htmlspecialchars($member['nama_member'])?></td>
                <td><?=htmlspecialchars($member['usia'])?></td>
                <td><?=htmlspecialchars($member['jenis_kelamin'])?></td>
                <td><?=htmlspecialchars($member['paket_langganan'])?></td>
                <td class="d-flex justify-content-center">
                    <a style="width: 70px;" class="btn btn-warning btn-sm" href="/member/edit/<?php echo $member['id_member']; ?>">Edit</a> |
                    <a style="width: 70px;" class="btn btn-danger btn-sm" href="/member/delete/<?php echo $member['id_member']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php $no++;
                endforeach; ?>
        </tbody>
    </table>
</div>
