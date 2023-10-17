    <?php
    include("../config/config.php");

    $id = $_GET['id_dosen'];

    $sql = mysqli_query($connect,"SELECT * FROM dosen WHERE id_dosen=$id");
    $dosen = mysqli_fetch_assoc($sql);

    if( mysqli_num_rows($sql) < 1 ){
        die("data tidak ditemukan...");
    }
    ?>
    <div class="content">
        <header>
        <h3>Form Update Data</h3>
        </header>

        <form action="../process/edit_dosen_process.php" method="post">
    <fieldset>
        <p hidden="true">
            <label for="id_dosen">ID Dosen: </label>
            <input type="text" name="id_dosen" value="<?php echo $dosen['id_dosen'] ?>" />
        </p>
        <p>
            <label for="nik_dosen">NIK: </label>
            <input type="text" name="nik_dosen" value="<?php echo $dosen['nik_dosen'] ?>" />
        </p>
        <p>
            <label for="nama_dosen">Nama: </label>
            <input type="text" name="nama_dosen" placeholder="nama lengkap" value="<?php echo $dosen['nama_dosen'] ?>" />
        </p>
        <p>
            <label for="alamat_dosen">Alamat: </label>
            <textarea name="alamat_dosen"><?php echo $dosen['alamat_dosen'] ?></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $dosen['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk =='laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk =='perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="skill_dosen">Skill: </label>
            <?php $skill = $dosen['skill_dosen']; ?>
            <select name="skill_dosen">
                <option <?php echo ($skill == 'Nyuntik Pasta Prosesor') ? "selected": ""?>>Nyuntik</option>
                <option <?php echo ($skill == 'Ngerawat Virus') ? "selected": ""?>>Ngerawat</option>
                <option <?php echo ($skill == 'Operasi Casing') ? "selected": ""?>>Operasi</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Save" name="edit" />
        </p>
    </fieldset>
</form><br>
<br>
    </div>
