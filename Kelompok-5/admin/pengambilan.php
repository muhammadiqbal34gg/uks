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
    if(tambahambil($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data pengambilan obat berhasil ditambahkan');
            window.location = 'sukses.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data pengambilan obat berhasil ditambahkan');
            window.location = 'sukses.php';
        </script>
    ";
    }
}
$date = new DateTime('now');

?>


<?php require '../layout/bang.php'?>

<div class="main">
    <div class="box">

    <a href="../obat.html" style="text-decoration:none; color:black;">kembali</a>
    <h3>Tambah Obat</h3>

   <form action="" method="POST" enctype="multipart/form-data">
        <label for="haritanggal">Hari/Tanggal</label>
        <input type="date" name="haritanggal" id="haritanggal" value="$date" class="form-control"> <br />

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control"> 

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" class="form-control">

        <label for="nama_obat">nama_obat</label>
        <input type="text" name="nama_obat" id="nama_obat" value="tolak angin" class="form-control">
        
        <label for="jumlah_obat">jumlah_obat</label>
        <input type="text" name="jumlah_obat" id="jumlah_obat" class="form-control">

        <select name="status" id="status" class="form-control" cols="30" rows="8">
            <option value="Proses">Proses</option>
            <option value="Terverivikasi">Terverivikasi</option>
        </select>
        
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>