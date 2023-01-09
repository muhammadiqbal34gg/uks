<?php
require 'functions.php';

$id= $_GET["id"];


if(hapusobat($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data obat berhasil dihapus')
        window.location= 'obat.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data obat gagal dihapus')
        window.location= 'obat.php';
    </script>
";
    
}


?>