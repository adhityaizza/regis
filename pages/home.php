<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Dosen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../pages/add_dosen.php">Tambah Data</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../index.php">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <h1 style="margin-top: 25px;">
        List Dosen
    </h1>
    <table class="table table-hover" style="margin-top: 50px;">
        <thead>
            <tr class="tr">
                <th class="satu">No</th>
                <th hidden>id dosen</th>
                <th hidden>Nik</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Skill</th>
                <th>Mau Diapain</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("../config/config.php");

                $sql = "SELECT * FROM dosen";
                $query = mysqli_query($connect, $sql);
                $nomor = 1;

                while($dosen = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$nomor."</td>";
                    echo "<td hidden>".$dosen['id_dosen']."</td>";
                    echo "<td hidden>".$dosen['nik_dosen']."</td>";
                    echo "<td>".$dosen['nama_dosen']."</td>";
                    echo "<td>".$dosen['alamat_dosen']."</td>";
                    echo "<td>".$dosen['jenis_kelamin']."</td>";
                    echo "<td>".$dosen['skill_dosen']."</td>";
                    echo "<td>";
                    echo "<a href='../pages/update_dosen.php?id_dosen=".$dosen['id_dosen']."'>
                    <button type='button' class='btn btn-success btn-sm'>Edit</button>
                    </a>";
                    echo "<a href='../process/delete_dosen.php?id_dosen=".$dosen['id_dosen']."'>
                    <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                    </a>";
                    echo "</td>";
                    echo "</tr>";
                    $nomor++;
                }
            ?>
        </tbody>
    </table>
    </div>
    
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
</body>
</html>