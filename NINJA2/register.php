<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="light-bootstrap-dashboard.css">
</head>

<body>
    <div class="bg">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="background-color:rgba(255,255,255,0.3); margin-top:50px; padding-left:40px; padding-right:40px;">
                <h1 style="text-align:center">Registrasi dengan Ninja Adventure</h1>
                <form class="form-horizontal" method="POST" action="register.php" name="form1">

                    <div class="form-group">
                        <label class="control-label" for="pwd">Username :</label>
                        <input type="text" class="form-control" id="username1" placeholder="Masukkan username"
                            name="username1">
                        <span id="error_username"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pwd">Password :</label>
                        <input type="password" class="form-control" id="passwot" placeholder="Masukkan Password"
                            name="passwot">
                        <span id="error_password"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pwd">Nama Lengkap :</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap"
                            name="nama">
                        <span id="error_username"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pwd">Nomor HP</label>
                        <input type="" class="form-control" id="nohape" placeholder="Masukkan Nomor HP yang dapat dihubungi"
                            name="nohape">
                        <span id="error_username"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pwd">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda"
                            name="alamat">
                        <span id="error_username"></span>
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" onclick="register()" value="Register"
                        style="margin-bottom:10px">
                </form>


            <?php

                if(isset($_POST['submit'])) {
                    $username1 = $_POST['username1'];
                    $passwot = $_POST['passwot'];
                    $nama = $_POST['nama'];
                    $nohape = $_POST['nohape'];
                    $alamat = $_POST['alamat'];
                    
                    include_once("koneksi.php");
                    
                    $result = mysqli_query($conn, "INSERT INTO anggota VALUES('','$username1','$passwot','$nama','$nohape','$alamat')");
                    echo "User added successfully. <a href='login.php'>Lanjut Login</a>";
                }


	        ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <script>
        function register() {
            var form = document.getElementsByName("form");
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var nama = document.getElementById("nama").value;
            var nohape = document.getElementById("nohape").value;
            var alamat = document.getElementById("alamat").value;

            if (username != "" && password != "") {
                form[0].submit();
            }
            else {
                if (username == "") {
                    document.getElementById("error_username").innerHTML = "username tidak boleh kosong";
                }
                if (password == "") {
                    document.getElementById("error_password").innerHTML = "password tidak boleh kosong";
                }
            }
        }
    </script>

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>