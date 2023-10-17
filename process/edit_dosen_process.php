<?php
    include("../config/config.php");

        $id_dosen = $_GET['id_dosen'];
        
        $nik_dosen = $_POST['nik_dosen'];
        $nama_dosen = $_POST['nama_dosen'];
        $alamat_dosen = $_POST['alamat_dosen'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $skill_dosen = $_POST['skill_dosen'];

        $sql = "UPDATE dosen SET nik_dosen='$nik_dosen', nama_dosen='$nama_dosen',alamat_dosen='$alamat_dosen',jenis_kelamin='$jenis_kelamin',skill_dosen='$skill_dosen' WHERE id_dosen='$id_dosen'";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: ../pages/home.php');
        }else{
            die("gagal");
        }
    


?>