<?php
include('koneksi.php');
$query = 'SELECT * FROM anggota';
$result = mysqli_query($conn, $query);

$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>Penyewaan Tenda Ninja Adventure</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/modernizr-2.7.1.js"></script>
  
</head>

<body>

    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.html"><img src="img/logo.svg" alt="Logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="index.html"><img src="img/logo.svg" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <div class="col-xs-6 text-right wow fadeInUp" data-wow-delay="0.5s">
              <a href="login.php" class="btn btn-secondary btn-lg ">Login</a>
            </div>
            <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1s">
              <a href="register.php" class="btn btn-primary btn-lg">Register</a>
            </div>
          </div>
        </div>
        
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center fadeInUp">
            <h1 class="wow fadeIn">Ninja Adventure</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">Tempat Penyewaan alat Outdoor Terlengkap <br>
            Dengan kualitas alat yang terjamin dan harga yang terjangkau.</p>
            <br />
            
          </div>
        </div>
      </div>
    </header>
    
    <div class="mouse-icon hidden-xs">
				<div class="scroll"></div>
			</div>     
    
    <!--Pricing-->
    <section id="pricing" class="pad-sm">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="white">Harga Penyewaan</h2>
            <p class="white">Harga yang sangat terjangkau dihitung per malam. Temukan alat Outdoor yang lain dengan harga yang lebih murah.</p>
          </div>
        </div>
        
        <div class="row margin-50">
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
    					<li class="headline"><h5 class="white"></h5>Matras</li>
    					<li class="price"><div class="amount">Rp3.000<small>/hari</small></div></li>
    					<li class="info">Matras berukuran 185 x 60 cm yang dapat digunakan dimana saja.</li>
    					<li class="features first">Up To 25 Projects</li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
    				</ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
            <ul class="list-unstyled pricing-table active text-center">
    					<li class="headline"><h5 class="white">Tenda Dome Kap 4 org</h5></li>
    					<li class="price"><div class="amount">Rp35.000<small>/hari</small></div></li>
    					<li class="info">Tenda Dengan ukuran 240 x 210 x 130 cm yang dapat menampung sebanya 4 orang sekaligus.</li>
    					<li class="features first">Up To 25 Projects</li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
    				</ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
    					<li class="headline"><h5 class="white">Tas Carrier 30L</h5></li>
    					<li class="price"><div class="amount">Rp12.000<small>/hari</small></div></li>
    					<li class="info">Tas keren yang dapat menampung beban sebanyak 30L dalam satu waktu.</li>
    					<li class="features first">Up To 25 Projects</li>
    					<li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
    				</ul>
          </div>
          
        </div>
        
      </div>
    </section>
    
    
    <footer>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Kontak Kami lewat Social Media</li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/Ninja-Adventure-922340721229390/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/ninja_adv/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 text-right">
            <p><small>Copyright &copy; 2019. All rights reserved. <br>
	            Dibuat Oleh <a href="http://visualsoldiers.com">Kelompok 4</a></small></p>
          </div>
        </div>
        
      </div>
    </footer>
    
    
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