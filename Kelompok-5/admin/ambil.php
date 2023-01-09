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

$pengambilan = query("SELECT * FROM pengambilan");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Data pengambilan</h3>
    <a href="tambah_ambil.php" class="tambah">Tambah pengambilan</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Hari/tanggal</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Nama_obat</th>
            <th>Jumlah_obat</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($pengambilan as $data) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data["haritanggal"] ?></td>
            <td><?= $data["nama"] ?></td>
            <td><?= $data["kelas"] ?></td>
            <td><?= $data["nama_obat"] ?></td>
            <td><?= $data["jumlah_obat"] ?></td>
            <td><?= $data["status"] ?></td>
            <td>
                <a href="edit_ambil.php?id=<?= $data["id_ambil"]; ?>" class="edit">Edit</a>
                <a href="hapus_ambil.php?id=<?= $data["id_ambil"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="hapus" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>   
        <?php endforeach; ?>
    </table>
</div>