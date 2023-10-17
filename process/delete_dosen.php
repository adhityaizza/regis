<?php
include("../config/config.php");
if(isset($_GET['id_dosen'])){
    $id_dosen = $_GET['id_dosen'];

    $sql = "DELETE FROM dosen WHERE id_dosen = $id_dosen";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '<script>alert("data dosen telah di hapus.");</script>';
        echo '<script>window.location.href = "../pages/home.php";</script>';
    } else {
        echo "Error: data tidak berhasil di hapus.";
    }
} else {
    echo "akses dilarang";
}
?>
