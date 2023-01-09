<?php 

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM lologin WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "Admin"){
        session_start();

        $_SESSION["username"] = $data["username"];
        header("Location: ../admin/bang.php");
    }else if($data["roles"] == "Siswa"){
        session_start();

        $_SESSION["username"] = $data["username"];

        header("Location: ../index1.php");
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "login.php";
        </script>
    ';
}





?>