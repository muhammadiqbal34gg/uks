<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/login.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil di edit');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal di edit');
            window.location = 'user.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Edit data User</h3>

   <form action="" method="POST"  enctype="multipart/form-data">
    
    <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>"> 
    
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"> <br />

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" value="<?= $user["password"]; ?>">

        <label for="roles">Roles</label>
        <select name="roles" id="roles" class="form-control" cols="30" rows="8" value="<?= $user["roles"]; ?>">
            <option value="Admin">Admin</option>
            <option value="Siswa">Siswa</option>
        </select>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>