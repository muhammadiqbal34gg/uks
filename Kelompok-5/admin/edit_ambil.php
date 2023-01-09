<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$pengambilan = query("SELECT * FROM pengambilan WHERE id_ambil = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/login.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editambil($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data pengambilan berhasil di edit');
            window.location = 'ambil.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data pengambilan gagal di edit');
            window.location = 'ambil.php';
        </script>
    ";
    }
}
$date = new DateTime('now');

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Edit data Pengambilan Obat</h3>

   <form action="" method="POST"  enctype="multipart/form-data">
    
    <input type="hidden" name="id_ambil" value="<?= $pengambilan["id_ambil"]; ?>">

    <label for="haritanggal">Hari/Tanggal</label>
    <input type="date" name="haritanggal" id="haritanggal" class="form-control" value="<?= $pengambilan["haritanggal"]; ?>"> 
    
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control" value="<?= $pengambilan["nama"]; ?>"> <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $pengambilan["kelas"]; ?>">

    <label for="nama_obat">Nama_obat</label>
    <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $pengambilan["nama_obat"]; ?>">

    <label for="jumlah_obat">Jumlah</label>
    <input type="text" name="jumlah_obat" id="jumlah_obat" class="form-control" value="<?= $pengambilan["jumlah_obat"]; ?>">

    <label for="status">Status</label>
        <select name="status" id="status" class="form-control" cols="30" rows="8" value="<?= $pengambilan["status"]; ?>">
            <option value="Proses">Proses</option>
            <option value="Terverivikasi">Terverivikasi</option>
        </select>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>