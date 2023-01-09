<?php
session_start();


unset($_SESSION["username"]);
session_destroy();

echo "
    <script type='text/javascript'>
        alert('Anda berhasil Logout')
        window.location = '../project-uks/login/login.php';
    </script>
";


?>