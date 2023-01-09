<?php

require '../koneksi.php';


function query($query){
    global $conn;

    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
        
    return $rows;
}

function editUser($data){
    global $conn;

    $id = $data["id_user"];
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET username= '$username', nama_lengkap= '$nama_lengkap', password= '$password', roles= '$roles' WHERE id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");

    return mysqli_affected_rows($conn);
}

function  tambahuser($data){
    global $conn;
    
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);
    
    $query = "INSERT INTO user Values(null, '$username','$nama_lengkap', '$password', '$roles')";

    mysqli_query($conn, $query);

    return mysqli_query($conn);

}

function hapusobat($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM obat WHERE id_obat = '$id'");

    return mysqli_affected_rows($conn);
}

function hapusambil($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM pengambilan WHERE id_ambil = '$id'");

    return mysqli_affected_rows($conn);
}

function editobat($data){
    global $conn;

    $id = htmlspecialchars($data["id_obat"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $jenis_obat = htmlspecialchars($data["jenis_obat"]);
    $foto = $_FILES["foto"]["name"];
    $file = $_FILES["foto"]["tmp_name"];
    $jumlah = htmlspecialchars($data["jumlah"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    if(empty($foto)){
        $query = "UPDATE obat SET nama_obat = '$nama_obat', jenis_obat = '$jenis_obat', foto = '$foto', jumlah = '$jumlah', deskripsi = '$deskripsi' WHERE id_obat = '$id'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE obat SET nama_obat = '$nama_obat', jenis_obat = '$jenis_obat', foto = '$foto', jumlah = '$jumlah', deskripsi = '$deskripsi' WHERE id_obat = '$id'";
        move_uploaded_file($file, "../assets/".$foto);

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}

function tambahobat($data){

    global $conn;

    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $jenis_obat = htmlspecialchars($data["jenis_obat"]);
    $foto = $_FILES["foto"]["name"];
    $file = $_FILES["foto"]["tmp_name"];
    $jumlah = htmlspecialchars($data["jumlah"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO obat VALUES(NULL, '$nama_obat', '$jenis_obat', '$foto', '$jumlah', '$deskripsi')";
    move_uploaded_file($file, "../assets/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahambil($data){
    global $conn;
    
    $haritanggal = htmlspecialchars($data["haritanggal"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $jumlah_obat = htmlspecialchars($data["jumlah_obat"]);
    $status = htmlspecialchars($data["status"]);
    
    $query = "INSERT INTO pengambilan Values(null, '$haritanggal', '$nama', '$kelas', '$nama_obat', '$jumlah_obat', '$status')";

    mysqli_query($conn, $query);

    return mysqli_query($conn);

}

function editambil($data){
    global $conn;

    $id = $data["id_ambil"];
    $haritanggal = htmlspecialchars($data["haritanggal"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nama_obat = htmlspecialchars($data["nama_obat"]);
    $jumlah_obat = htmlspecialchars($data["jumlah_obat"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE pengambilan SET haritanggal= '$haritanggal', nama= '$nama', kelas= '$kelas', nama_obat= '$nama_obat', jumlah_obat= '$jumlah_obat', status= '$status' WHERE id_ambil = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function lologin($data){
    global $conn;
    
    $gmail = htmlspecialchars($data["gmail"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);
    
    $query = "INSERT INTO lologin VALUES(null, '$gmail','$username', '$password', '$roles')";

    mysqli_query($conn, $query);

    return mysqli_query($conn);

}

?>