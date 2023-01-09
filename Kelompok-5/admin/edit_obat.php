<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$obat = query("SELECT * FROM obat WHERE id_obat = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/login.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editobat($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data obat berhasil di edit');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data obat gagal di edit');
            window.location = 'obat.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Edit data obat</h3>

   <form action="" method="POST"  enctype="multipart/form-data">
    
    <input type="hidden" name="id_obat" value="<?= $obat["id_obat"]; ?>">

    <label for="nama_obat">Nama obat</label>
    <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?= $obat["nama_obat"]; ?>"> 
    
    <label for="jenis_obat">Jenis obat</label>
    <input type="text" name="jenis_obat" id="jenis_obat" class="form-control" value="<?= $obat["jenis_obat"]; ?>"> <br />

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control" value="<?= $obat["foto"]; ?>">
    
    <label for="jumlah">Jumlah</label>
    <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $obat["jumlah"]; ?>">
    
    <label for="deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $obat["deskripsi"]; ?>">
       
    <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>