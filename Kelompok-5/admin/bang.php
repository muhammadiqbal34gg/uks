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

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h1>Halo Welcome to SHC SMK Jakarta Pusat 1</h1>
</div>