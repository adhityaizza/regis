<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="title">Tambahkan Data Dosen</h1>
    <div class="card">
    <form action="../process/add_dosen_process.php" method="post">
    <input type="number" name="nik_dosen" placeholder="NIK Dosen">
    <input type="text" name="nama_dosen" placeholder="Nama Dosen">
    <input type="text" name="alamat_dosen" placeholder="Alamat Dosen">

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label for="skill_dosen">Skill Dosen:</label>
    <select name="skill_dosen">
        <option value="Nyuntik">Nyuntik Pasta Prosesor</option>
        <option value="Ngerawat">Ngerawat Virus</option>
        <option value="Operasi">Operasi Casing</option>
    </select>

    <div class="buttons">
        <button type="submit" class="login-button">Tambahkan</button>
    </div>
</form>

    </div>
</div>
</body>
</html>