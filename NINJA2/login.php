<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="light-bootstrap-dashboard.css">
</head>

<body>
    <div class="bg">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="background-color:rgba(255,255,255,0.3); margin-top:150px; padding-left:40px; padding-right:40px;">
                <h1 style="text-align:center">Login</h1>
                <form class="form-horizontal" method="POST" action="Validasi.php" name="form">

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
                    <input class="btn btn-primary" type="submit" onclick="login()" value="Login"
                        style="margin-bottom:10px">
                </form>


                <?php
		if(isset($_POST["username1"]) && $_POST["passwot"]) {
			echo "<br>Username : ".$_POST["username1"];
			echo "<br>Password : ".$_POST["passwot"];
		}
	    ?>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <script>
        function login() {
            var form = document.getElementsByName("form");
            var nama = document.getElementById("username1").value;
            var nim = document.getElementById("passwot").value;

            if (username != "" && password != "") {
                form[0].submit();
            }
            else {
                if (nama == "") {
                    document.getElementById("error_username").innerHTML = "username tidak boleh kosong";
                }
                if (nim == "") {
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