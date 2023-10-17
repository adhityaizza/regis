<?php
    include("../config/config.php");

    $nik_dosen = $_POST['nik_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat_dosen = $_POST['alamat_dosen'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $skill_dosen = $_POST['skill_dosen'];

    $sql = "INSERT INTO dosen(nik_dosen, nama_dosen, alamat_dosen, jenis_kelamin, skill_dosen) VALUE ('$nik_dosen', '$nama_dosen', '$alamat_dosen', '$jenis_kelamin', '$skill_dosen')";
    $query = mysqli_query($connect, $sql);
    
    if($query){
        echo '<script>alert("Data anda telah berhasil dimasukan");</script>';
        echo '<script>window.location.href = "../pages/home.php";</script>';
    }else{
        echo '<script>alert("Data anda gagal dimasukan");</script>';
        echo '<script>window.location.href = "../pages/add_dosen.php";</script>';
    }
?>