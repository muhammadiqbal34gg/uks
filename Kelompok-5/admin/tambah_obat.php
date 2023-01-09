<?php 
session_start();
require 'functions.php';


if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(tambahobat($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data obat berhasil ditambahkan');
            window.location = 'obat.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data obat gagal ditambahkan');
            window.location = 'obat.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah Obat</h3>

   <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_obat">Nama obat</label>
        <input type="text" name="nama_obat" id="nama_obat" class="form-control"> <br />

        <label for="jenis_obat">Jenis</label>
        <input type="text" name="jenis_obat" id="jenis_obat" class="form-control"> 

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control">

        <label for="jumlah">jumlah</label>
        <input type="text" name="jumlah" id="jumlah" class="form-control">
        
        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea><br>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>