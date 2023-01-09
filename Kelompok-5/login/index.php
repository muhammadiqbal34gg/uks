<?php
session_start();
require '../admin/functions.php';


if(isset($_POST["kirim"])){
    if(lologin($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Register berhasil');
            window.location = 'login.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Register berhasil');
            window.location = 'login.php';
        </script>
    ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <a href="../index.php"><img src="../assets/arrow.png" width="100px" class="img" alt=""></a>
                <h1>Register</h1>
                <p>Register terlebih dahulu</p>

                <label for="gmail">Gmail:</label><br>
                <input type="text" name="gmail" placeholder="Masukkan gmail" id="gmail"><br>
                
                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Masukkan username" id="username"><br>
                
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Masukkan password" id="password">
                <a class="lokor">Forgot Password?</a><br>

                <button id="button" name="kirim">Register</button><br>

                <a class="kolor">Sudah punya Akun?</a>
                <a class="warna" href="login.php">Log in</a>
              
            </div>
            <div class="col-6">
                <img src="../assets/TUGAS 2.png" class="gambar" width="100%" height="100%" alt="">
            </div>
        </div>
    </form>

    
</body>
</html>