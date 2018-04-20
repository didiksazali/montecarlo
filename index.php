<!DOCTYPE html>


<?php
session_start();
error_reporting(1);
include 'include/koneksi.php';

//Mengecek session login
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
    //echo "<center>Untuk mengakses Halaman, Anda harus login <br>";
    //echo "<a href=../index.php><b>LOGIN</b></a></center>";
	 //header("location:../index.php");
	echo ' <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<title>Teknik Simulasi & Pemodelan</title>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
				<form action="proseslogin.php" method="post">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	</form>';
}
else{
    if(time()<$_SESSION['timeout'])
    {

?>



<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teknik Simulasi & Pemodelan</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include 'include/header.php';
    include 'include/sidebar.php'; ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Home</h1>
			</div>
		</div><!--/.row-->


				<div class="panel panel-primary">
					<div class="panel-heading">
						Welcome
					</div>
					<div class="panel-body">
						<p>Selamat Datang di Aplikasi Monte Carlo Simulasi pada Penjualan dan Harga Jual.
						<br>Untuk menjalankan aplikasi silahkan pilih menu Simulation di menu side bar.</p>
					</div>
				</div>

	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>


<?php
    }
    else
    {
        session_destroy();
		echo '<script type="text/javascript">';
		echo 'alert("Sesi anda sudah habis, silahkan login kembali");';
		echo 'window.location.href="index.php";';
		echo '</script>';


    }
}
