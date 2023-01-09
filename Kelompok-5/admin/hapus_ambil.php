<?php
require 'functions.php';

$id= $_GET["id"];


if(hapusambil($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data pengambilan obat berhasil dihapus')
        window.location= 'ambil.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data pengambilan obat gagal dihapus')
        window.location= 'ambil.php';
    </script>
";
    
}


?>