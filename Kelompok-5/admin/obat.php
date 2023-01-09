<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/login.php';
    </script>
    ";
}

$obat = query("SELECT * FROM obat");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Data obat</h3>
    <a href="tambah_obat.php" class="tambah">Tambah obat</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama obat</th>
            <th>Jenis Obat</th>
            <th>Foto</th>
            <th>Jumlah</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($obat as $data) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data["nama_obat"] ?></td>
            <td><?= $data["jenis_obat"] ?></td>
            <td><img src="../assets/<?= $data["foto"] ?>" alt="" width="80px"></td>
            <td><?= $data["jumlah"] ?></td>
            <td><?= $data["deskripsi"] ?></td>
            <td>
                <a href="edit_obat.php?id=<?= $data["id_obat"]; ?>" class="edit">Edit</a>
                <a href="hapus_obat.php?id=<?= $data["id_obat"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="hapus" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>   
        <?php endforeach; ?>
    </table>
</div>