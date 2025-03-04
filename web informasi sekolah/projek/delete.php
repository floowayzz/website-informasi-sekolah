<?php 
require 'Koneksi.php';
    //mengambil data nis dari $get
    $nis = $_GET["Nis"];
    //function menghapus data
    function delete($nis){
        global $conn;
        //query menghapus data
        mysqli_query($conn,"DELETE FROM siswa WHERE Nis = '$nis'");
        return mysqli_affected_rows($conn);
    }
    //output terakhir
    if(delete($nis) > 0){
        echo "<script>alert('Data berhasil dihapus');document.location.href = 'Belajar1.php';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');document.location.href = 'Belajar1.php';</script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>