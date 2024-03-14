<html>
<head>
    <title>Tambah Data Mhs</title>
</head>

<body>
    <a href="koneksi.php">Ke Beranda</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form6">
        <table width="25%" border="0">
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="NIM"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Umur</td>
                <td><input type="text" name="Umur"></td>
            </tr>
            <tr> 
                <td>Tempat Lahir</td>
                <td><input type="text" name="Tempat Lahir"></td>
            </tr>
            <tr> 
                <td>IPK</td>
                <td><input type="text" name="IPK"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $username = $_POST['NIM'];
        $password = $_POST['Nama'];
        $nama = $_POST['Umur'];
        $nohape = $_POST['Tempat Lahir'];
        $alamat = $_POST['IPK'];
        
        include_once("koneksi.php");
        
        $result = mysqli_query($link, "INSERT INTO anggota VALUES('$username','$password','$nama','$nohape','$alamat')");
        echo "User added successfully. <a href='materikoneksi.php'>Lihat daftar mhs</a>";
    }
    ?>
</body>
</html>