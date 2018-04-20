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


<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>





<script type="text/javascript">
$(document).ready(function() {
$('#hargap5').keyup(function(){
<!-- Ambil nilai bayar dan diskon !-->
var hargap1=parseInt($('#hargap1').val());
var hargap2=parseInt($('#hargap2').val());
var hargap3=parseInt($('#hargap3').val());
var hargap4=parseInt($('#hargap4').val());
var hargap5=parseInt($('#hargap5').val());


<!-- Perhitungan bayar-(diskon/100 x bayar) !-->
var hasilhargap1=hargap1;
var hasilhargap2=hargap2;
var hasilhargap3=hargap3;
var hasilhargap4=hargap4;
var hasilhargap5=hargap5;
$('#hasilhargap1').val(hasilhargap1);
$('#hasilhargap2').val(hasilhargap2);
$('#hasilhargap3').val(hasilhargap3);
$('#hasilhargap4').val(hasilhargap4);
$('#hasilhargap5').val(hasilhargap5);

var hasilhargapp1=hargap1;
var hasilhargapp2=hargap2;
var hasilhargapp3=hargap3;
var hasilhargapp4=hargap4;
var hasilhargapp5=hargap5;
$('#hasilhargapp1').val(hasilhargapp1);
$('#hasilhargapp2').val(hasilhargapp2);
$('#hasilhargapp3').val(hasilhargapp3);
$('#hasilhargapp4').val(hasilhargapp4);
$('#hasilhargapp5').val(hasilhargapp5);


var hasilhargappp1=hargap1;
var hasilhargappp2=hargap2;
var hasilhargappp3=hargap3;
var hasilhargappp4=hargap4;
var hasilhargappp5=hargap5;
$('#hasilhargappp1').val(hasilhargappp1);
$('#hasilhargappp2').val(hasilhargappp2);
$('#hasilhargappp3').val(hasilhargappp3);
$('#hasilhargappp4').val(hasilhargappp4);
$('#hasilhargappp5').val(hasilhargappp5);


});
});
</script>


<script type="text/javascript">
$(document).ready(function() {
$('#distri5').keyup(function(){
<!-- Ambil nilai bayar dan diskon !-->
var distri1=parseFloat($('#distri1').val());
var distri2=parseFloat($('#distri2').val());
var distri3=parseFloat($('#distri3').val());
var distri4=parseFloat($('#distri4').val());
var distri5=parseFloat($('#distri5').val());

var hasildistri1=distri1;
var hasildistri2=distri2;
var hasildistri3=distri3;
var hasildistri4=distri4;
var hasildistri5=distri5;
$('#hasildistri1').val(hasildistri1);
$('#hasildistri2').val(hasildistri2);
$('#hasildistri3').val(hasildistri3);
$('#hasildistri4').val(hasildistri4);
$('#hasildistri5').val(hasildistri5);


var hasilcdfhp1=distri1;
var hasilcdfhp2=distri1+distri2;
var hasilcdfhp3=distri1+distri2+distri3;
var hasilcdfhp4=distri1+distri2+distri3+distri4;
var hasilcdfhp5=distri1+distri2+distri3+distri4+distri5;
$('#hasilcdfhp1').val(hasilcdfhp1);
$('#hasilcdfhp2').val(hasilcdfhp2);
$('#hasilcdfhp3').val(hasilcdfhp3);
$('#hasilcdfhp4').val(hasilcdfhp4);
$('#hasilcdfhp5').val(hasilcdfhp5);



});
});
</script>


			<script type="text/javascript">
			$(document).ready(function() {
		$('#demanda3').keyup(function(){
		<!-- Ambil nilai bayar dan diskon !-->
		var demanda1=parseInt($('#demanda1').val());
		var demanda2=parseInt($('#demanda2').val());
		var demanda3=parseInt($('#demanda3').val());

		var hasildemanda1=demanda1;
		var hasildemanda2=demanda2;
		var hasildemanda3=demanda3;
		$('#hasildemanda1').val(hasildemanda1);
		$('#hasildemanda2').val(hasildemanda2);
		$('#hasildemanda3').val(hasildemanda3);

		});
	});
			</script>



			<script type="text/javascript">
			$(document).ready(function() {
			$('#proba3').keyup(function(){
			<!-- Ambil nilai bayar dan diskon !-->
			var proba1=parseFloat($('#proba1').val());
			var proba2=parseFloat($('#proba2').val());
			var proba3=parseFloat($('#proba3').val());


			var hasilproba1=proba1;
			var hasilproba2=proba2;
			var hasilproba3=proba3;
			$('#hasilproba1').val(hasilproba1);
			$('#hasilproba2').val(hasilproba2);
			$('#hasilproba3').val(hasilproba3);

			var cdfa1=proba1;
			var cdfa2=proba1+proba2;
			var cdfa3=proba1+proba2+proba3;


			var hasilcdfa1=cdfa1;
			var hasilcdfa2=cdfa2;
			var hasilcdfa3=cdfa3;
			$('#hasilcdfa1').val(hasilcdfa1);
			$('#hasilcdfa2').val(hasilcdfa2);
			$('#hasilcdfa3').val(hasilcdfa3);

			});
			});
			</script>



						<script type="text/javascript">
						$(document).ready(function() {
					$('#demandb3').keyup(function(){
					<!-- Ambil nilai bayar dan diskon !-->
					var demandb1=parseInt($('#demandb1').val());
					var demandb2=parseInt($('#demandb2').val());
					var demandb3=parseInt($('#demandb3').val());

					var hasildemandb1=demandb1;
					var hasildemandb2=demandb2;
					var hasildemandb3=demandb3;
					$('#hasildemandb1').val(hasildemandb1);
					$('#hasildemandb2').val(hasildemandb2);
					$('#hasildemandb3').val(hasildemandb3);

					});
				});
						</script>


						<script type="text/javascript">
						$(document).ready(function() {
						$('#probb3').keyup(function(){

						var probb1=parseFloat($('#probb1').val());
						var probb2=parseFloat($('#probb2').val());
						var probb3=parseFloat($('#probb3').val());

						var hasilprobb1=probb1;
						var hasilprobb2=probb2;
						var hasilprobb3=probb3;
						$('#hasilprobb1').val(hasilprobb1);
						$('#hasilprobb2').val(hasilprobb2);
						$('#hasilprobb3').val(hasilprobb3);


						var cdfb1=probb1;
						var cdfb2=probb1+probb2;
						var cdfb3=probb1+probb2+probb3;


						var hasilcdfb1=cdfb1;
						var hasilcdfb2=cdfb2;
						var hasilcdfb3=cdfb3;
						$('#hasilcdfb1').val(hasilcdfb1);
						$('#hasilcdfb2').val(hasilcdfb2);
						$('#hasilcdfb3').val(hasilcdfb3);

						});
						});
						</script>




									<script type="text/javascript">
									$(document).ready(function() {
								$('#demandc3').keyup(function(){
								<!-- Ambil nilai bayar dan diskon !-->
								var demandc1=parseInt($('#demandc1').val());
								var demandc2=parseInt($('#demandc2').val());
								var demandc3=parseInt($('#demandc3').val());

								var hasildemandc1=demandc1;
								var hasildemandc2=demandc2;
								var hasildemandc3=demandc3;
								$('#hasildemandc1').val(hasildemandc1);
								$('#hasildemandc2').val(hasildemandc2);
								$('#hasildemandc3').val(hasildemandc3);

								});
							});
									</script>


									<script type="text/javascript">
									$(document).ready(function() {
									$('#probc3').keyup(function(){

									var probc1=parseFloat($('#probc1').val());
									var probc2=parseFloat($('#probc2').val());
									var probc3=parseFloat($('#probc3').val());


									var hasilprobc1=probc1;
									var hasilprobc2=probc2;
									var hasilprobc3=probc3;
									$('#hasilprobc1').val(hasilprobc1);
									$('#hasilprobc2').val(hasilprobc2);
									$('#hasilprobc3').val(hasilprobc3);


									var cdfc1=probc1;
									var cdfc2=probc1+probc2;
									var cdfc3=probc1+probc2+probc3;


									var hasilcdfc1=cdfc1;
									var hasilcdfc2=cdfc2;
									var hasilcdfc3=cdfc3;
									$('#hasilcdfc1').val(hasilcdfc1);
									$('#hasilcdfc2').val(hasilcdfc2);
									$('#hasilcdfc3').val(hasilcdfc3);


									});
									});
									</script>


												<script type="text/javascript">
												$(document).ready(function() {
											$('#demandd3').keyup(function(){

											var demandd1=parseInt($('#demandd1').val());
											var demandd2=parseInt($('#demandd2').val());
											var demandd3=parseInt($('#demandd3').val());


											var hasildemandd1=demandd1;
											var hasildemandd2=demandd2;
											var hasildemandd3=demandd3;
											$('#hasildemandd1').val(hasildemandd1);
											$('#hasildemandd2').val(hasildemandd2);
											$('#hasildemandd3').val(hasildemandd3);

											});
										});
												</script>



												<script type="text/javascript">
												$(document).ready(function() {
												$('#probd3').keyup(function(){

												var probd1=parseFloat($('#probd1').val());
												var probd2=parseFloat($('#probd2').val());
												var probd3=parseFloat($('#probd3').val());


												var hasilprobd1=probd1;
												var hasilprobd2=probd2;
												var hasilprobd3=probd3;
												$('#hasilprobd1').val(hasilprobd1);
												$('#hasilprobd2').val(hasilprobd2);
												$('#hasilprobd3').val(hasilprobd3);


												var cdfd1=probd1;
												var cdfd2=probd1+probd2;
												var cdfd3=probd1+probd2+probd3;


												var hasilcdfd1=cdfd1;
												var hasilcdfd2=cdfd2;
												var hasilcdfd3=cdfd3;
												$('#hasilcdfd1').val(hasilcdfd1);
												$('#hasilcdfd2').val(hasilcdfd2);
												$('#hasilcdfd3').val(hasilcdfd3);


												});
												});
												</script>



															<script type="text/javascript">
															$(document).ready(function() {
														$('#demande3').keyup(function(){

														var demande1=parseInt($('#demande1').val());
														var demande2=parseInt($('#demande2').val());
														var demande3=parseInt($('#demande3').val());


														var hasildemande1=demande1;
														var hasildemande2=demande2;
														var hasildemande3=demande3;
														$('#hasildemande1').val(hasildemande1);
														$('#hasildemande2').val(hasildemande2);
														$('#hasildemande3').val(hasildemande3);

														});
													});
															</script>


															<script type="text/javascript">
															$(document).ready(function() {
															$('#probe3').keyup(function(){

															var probe1=parseFloat($('#probe1').val());
															var probe2=parseFloat($('#probe2').val());
															var probe3=parseFloat($('#probe3').val());



															var hasilprobe1=probe1;
															var hasilprobe2=probe2;
															var hasilprobe3=probe3;
															$('#hasilprobe1').val(hasilprobe1);
															$('#hasilprobe2').val(hasilprobe2);
															$('#hasilprobe3').val(hasilprobe3);



															var cdfe1=probe1;
															var cdfe2=probe1+probe2;
															var cdfe3=probe1+probe2+probe3;


															var hasilcdfe1=cdfe1;
															var hasilcdfe2=cdfe2;
															var hasilcdfe3=cdfe3;
															$('#hasilcdfe1').val(hasilcdfe1);
															$('#hasilcdfe2').val(hasilcdfe2);
															$('#hasilcdfe3').val(hasilcdfe3);


															});
															});
															</script>




			<script type="text/javascript">
			$(document).ready(function() {
		$('#harga5').keyup(function(){
		<!-- Ambil nilai bayar dan diskon !-->
		var harga1=parseFloat($('#harga1').val());
		var harga2=parseFloat($('#harga2').val());
		var harga3=parseFloat($('#harga3').val());
		var harga4=parseFloat($('#harga4').val());
		var harga5=parseFloat($('#harga5').val());

		var hargap1=parseInt($('#hargap1').val());
		var hargap2=parseInt($('#hargap2').val());
		var hargap3=parseInt($('#hargap3').val());
		var hargap4=parseInt($('#hargap4').val());
		var hargap5=parseInt($('#hargap5').val());
		var distri1=parseFloat($('#distri1').val());
		var distri2=parseFloat($('#distri2').val());
		var distri3=parseFloat($('#distri3').val());
		var distri4=parseFloat($('#distri4').val());
		var distri5=parseFloat($('#distri5').val());
		var hasilcdfhp1=distri1;
		var hasilcdfhp2=distri1+distri2;
		var hasilcdfhp3=distri1+distri2+distri3;
		var hasilcdfhp4=distri1+distri2+distri3+distri4;
		var hasilcdfhp5=distri1+distri2+distri3+distri4+distri5;
		$('#hasilcdfhp1').val(hasilcdfhp1);
		$('#hasilcdfhp2').val(hasilcdfhp2);
		$('#hasilcdfhp3').val(hasilcdfhp3);
		$('#hasilcdfhp4').val(hasilcdfhp4);
		$('#hasilcdfhp5').val(hasilcdfhp5);


		var penjualan1=harga1;
		var penjualan2=harga2;
		var penjualan3=harga3;
		var penjualan4=harga4;
		var penjualan5=harga5;
		$('#penjualan1').val(penjualan1);
		$('#penjualan2').val(penjualan2);
		$('#penjualan3').val(penjualan3);
		$('#penjualan4').val(penjualan4);
		$('#penjualan5').val(penjualan5);




		});
	});
			</script>



						<script type="text/javascript">
						$(document).ready(function() {
					$('#mintaan5').keyup(function(){


			    var mintaan1=parseFloat($('#mintaan1').val());
					var mintaan2=parseFloat($('#mintaan2').val());
					var mintaan3=parseFloat($('#mintaan3').val());
					var mintaan4=parseFloat($('#mintaan4').val());
					var mintaan5=parseFloat($('#mintaan5').val());



					var permintaan1=mintaan1;
					var permintaan2=mintaan2;
					var permintaan3=mintaan3;
					var permintaan4=mintaan4;
					var permintaan5=mintaan5;
					$('#permintaan1').val(permintaan1);
					$('#permintaan2').val(permintaan2);
					$('#permintaan3').val(permintaan3);
					$('#permintaan4').val(permintaan4);
					$('#permintaan5').val(permintaan5);




//untuk rumus
var harga1=parseFloat($('#harga1').val());
var harga2=parseFloat($('#harga2').val());
var harga3=parseFloat($('#harga3').val());
var harga4=parseFloat($('#harga4').val());
var harga5=parseFloat($('#harga5').val());

var hargap1=parseInt($('#hargap1').val());
var hargap2=parseInt($('#hargap2').val());
var hargap3=parseInt($('#hargap3').val());
var hargap4=parseInt($('#hargap4').val());
var hargap5=parseInt($('#hargap5').val());
var distri1=parseFloat($('#distri1').val());
var distri2=parseFloat($('#distri2').val());
var distri3=parseFloat($('#distri3').val());
var distri4=parseFloat($('#distri4').val());
var distri5=parseFloat($('#distri5').val());
var hasilcdfhp1=distri1;
var hasilcdfhp2=distri1+distri2;
var hasilcdfhp3=distri1+distri2+distri3;
var hasilcdfhp4=distri1+distri2+distri3+distri4;
var hasilcdfhp5=distri1+distri2+distri3+distri4+distri5;
$('#hasilcdfhp1').val(hasilcdfhp1);
$('#hasilcdfhp2').val(hasilcdfhp2);
$('#hasilcdfhp3').val(hasilcdfhp3);
$('#hasilcdfhp4').val(hasilcdfhp4);
$('#hasilcdfhp5').val(hasilcdfhp5);

var demanda1=parseInt($('#demanda1').val());
var demanda2=parseInt($('#demanda2').val());
var demanda3=parseInt($('#demanda3').val());

var hasildemanda1=demanda1;
var hasildemanda2=demanda2;
var hasildemanda3=demanda3;
$('#hasildemanda1').val(hasildemanda1);
$('#hasildemanda2').val(hasildemanda2);
$('#hasildemanda3').val(hasildemanda3);

var demandb1=parseInt($('#demandb1').val());
var demandb2=parseInt($('#demandb2').val());
var demandb3=parseInt($('#demandb3').val());



var hasildemandb1=demandb1;
var hasildemandb2=demandb2;
var hasildemandb3=demandb3;
$('#hasildemandb1').val(hasildemandb1);
$('#hasildemandb2').val(hasildemandb2);
$('#hasildemandb3').val(hasildemandb3);



var demandc1=parseInt($('#demandc1').val());
var demandc2=parseInt($('#demandc2').val());
var demandc3=parseInt($('#demandc3').val());



var hasildemandc1=demandc1;
var hasildemandc2=demandc2;
var hasildemandc3=demandc3;
$('#hasildemandc1').val(hasildemandc1);
$('#hasildemandc2').val(hasildemandc2);
$('#hasildemandc3').val(hasildemandc3);


var demandd1=parseInt($('#demandd1').val());
var demandd2=parseInt($('#demandd2').val());
var demandd3=parseInt($('#demandd3').val());



var hasildemandd1=demandd1;
var hasildemandd2=demandd2;
var hasildemandd3=demandd3;
$('#hasildemandd1').val(hasildemandd1);
$('#hasildemandd2').val(hasildemandd2);
$('#hasildemandd3').val(hasildemandd3);


var demande1=parseInt($('#demande1').val());
var demande2=parseInt($('#demande2').val());
var demande3=parseInt($('#demande3').val());



var hasildemande1=demande1;
var hasildemande2=demande2;
var hasildemande3=demande3;
$('#hasildemande1').val(hasildemande1);
$('#hasildemande2').val(hasildemande2);
$('#hasildemande3').val(hasildemande3);



var hasilhargappp1=hargap1;
var hasilhargappp2=hargap2;
var hasilhargappp3=hargap3;
var hasilhargappp4=hargap4;
var hasilhargappp5=hargap5;
$('#hasilhargappp1').val(hasilhargappp1);
$('#hasilhargappp2').val(hasilhargappp2);
$('#hasilhargappp3').val(hasilhargappp3);
$('#hasilhargappp4').val(hasilhargappp4);
$('#hasilhargappp5').val(hasilhargappp5);


var proba1=parseFloat($('#proba1').val());
var proba2=parseFloat($('#proba2').val());
var proba3=parseFloat($('#proba3').val());


var hasilproba1=proba1;
var hasilproba2=proba2;
var hasilproba3=proba3;
$('#hasilproba1').val(hasilproba1);
$('#hasilproba2').val(hasilproba2);
$('#hasilproba3').val(hasilproba3);

var cdfa1=proba1;
var cdfa2=proba1+proba2;
var cdfa3=proba1+proba2+proba3;


var hasilcdfa1=cdfa1;
var hasilcdfa2=cdfa2;
var hasilcdfa3=cdfa3;
$('#hasilcdfa1').val(hasilcdfa1);
$('#hasilcdfa2').val(hasilcdfa2);
$('#hasilcdfa3').val(hasilcdfa3);

var probb1=parseFloat($('#probb1').val());
var probb2=parseFloat($('#probb2').val());
var probb3=parseFloat($('#probb3').val());


var hasilprobb1=probb1;
var hasilprobb2=probb2;
var hasilprobb3=probb3;
$('#hasilprobb1').val(hasilprobb1);
$('#hasilprobb2').val(hasilprobb2);
$('#hasilprobb3').val(hasilprobb3);


var cdfb1=probb1;
var cdfb2=probb1+probb2;
var cdfb3=probb1+probb2+probb3;



var hasilcdfb1=cdfb1;
var hasilcdfb2=cdfb2;
var hasilcdfb3=cdfb3;
$('#hasilcdfb1').val(hasilcdfb1);
$('#hasilcdfb2').val(hasilcdfb2);
$('#hasilcdfb3').val(hasilcdfb3);

var probc1=parseFloat($('#probc1').val());
var probc2=parseFloat($('#probc2').val());
var probc3=parseFloat($('#probc3').val());


var hasilprobc1=probc1;
var hasilprobc2=probc2;
var hasilprobc3=probc3;
$('#hasilprobc1').val(hasilprobc1);
$('#hasilprobc2').val(hasilprobc2);
$('#hasilprobc3').val(hasilprobc3);


var cdfc1=probc1;
var cdfc2=probc1+probc2;
var cdfc3=probc1+probc2+probc3;



var hasilcdfc1=cdfc1;
var hasilcdfc2=cdfc2;
var hasilcdfc3=cdfc3;
$('#hasilcdfc1').val(hasilcdfc1);
$('#hasilcdfc2').val(hasilcdfc2);
$('#hasilcdfc3').val(hasilcdfc3);

var probd1=parseFloat($('#probd1').val());
var probd2=parseFloat($('#probd2').val());
var probd3=parseFloat($('#probd3').val());


var hasilprobd1=probd1;
var hasilprobd2=probd2;
var hasilprobd3=probd3;
$('#hasilprobd1').val(hasilprobd1);
$('#hasilprobd2').val(hasilprobd2);
$('#hasilprobd3').val(hasilprobd3);


var cdfd1=probd1;
var cdfd2=probd1+probd2;
var cdfd3=probd1+probd2+probd3;


var hasilcdfd1=cdfd1;
var hasilcdfd2=cdfd2;
var hasilcdfd3=cdfd3;
$('#hasilcdfd1').val(hasilcdfd1);
$('#hasilcdfd2').val(hasilcdfd2);
$('#hasilcdfd3').val(hasilcdfd3);

var probe1=parseFloat($('#probe1').val());
var probe2=parseFloat($('#probe2').val());
var probe3=parseFloat($('#probe3').val());


var hasilprobe1=probe1;
var hasilprobe2=probe2;
var hasilprobe3=probe3;
$('#hasilprobe1').val(hasilprobe1);
$('#hasilprobe2').val(hasilprobe2);
$('#hasilprobe3').val(hasilprobe3);


var cdfe1=probe1;
var cdfe2=probe1+probe2;
var cdfe3=probe1+probe2+probe3;


var hasilcdfe1=cdfe1;
var hasilcdfe2=cdfe2;
var hasilcdfe3=cdfe3;
$('#hasilcdfe1').val(hasilcdfe1);
$('#hasilcdfe2').val(hasilcdfe2);
$('#hasilcdfe3').val(hasilcdfe3);



//testing
if (harga1<=hasilcdfhp1) {
	var hargajualr1=hargap1;
	var hasilhargajualr1=hargajualr1;
	$('#hasilhargajualr1').val(hasilhargajualr1);
	if (mintaan1<=hasilcdfa1) {
			var demandr1=demanda1;
			var hasildemandr1=demandr1;
			$('#hasildemandr1').val(hasildemandr1);
			var gir1=demanda1*hargap1;
			var hasilgir1=gir1;
			$('#hasilgir1').val(hasilgir1);
		}
			else if (mintaan1<=hasilcdfa2) {
					var demandr1=demanda2;
					var hasildemandr1=demandr1;
					$('#hasildemandr1').val(hasildemandr1);
					var gir1=demanda2*hargap1;
					var hasilgir1=gir1;
					$('#hasilgir1').val(hasilgir1);
				}
					else if (mintaan1<=hasilcdfa3) {
							var demandr1=demanda3;
							var hasildemandr1=demandr1;
							$('#hasildemandr1').val(hasildemandr1);
							var gir1=demanda3*hargap1;
							var hasilgir1=gir1;
							$('#hasilgir1').val(hasilgir1);
						}
}
else if (harga1<=hasilcdfhp2) {
	var hargajualr1=hargap2;
	var hasilhargajualr1=hargajualr1;
	$('#hasilhargajualr1').val(hasilhargajualr1);
	if (mintaan1<=hasilcdfb1) {
			var demandr1=demandb1;
			var hasildemandr1=demandr1;
			$('#hasildemandr1').val(hasildemandr1);
			var gir1=demandb1*hargap2;
			var hasilgir1=gir1;
			$('#hasilgir1').val(hasilgir1);
		}
			else if (mintaan1<=hasilcdfb2) {
				var demandr1=demandb2;
				var hasildemandr1=demandr1;
				$('#hasildemandr1').val(hasildemandr1);
				var gir1=demandb2*hargap2;
				var hasilgir1=gir1;
				$('#hasilgir1').val(hasilgir1);
			}
					else if (mintaan1<=hasilcdfb3) {
						var demandr1=demandb3;
						var hasildemandr1=demandr1;
						$('#hasildemandr1').val(hasildemandr1);
						var gir1=demandb3*hargap2;
						var hasilgir1=gir1;
						$('#hasilgir1').val(hasilgir1);
					}
}
else if (harga1<=hasilcdfhp3) {
	var hargajualr1=hargap3;
	var hasilhargajualr1=hargajualr1;
	$('#hasilhargajualr1').val(hasilhargajualr1);
	if (mintaan1<=hasilcdfc1) {
			var demandr1=demandc1;
			var hasildemandr1=demandr1;
			$('#hasildemandr1').val(hasildemandr1);
			var gir1=demandc1*hargap3;
			var hasilgir1=gir1;
			$('#hasilgir1').val(hasilgir1);
		}
			else if (mintaan1<=hasilcdfc2) {
				var demandr1=demandc2;
				var hasildemandr1=demandr1;
				$('#hasildemandr1').val(hasildemandr1);
				var gir1=demandc2*hargap3;
				var hasilgir1=gir1;
				$('#hasilgir1').val(hasilgir1);
			}
					else if (mintaan1<=hasilcdfc3) {
						var demandr1=demandc3;
						var hasildemandr1=demandr1;
						$('#hasildemandr1').val(hasildemandr1);
						var gir1=demandc3*hargap3;
						var hasilgir1=gir1;
						$('#hasilgir1').val(hasilgir1);
					}
}
else if (harga1<=hasilcdfhp4) {
	var hargajualr1=hargap4;
	var hasilhargajualr1=hargajualr1;
	$('#hasilhargajualr1').val(hasilhargajualr1);
	if (mintaan1<=hasilcdfd1) {
			var demandr1=demandd1;
			var hasildemandr1=demandr1;
			$('#hasildemandr1').val(hasildemandr1);
			var gir1=demandd1*hargap1;
			var hasilgir1=gir1;
			$('#hasilgir1').val(hasilgir1);
		}
			else if (mintaan1<=hasilcdfd2) {
				var demandr1=demandd2;
				var hasildemandr1=demandr1;
				$('#hasildemandr1').val(hasildemandr1);
				var gir1=demandd2*hargap4;
				var hasilgir1=gir1;
				$('#hasilgir1').val(hasilgir1);
			}
					else if (mintaan1<=hasilcdfd3) {
						var demandr1=demandd3;
						var hasildemandr1=demandr1;
						$('#hasildemandr1').val(hasildemandr1);
						var gir1=demandd3*hargap4;
						var hasilgir1=gir1;
						$('#hasilgir1').val(hasilgir1);
					}
}
else if (harga1<=hasilcdfhp5) {
	var hargajualr1=hargap5;
	var hasilhargajualr1=hargajualr1;
	$('#hasilhargajualr1').val(hasilhargajualr1);
	if (mintaan1<=hasilcdfe1) {
			var demandr1=demande1;
			var hasildemandr1=demandr1;
			$('#hasildemandr1').val(hasildemandr1);
			var gir1=demande1*hargap5;
			var hasilgir1=gir1;
			$('#hasilgir1').val(hasilgir1);
		}
			else if (mintaan1<=hasilcdfe2) {
				var demandr1=demande2;
				var hasildemandr1=demandr1;
				$('#hasildemandr1').val(hasildemandr1);
				var gir1=demande2*hargap5;
				var hasilgir1=gir1;
				$('#hasilgir1').val(hasilgir1);
			}
					else if (mintaan1<=hasilcdfe3) {
						var demandr1=demande3;
						var hasildemandr1=demandr1;
						$('#hasildemandr1').val(hasildemandr1);
						var gir1=demande3*hargap5;
						var hasilgir1=gir1;
						$('#hasilgir1').val(hasilgir1);
					}
}

if (harga2<=hasilcdfhp1) {
	var hargajualr2=hargap1;
	var hasilhargajualr2=hargajualr2;
	$('#hasilhargajualr2').val(hasilhargajualr2);
	if (mintaan2<=hasilcdfa1) {
			var demandr2=demanda1;
			var hasildemandr2=demandr2;
			$('#hasildemandr2').val(hasildemandr2);
			var gir2=demanda1*hargap1;
			var hasilgir2=gir2;
			$('#hasilgir2').val(hasilgir2);
		}
			else if (mintaan2<=hasilcdfa2) {
					var demandr2=demanda2;
					var hasildemandr2=demandr2;
					$('#hasildemandr2').val(hasildemandr2);
					var gir2=demanda2*hargap1;
					var hasilgir2=gir2;
					$('#hasilgir2').val(hasilgir2);
				}
					else if (mintaan2<=hasilcdfa3) {
							var demandr2=demanda3;
							var hasildemandr2=demandr2;
							$('#hasildemandr2').val(hasildemandr2);
							var gir2=demanda3*hargap1;
							var hasilgir2=gir2;
							$('#hasilgir2').val(hasilgir2);
						}
}
else if (harga2<=hasilcdfhp2) {
	var hargajualr2=hargap2;
	var hasilhargajualr2=hargajualr2;
	$('#hasilhargajualr2').val(hasilhargajualr2);
	if (mintaan2<=hasilcdfb1) {
			var demandr2=demandb1;
			var hasildemandr2=demandr2;
			$('#hasildemandr2').val(hasildemandr2);
			var gir2=demandb1*hargap2;
			var hasilgir2=gir2;
			$('#hasilgir2').val(hasilgir2);
		}
			else if (mintaan2<=hasilcdfb2) {
					var demandr2=demandb2;
					var hasildemandr2=demandr2;
					$('#hasildemandr2').val(hasildemandr2);
					var gir2=demandb2*hargap2;
					var hasilgir2=gir2;
					$('#hasilgir2').val(hasilgir2);
				}
					else if (mintaan2<=hasilcdfb3) {
							var demandr2=demandb3;
							var hasildemandr2=demandr2;
							$('#hasildemandr2').val(hasildemandr2);
							var gir2=demandb3*hargap2;
							var hasilgir2=gir2;
							$('#hasilgir2').val(hasilgir2);
						}
}
else if (harga2<=hasilcdfhp3) {
	var hargajualr2=hargap3;
	var hasilhargajualr2=hargajualr2;
	$('#hasilhargajualr2').val(hasilhargajualr2);
	if (mintaan2<=hasilcdfc1) {
			var demandr2=demandc1;
			var hasildemandr2=demandr2;
			$('#hasildemandr2').val(hasildemandr2);
			var gir2=demandc1*hargap3;
			var hasilgir2=gir2;
			$('#hasilgir2').val(hasilgir2);
		}
			else if (mintaan2<=hasilcdfc2) {
					var demandr2=demandc2;
					var hasildemandr2=demandr2;
					$('#hasildemandr2').val(hasildemandr2);
					var gir2=demandc2*hargap3;
					var hasilgir2=gir2;
					$('#hasilgir2').val(hasilgir2);
				}
					else if (mintaan2<=hasilcdfc3) {
							var demandr2=demandc3;
							var hasildemandr2=demandr2;
							$('#hasildemandr2').val(hasildemandr2);
							var gir2=demandc3*hargap3;
							var hasilgir2=gir2;
							$('#hasilgir2').val(hasilgir2);
						}
}
else if (harga2<=hasilcdfhp4) {
	var hargajualr2=hargap4;
	var hasilhargajualr2=hargajualr2;
	$('#hasilhargajualr2').val(hasilhargajualr2);
	if (mintaan2<=hasilcdfd1) {
			var demandr2=demandd1;
			var hasildemandr2=demandr2;
			$('#hasildemandr2').val(hasildemandr2);
			var gir2=demandd1*hargap4;
			var hasilgir2=gir2;
			$('#hasilgir2').val(hasilgir2);
		}
			else if (mintaan2<=hasilcdfd2) {
					var demandr2=demandd2;
					var hasildemandr2=demandr2;
					$('#hasildemandr2').val(hasildemandr2);
					var gir2=demandd2*hargap4;
					var hasilgir2=gir2;
					$('#hasilgir2').val(hasilgir2);
				}
					else if (mintaan2<=hasilcdfd3) {
							var demandr2=demandd3;
							var hasildemandr2=demandr2;
							$('#hasildemandr2').val(hasildemandr2);
							var gir2=demandd3*hargap4;
							var hasilgir2=gir2;
							$('#hasilgir2').val(hasilgir2);
						}
}
else if (harga2<=hasilcdfhp5) {
	var hargajualr2=hargap5;
	var hasilhargajualr2=hargajualr2;
	$('#hasilhargajualr2').val(hasilhargajualr2);
	if (mintaan2<=hasilcdfe1) {
			var demandr2=demande1;
			var hasildemandr2=demandr2;
			$('#hasildemandr2').val(hasildemandr2);
			var gir2=demande1*hargap5;
			var hasilgir2=gir2;
			$('#hasilgir2').val(hasilgir2);
		}
			else if (mintaan2<=hasilcdfe2) {
					var demandr2=demande2;
					var hasildemandr2=demandr2;
					$('#hasildemandr2').val(hasildemandr2);
					var gir2=demande2*hargap5;
					var hasilgir2=gir2;
					$('#hasilgir2').val(hasilgir2);
				}
					else if (mintaan2<=hasilcdfe3) {
							var demandr2=demande3;
							var hasildemandr2=demandr2;
							$('#hasildemandr2').val(hasildemandr2);
							var gir2=demande3*hargap5;
							var hasilgir2=gir2;
							$('#hasilgir2').val(hasilgir2);
						}
}

if (harga3<=hasilcdfhp1) {
	var hargajualr3=hargap1;
	var hasilhargajualr3=hargajualr3;
	$('#hasilhargajualr3').val(hasilhargajualr3);
	if (mintaan3<=hasilcdfa1) {
			var demandr3=demanda1;
			var hasildemandr3=demandr3;
			$('#hasildemandr3').val(hasildemandr3);
			var gir3=demanda1*hargap1;
			var hasilgir3=gir3;
			$('#hasilgir3').val(hasilgir3);
		}
			else if (mintaan3<=hasilcdfa2) {
					var demandr3=demanda2;
					var hasildemandr3=demandr3;
					$('#hasildemandr3').val(hasildemandr3);
					var gir3=demanda2*hargap1;
					var hasilgir3=gir3;
					$('#hasilgir3').val(hasilgir3);
				}
					else if (mintaan3<=hasilcdfa3) {
							var demandr3=demanda3;
							var hasildemandr3=demandr3;
							$('#hasildemandr3').val(hasildemandr3);
							var gir3=demanda3*hargap1;
							var hasilgir3=gir3;
							$('#hasilgir3').val(hasilgir3);
						}
}
else if (harga3<=hasilcdfhp2) {
	var hargajualr3=hargap2;
	var hasilhargajualr3=hargajualr3;
	$('#hasilhargajualr3').val(hasilhargajualr3);
	if (mintaan3<=hasilcdfb1) {
			var demandr3=demandb1;
			var hasildemandr3=demandr3;
			$('#hasildemandr3').val(hasildemandr3);
			var gir3=demandb1*hargap2;
			var hasilgir3=gir3;
			$('#hasilgir3').val(hasilgir3);
		}
			else if (mintaan3<=hasilcdfb2) {
					var demandr3=demandb2;
					var hasildemandr3=demandr3;
					$('#hasildemandr3').val(hasildemandr3);
					var gir3=demandb2*hargap2;
					var hasilgir3=gir3;
					$('#hasilgir3').val(hasilgir3);
				}
					else if (mintaan3<=hasilcdfb3) {
							var demandr3=demandb3;
							var hasildemandr3=demandr3;
							$('#hasildemandr3').val(hasildemandr3);
							var gir3=demandb3*hargap2;
							var hasilgir3=gir3;
							$('#hasilgir3').val(hasilgir3);
						}
}
else if (harga3<=hasilcdfhp3) {
	var hargajualr3=hargap3;
	var hasilhargajualr3=hargajualr3;
	$('#hasilhargajualr3').val(hasilhargajualr3);
	if (mintaan3<=hasilcdfc1) {
			var demandr3=demandc1;
			var hasildemandr3=demandr3;
			$('#hasildemandr3').val(hasildemandr3);
			var gir3=demandc1*hargap3;
			var hasilgir3=gir3;
			$('#hasilgir3').val(hasilgir3);
		}
			else if (mintaan3<=hasilcdfc2) {
					var demandr3=demandc2;
					var hasildemandr3=demandr3;
					$('#hasildemandr3').val(hasildemandr3);
					var gir3=demandc2*hargap3;
					var hasilgir3=gir3;
					$('#hasilgir3').val(hasilgir3);
				}
					else if (mintaan3<=hasilcdfc3) {
							var demandr3=demandc3;
							var hasildemandr3=demandr3;
							$('#hasildemandr3').val(hasildemandr3);
							var gir3=demandc3*hargap3;
							var hasilgir3=gir3;
							$('#hasilgir3').val(hasilgir3);
						}
}
else if (harga3<=hasilcdfhp4) {
	var hargajualr3=hargap4;
	var hasilhargajualr3=hargajualr3;
	$('#hasilhargajualr3').val(hasilhargajualr3);
	if (mintaan3<=hasilcdfd1) {
			var demandr3=demandd1;
			var hasildemandr3=demandr3;
			$('#hasildemandr3').val(hasildemandr3);
			var gir3=demandd1*hargap4;
			var hasilgir3=gir3;
			$('#hasilgir3').val(hasilgir3);
		}
			else if (mintaan3<=hasilcdfd2) {
					var demandr3=demandd2;
					var hasildemandr3=demandr3;
					$('#hasildemandr3').val(hasildemandr3);
					var gir3=demandd2*hargap4;
					var hasilgir3=gir3;
					$('#hasilgir3').val(hasilgir3);
				}
					else if (mintaan3<=hasilcdfd3) {
							var demandr3=demandd3;
							var hasildemandr3=demandr3;
							$('#hasildemandr3').val(hasildemandr3);
							var gir3=demandd3*hargap4;
							var hasilgir3=gir3;
							$('#hasilgir3').val(hasilgir3);
						}
}
else if (harga3<=hasilcdfhp5) {
	var hargajualr3=hargap5;
	var hasilhargajualr3=hargajualr3;
	$('#hasilhargajualr3').val(hasilhargajualr3);
	if (mintaan3<=hasilcdfe1) {
			var demandr3=demande1;
			var hasildemandr3=demandr3;
			$('#hasildemandr3').val(hasildemandr3);
			var gir3=demande1*hargap5;
			var hasilgir3=gir3;
			$('#hasilgir3').val(hasilgir3);
		}
			else if (mintaan3<=hasilcdfe2) {
					var demandr3=demande2;
					var hasildemandr3=demandr3;
					$('#hasildemandr3').val(hasildemandr3);
					var gir3=demande2*hargap5;
					var hasilgir3=gir3;
					$('#hasilgir3').val(hasilgir3);
				}
					else if (mintaan3<=hasilcdfe3) {
							var demandr3=demande3;
							var hasildemandr3=demandr3;
							$('#hasildemandr3').val(hasildemandr3);
							var gir3=demande3*hargap5;
							var hasilgir3=gir3;
							$('#hasilgir3').val(hasilgir3);
						}
}

if (harga4<=hasilcdfhp1) {
	var hargajualr4=hargap1;
	var hasilhargajualr4=hargajualr4;
	$('#hasilhargajualr4').val(hasilhargajualr4);
	if (mintaan4<=hasilcdfa1) {
			var demandr4=demanda1;
			var hasildemandr4=demandr4;
			$('#hasildemandr4').val(hasildemandr4);
			var gir4=demanda1*hargap1;
			var hasilgir4=gir4;
			$('#hasilgir4').val(hasilgir4);
		}
			else if (mintaan4<=hasilcdfa2) {
					var demandr4=demanda2;
					var hasildemandr4=demandr4;
					$('#hasildemandr4').val(hasildemandr4);
					var gir4=demanda2*hargap1;
					var hasilgir4=gir4;
					$('#hasilgir4').val(hasilgir4);
				}
					else if (mintaan4<=hasilcdfa3) {
							var demandr4=demanda3;
							var hasildemandr4=demandr4;
							$('#hasildemandr4').val(hasildemandr4);
							var gir4=demanda3*hargap1;
							var hasilgir4=gir4;
							$('#hasilgir4').val(hasilgir4);
						}
}
else if (harga4<=hasilcdfhp2) {
	var hargajualr4=hargap2;
	var hasilhargajualr4=hargajualr4;
	$('#hasilhargajualr4').val(hasilhargajualr4);
	if (mintaan4<=hasilcdfb1) {
			var demandr4=demandb1;
			var hasildemandr4=demandr4;
			$('#hasildemandr4').val(hasildemandr4);
			var gir4=demandb1*hargap2;
			var hasilgir4=gir4;
			$('#hasilgir4').val(hasilgir4);
		}
			else if (mintaan4<=hasilcdfb2) {
					var demandr4=demandb2;
					var hasildemandr4=demandr4;
					$('#hasildemandr4').val(hasildemandr4);
					var gir4=demandb2*hargap2;
					var hasilgir4=gir4;
					$('#hasilgir4').val(hasilgir4);
				}
					else if (mintaan4<=hasilcdfb3) {
							var demandr4=demandb3;
							var hasildemandr4=demandr4;
							$('#hasildemandr4').val(hasildemandr4);
							var gir4=demandb3*hargap2;
							var hasilgir4=gir4;
							$('#hasilgir4').val(hasilgir4);
						}
}
else if (harga4<=hasilcdfhp3) {
	var hargajualr4=hargap3;
	var hasilhargajualr4=hargajualr4;
	$('#hasilhargajualr4').val(hasilhargajualr4);
	if (mintaan4<=hasilcdfc1) {
			var demandr4=demandc1;
			var hasildemandr4=demandr4;
			$('#hasildemandr4').val(hasildemandr4);
			var gir4=demandc1*hargap3;
			var hasilgir4=gir4;
			$('#hasilgir4').val(hasilgir4);
		}
			else if (mintaan4<=hasilcdfc2) {
					var demandr4=demandc2;
					var hasildemandr4=demandr4;
					$('#hasildemandr4').val(hasildemandr4);
					var gir4=demandc2*hargap3;
					var hasilgir4=gir4;
					$('#hasilgir4').val(hasilgir4);
				}
					else if (mintaan4<=hasilcdfc3) {
							var demandr4=demandc3;
							var hasildemandr4=demandr4;
							$('#hasildemandr4').val(hasildemandr4);
							var gir4=demandc3*hargap3;
							var hasilgir4=gir4;
							$('#hasilgir4').val(hasilgir4);
						}
}
else if (harga4<=hasilcdfhp4) {
	var hargajualr4=hargap4;
	var hasilhargajualr4=hargajualr4;
	$('#hasilhargajualr4').val(hasilhargajualr4);
	if (mintaan4<=hasilcdfd1) {
			var demandr4=demandd1;
			var hasildemandr4=demandr4;
			$('#hasildemandr4').val(hasildemandr4);
			var gir4=demandd1*hargap4;
			var hasilgir4=gir4;
			$('#hasilgir4').val(hasilgir4);
		}
			else if (mintaan4<=hasilcdfd2) {
					var demandr4=demandd2;
					var hasildemandr4=demandr4;
					$('#hasildemandr4').val(hasildemandr4);
					var gir4=demandd2*hargap4;
					var hasilgir4=gir4;
					$('#hasilgir4').val(hasilgir4);
				}
					else if (mintaan4<=hasilcdfd3) {
							var demandr4=demandd3;
							var hasildemandr4=demandr4;
							$('#hasildemandr4').val(hasildemandr4);
							var gir4=demandd3*hargap4;
							var hasilgir4=gir4;
							$('#hasilgir4').val(hasilgir4);
						}
}
else if (harga4<=hasilcdfhp5) {
	var hargajualr4=hargap5;
	var hasilhargajualr4=hargajualr4;
	$('#hasilhargajualr4').val(hasilhargajualr4);
	if (mintaan4<=hasilcdfe1) {
			var demandr4=demande1;
			var hasildemandr4=demandr4;
			$('#hasildemandr4').val(hasildemandr4);
			var gir4=demande1*hargap5;
			var hasilgir4=gir4;
			$('#hasilgir4').val(hasilgir4);
		}
			else if (mintaan4<=hasilcdfe2) {
					var demandr4=demande2;
					var hasildemandr4=demandr4;
					$('#hasildemandr4').val(hasildemandr4);
					var gir4=demande2*hargap5;
					var hasilgir4=gir4;
					$('#hasilgir4').val(hasilgir4);
				}
					else if (mintaan4<=hasilcdfe3) {
							var demandr4=demande3;
							var hasildemandr4=demandr4;
							$('#hasildemandr4').val(hasildemandr4);
							var gir4=demande3*hargap5;
							var hasilgir4=gir4;
							$('#hasilgir4').val(hasilgir4);
						}
}

if (harga5<=hasilcdfhp1) {
	var hargajualr5=hargap1;
	var hasilhargajualr5=hargajualr5;
	$('#hasilhargajualr5').val(hasilhargajualr5);
	if (mintaan5<=hasilcdfa1) {
			var demandr5=demanda1;
			var hasildemandr5=demandr5;
			$('#hasildemandr5').val(hasildemandr5);
			var gir5=demanda1*hargap1;
			var hasilgir5=gir5;
			$('#hasilgir5').val(hasilgir5);
		}
			else if (mintaan5<=hasilcdfa2) {
					var demandr5=demanda2;
					var hasildemandr5=demandr5;
					$('#hasildemandr5').val(hasildemandr5);
					var gir5=demanda2*hargap1;
					var hasilgir5=gir5;
					$('#hasilgir5').val(hasilgir5);
				}
					else if (mintaan5<=hasilcdfa3) {
							var demandr5=demanda3;
							var hasildemandr5=demandr5;
							$('#hasildemandr5').val(hasildemandr5);
							var gir5=demanda3*hargap1;
							var hasilgir5=gir5;
							$('#hasilgir5').val(hasilgir5);
						}
}
else if (harga5<=hasilcdfhp2) {
	var hargajualr5=hargap2;
	var hasilhargajualr5=hargajualr5;
	$('#hasilhargajualr5').val(hasilhargajualr5);
	if (mintaan5<=hasilcdfb1) {
			var demandr5=demandb1;
			var hasildemandr5=demandr5;
			$('#hasildemandr5').val(hasildemandr5);
			var gir5=demandb1*hargap2;
			var hasilgir5=gir5;
			$('#hasilgir5').val(hasilgir5);
		}
			else if (mintaan5<=hasilcdfb2) {
					var demandr5=demandb2;
					var hasildemandr5=demandr5;
					$('#hasildemandr5').val(hasildemandr5);
					var gir5=demandb2*hargap2;
					var hasilgir5=gir5;
					$('#hasilgir5').val(hasilgir5);
				}
					else if (mintaan5<=hasilcdfb3) {
							var demandr5=demandb3;
							var hasildemandr5=demandr5;
							$('#hasildemandr5').val(hasildemandr5);
							var gir5=demandb3*hargap2;
							var hasilgir5=gir5;
							$('#hasilgir5').val(hasilgir5);
						}
}
else if (harga5<=hasilcdfhp3) {
	var hargajualr5=hargap3;
	var hasilhargajualr5=hargajualr5;
	$('#hasilhargajualr5').val(hasilhargajualr5);
	if (mintaan5<=hasilcdfc1) {
			var demandr5=demandc1;
			var hasildemandr5=demandr5;
			$('#hasildemandr5').val(hasildemandr5);
			var gir5=demandc1*hargap3;
			var hasilgir5=gir5;
			$('#hasilgir5').val(hasilgir5);
		}
			else if (mintaan5<=hasilcdfc2) {
					var demandr5=demandc2;
					var hasildemandr5=demandr5;
					$('#hasildemandr5').val(hasildemandr5);
					var gir5=demandc2*hargap3;
					var hasilgir5=gir5;
					$('#hasilgir5').val(hasilgir5);
				}
					else if (mintaan5<=hasilcdfc3) {
							var demandr5=demandc3;
							var hasildemandr5=demandr5;
							$('#hasildemandr5').val(hasildemandr5);
							var gir5=demandc3*hargap3;
							var hasilgir5=gir5;
							$('#hasilgir5').val(hasilgir5);
						}
}
else if (harga5<=hasilcdfhp4) {
	var hargajualr5=hargap4;
	var hasilhargajualr5=hargajualr5;
	$('#hasilhargajualr5').val(hasilhargajualr5);
	if (mintaan5<=hasilcdfd1) {
			var demandr5=demandd1;
			var hasildemandr5=demandr5;
			$('#hasildemandr5').val(hasildemandr5);
			var gir5=demandd1*hargap4;
			var hasilgir5=gir5;
			$('#hasilgir5').val(hasilgir5);
		}
			else if (mintaan5<=hasilcdfd2) {
					var demandr5=demandd2;
					var hasildemandr5=demandr5;
					$('#hasildemandr5').val(hasildemandr5);
					var gir5=demandd2*hargap4;
					var hasilgir5=gir5;
					$('#hasilgir5').val(hasilgir5);
				}
					else if (mintaan5<=hasilcdfd3) {
							var demandr5=demandd3;
							var hasildemandr5=demandr5;
							$('#hasildemandr5').val(hasildemandr5);
							var gir5=demandd3*hargap4;
							var hasilgir5=gir5;
							$('#hasilgir5').val(hasilgir5);
						}
}
else if (harga5<=hasilcdfhp5) {
	var hargajualr5=hargap5;
	var hasilhargajualr5=hargajualr5;
	$('#hasilhargajualr5').val(hasilhargajualr5);
	if (mintaan5<=hasilcdfe1) {
			var demandr5=demande1;
			var hasildemandr5=demandr5;
			$('#hasildemandr5').val(hasildemandr5);
			var gir5=demande1*hargap5;
			var hasilgir5=gir5;
			$('#hasilgir5').val(hasilgir5);
		}
			else if (mintaan5<=hasilcdfe2) {
					var demandr5=demande2;
					var hasildemandr5=demandr5;
					$('#hasildemandr5').val(hasildemandr5);
					var gir5=demande2*hargap5;
					var hasilgir5=gir5;
					$('#hasilgir5').val(hasilgir5);
				}
					else if (mintaan5<=hasilcdfe3) {
							var demandr5=demande3;
							var hasildemandr5=demandr5;
							$('#hasildemandr5').val(hasildemandr5);
							var gir5=demande3*hargap5;
							var hasilgir5=gir5;
							$('#hasilgir5').val(hasilgir5);
						}
}




					});
				});
						</script>



						<script type="text/javascript">
						$(document).ready(function() {
						$('#hasilcarigi').keyup(function(){
						var hasilcarigi=parseInt($('#hasilcarigi').val());


						var demanda1=parseInt($('#demanda1').val());
						var hargap1=parseInt($('#hargap1').val());

						var hasilgir1=parseInt($('#hasilgir1').val());
						var hasilgir2=parseInt($('#hasilgir2').val());
						var hasilgir3=parseInt($('#hasilgir3').val());
						var hasilgir4=parseInt($('#hasilgir4').val());
						var hasilgir5=parseInt($('#hasilgir5').val());

						if (hasilcarigi==hasilgir1) {
							//alert ("oke");
								var hasilcarihargapenjualan=parseFloat($('#penjualan1').val());
								$('#hasilcarihargapenjualan').val(hasilcarihargapenjualan);

								var hasilcarihargajual=parseInt($('#hasilhargajualr1').val());
								$('#carihargajual').val(hasilcarihargajual);

								var hasilcaripermintaan=parseFloat($('#permintaan1').val());
								$('#caripermintaan').val(hasilcaripermintaan);

								var hasilcaridemand=parseFloat($('#hasildemandr1').val());
								$('#caridemand').val(hasilcaridemand);

							}

							else if (hasilcarigi==hasilgir2) {
								//alert ("oke");
									var hasilcarihargapenjualan=parseFloat($('#penjualan2').val());
									$('#hasilcarihargapenjualan').val(hasilcarihargapenjualan);

									var hasilcarihargajual=parseInt($('#hasilhargajualr2').val());
									$('#carihargajual').val(hasilcarihargajual);

									var hasilcaripermintaan=parseFloat($('#permintaan2').val());
									$('#caripermintaan').val(hasilcaripermintaan);

									var hasilcaridemand=parseFloat($('#hasildemandr2').val());
									$('#caridemand').val(hasilcaridemand);

								}

								else if (hasilcarigi==hasilgir3) {
									//alert ("oke");
										var hasilcarihargapenjualan=parseFloat($('#penjualan3').val());
										$('#hasilcarihargapenjualan').val(hasilcarihargapenjualan);

										var hasilcarihargajual=parseInt($('#hasilhargajualr3').val());
										$('#carihargajual').val(hasilcarihargajual);

										var hasilcaripermintaan=parseFloat($('#permintaan3').val());
										$('#caripermintaan').val(hasilcaripermintaan);

										var hasilcaridemand=parseFloat($('#hasildemandr3').val());
										$('#caridemand').val(hasilcaridemand);

									}

									else if (hasilcarigi==hasilgir4) {
										//alert ("oke");
											var hasilcarihargapenjualan=parseFloat($('#penjualan4').val());
											$('#hasilcarihargapenjualan').val(hasilcarihargapenjualan);

											var hasilcarihargajual=parseInt($('#hasilhargajualr4').val());
											$('#carihargajual').val(hasilcarihargajual);

											var hasilcaripermintaan=parseFloat($('#permintaan4').val());
											$('#caripermintaan').val(hasilcaripermintaan);

											var hasilcaridemand=parseFloat($('#hasildemandr4').val());
											$('#caridemand').val(hasilcaridemand);

										}

										else if (hasilcarigi==hasilgir5) {
											//alert ("oke");
												var hasilcarihargapenjualan=parseFloat($('#penjualan5').val());
												$('#hasilcarihargapenjualan').val(hasilcarihargapenjualan);

												var hasilcarihargajual=parseInt($('#hasilhargajualr5').val());
												$('#carihargajual').val(hasilcarihargajual);

												var hasilcaripermintaan=parseFloat($('#permintaan5').val());
												$('#caripermintaan').val(hasilcaripermintaan);

												var hasilcaridemand=parseFloat($('#hasildemandr5').val());
												$('#caridemand').val(hasilcaridemand);

											}



												});
												});
												</script>




</head>

<body>
	<?php include 'include/header.php';
    include 'include/sidebar.php'; ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="simulation.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg></a></li>
				<li class="active">Simulation</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Simulation</h1>
			</div>
		</div><!--/.row-->


<!-- tabel 1 -->
    <div class="col-lg-12">

  <div class="panel panel-default">
    <div class="panel-heading">Distribusi Harga Penjualan</div>
    <div class="panel-body">
      <div class="bootstrap-table">

<!-- <form class="form-horizontal" method="GET" action=""> -->
            <!--<div class="fixed-table-loading" style="top: 37px; display: none;">Loading, please wait…</div>-->
          <table data-toggle="table" class="table table-hover">

         <tr><td style="text-align: left; ">
            <div class="td-inner ">Harga Penjualan/unit ($)</div>
            <div class="fht-cell"></div></td>
            <td style=""><input class="form-control" placeholder="" type="text" name="hargap1" id="hargap1"></td>
            <td style=""><input class="form-control" placeholder="" type="text" name="hargap2" id="hargap2"></td>
            <td style=""><input class="form-control" placeholder="" type="text" name="hargap3" id="hargap3"></td>
            <td style=""><input class="form-control" placeholder="" type="text" name="hargap4" id="hargap4"></td>
            <td style=""><input class="form-control" placeholder="" type="text" name="hargap5" id="hargap5"></td>
          </tr>

            <tr>
            <td style=""><div class="td-inner ">Distribusi Peluang (Total = 1)</div>
              <div class="fht-cell"></div></td>
              <td style=""><input class="form-control" placeholder="" type="text" name="distri1" id="distri1"></td>
              <td style=""><input class="form-control" placeholder="" type="text" name="distri2" id="distri2"></td>
              <td style=""><input class="form-control" placeholder="" type="text" name="distri3" id="distri3"></td>
              <td style=""><input class="form-control" placeholder="" type="text" name="distri4" id="distri4"></td>
              <td style=""><input class="form-control" placeholder="" type="text" name="distri5" id="distri5"></td>
            </tr>


<!--
      <tbody><tr data-index="0">
        <td style="text-align: left; ">Harga Penjualan/unit ($)</td>
        <td style=""><input class="form-control" placeholder=""></td>
        <td style=""><input class="form-control" placeholder=""></td>
      <td style=""><input class="form-control" placeholder=""></td>
    <td style=""><input class="form-control" placeholder=""></td>
  <td style=""><input class="form-control" placeholder=""></td></tr>
        <tr data-index="1">
          <td style="text-align: left; ">Distribusi Peluang</td>
          <td style=""><input class="form-control" placeholder=""></td>
          <td style=""><input class="form-control" placeholder=""></td>
        <td style=""><input class="form-control" placeholder=""></td>
      <td style=""><input class="form-control" placeholder=""></td>
    <td style=""><input class="form-control" placeholder=""></td></tr>

  </tbody>-->

</table>
<!--<p align="right">
<button type="submit" class="btn btn-primary" name="input">OK</button>
<button type="submit" class="btn btn-default">Reset</button></p>
</form>-->

              </div>
    </div>
  </div>

          </div>

<!-- tabel 2 -->
          <div class="col-lg-12">

          <div class="panel panel-default">
          <div class="panel-heading">Distribusi Permintaan</div>
          <div class="panel-body">
            <div class="bootstrap-table">

          <!--    <form class="form-horizontal" method="GET" action=""> -->

                <table data-toggle="table" class="table table-hover">

               <tr><td style="text-align: center; " colspan="2">

                  <div class="td-inner ">Harga Jual : $
										<?php //if(isset($_GET['input']))  { echo $_GET["penjualan1"];}?>
										<input class="form-control" placeholder="" type="text" name="hasilhargapp1" id="hasilhargapp1">
									</div>

                  <div class="fht-cell"></div></td>
                  <td style="text-align: center; " colspan="2">
                     <div class="td-inner ">Harga Jual : $
											 <?php //if(isset($_GET['input'])) { echo $_GET["penjualan2"]; }?>
											 <input class="form-control" placeholder="" type="text" name="hasilhargapp2" id="hasilhargapp2">
										 </div>
                     <div class="fht-cell"></div></td>
                     <td style="text-align: center; " colspan="2">
                        <div class="td-inner ">Harga Jual : $
													<?php //if(isset($_GET['input']))  { echo $_GET["penjualan3"]; }?>
													<input class="form-control" placeholder="" type="text" name="hasilhargapp3" id="hasilhargapp3">
												</div>
                        <div class="fht-cell"></div></td>
                        <td style="text-align: center; " colspan="2">
                           <div class="td-inner ">Harga Jual : $
														 <?php //if(isset($_GET['input']))   { echo $_GET["penjualan4"]; }?>
														 <input class="form-control" placeholder="" type="text" name="hasilhargapp4" id="hasilhargapp4">
													 </div>
                           <div class="fht-cell"></div></td>
                           <td style="text-align: center; " colspan="2">
                              <div class="td-inner ">Harga Jual : $
																<?php //if(isset($_GET['input']))  { echo $_GET["penjualan5"]; }?>
																<input class="form-control" placeholder="" type="text" name="hasilhargapp5" id="hasilhargapp5">
															</div>
                              <div class="fht-cell"></div></td>
                </tr>
                <tr><td style="text-align: left; ">
                   <div class="td-inner ">Demand</div>
                   <div class="fht-cell"></div></td>
                   <td><div class="td-inner ">Prob (Total = 1)</div>
                   <div class="fht-cell"></div>
                 </td>

                 <td style="text-align: left; ">
                    <div class="td-inner ">Demand</div>
                    <div class="fht-cell"></div></td>
                    <td><div class="td-inner ">Prob (Total = 1)</div>
                    <div class="fht-cell"></div>
                  </td>

                  <td style="text-align: left; ">
                     <div class="td-inner ">Demand</div>
                     <div class="fht-cell"></div></td>
                     <td><div class="td-inner ">Prob (Total = 1)</div>
                     <div class="fht-cell"></div>
                   </td>

                   <td style="text-align: left; ">
                      <div class="td-inner ">Demand</div>
                      <div class="fht-cell"></div></td>
                      <td><div class="td-inner ">Prob (Total = 1)</div>
                      <div class="fht-cell"></div>
                    </td>

                    <td style="text-align: left; ">
                       <div class="td-inner ">Demand</div>
                       <div class="fht-cell"></div></td>
                       <td><div class="td-inner ">Prob (Total = 1)</div>
                       <div class="fht-cell"></div>
                     </td>


                 </tr>


                 <tr><td style="text-align: left; ">
                    <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demanda1" id="demanda1"></div>
                    <div class="fht-cell"></div></td>
                    <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="proba1" id="proba1"></div>
                    <div class="fht-cell"></div>
                  </td>

                  <td style="text-align: left; ">
                     <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandb1" id="demandb1"></div>
                     <div class="fht-cell"></div></td>
                     <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probb1" id="probb1"></div>
                     <div class="fht-cell"></div>
                   </td>

                   <td style="text-align: left; ">
                      <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandc1" id="demandc1"></div>
                      <div class="fht-cell"></div></td>
                      <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probc1" id="probc1"></div>
                      <div class="fht-cell"></div>
                    </td>

                    <td style="text-align: left; ">
                       <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandd1" id="demandd1"></div>
                       <div class="fht-cell"></div></td>
                       <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probd1" id="probd1"></div>
                       <div class="fht-cell"></div>
                     </td>

                     <td style="text-align: left; ">
                        <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demande1" id="demande1"></div>
                        <div class="fht-cell"></div></td>
                        <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probe1" id="probe1"></div>
                        <div class="fht-cell"></div>
                      </td>
                  </tr>

                  <tr><td style="text-align: left; ">
                     <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demanda2" id="demanda2"></div>
                     <div class="fht-cell"></div></td>
                     <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="proba2" id="proba2"></div>
                     <div class="fht-cell"></div>
                   </td>

                   <td style="text-align: left; ">
                      <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandb2" id="demandb2"></div>
                      <div class="fht-cell"></div></td>
                      <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probb2" id="probb2"></div>
                      <div class="fht-cell"></div>
                    </td>

                    <td style="text-align: left; ">
                       <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandc2" id="demandc2"></div>
                       <div class="fht-cell"></div></td>
                       <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probc2" id="probc2"></div>
                       <div class="fht-cell"></div>
                     </td>

                     <td style="text-align: left; ">
                        <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandd2" id="demandd2"></div>
                        <div class="fht-cell"></div></td>
                        <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probd2" id="probd2"></div>
                        <div class="fht-cell"></div>
                      </td>

                      <td style="text-align: left; ">
                         <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demande2" id="demande2"></div>
                         <div class="fht-cell"></div></td>
                         <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probe2" id="probe2"></div>
                         <div class="fht-cell"></div>
                       </td>
                   </tr>

                   <tr><td style="text-align: left; ">
                      <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demanda3" id="demanda3"></div>
                      <div class="fht-cell"></div></td>
                      <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="proba3" id="proba3"></div>
                      <div class="fht-cell"></div>
                    </td>

                    <td style="text-align: left; ">
                       <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandb3" id="demandb3"></div>
                       <div class="fht-cell"></div></td>
                       <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probb3" id="probb3"></div>
                       <div class="fht-cell"></div>
                     </td>

                     <td style="text-align: left; ">
                        <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandc3" id="demandc3"></div>
                        <div class="fht-cell"></div></td>
                        <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probc3" id="probc3"></div>
                        <div class="fht-cell"></div>
                      </td>

                      <td style="text-align: left; ">
                         <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demandd3" id="demandd3"></div>
                         <div class="fht-cell"></div></td>
                         <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probd3" id="probd3"></div>
                         <div class="fht-cell"></div>
                       </td>

                       <td style="text-align: left; ">
                          <div class="td-inner "><input class="form-control" placeholder="" type="text" name="demande3" id="demande3"></div>
                          <div class="fht-cell"></div></td>
                          <td><div class="td-inner "><input class="form-control" placeholder="" type="text" name="probe3" id="probe3"></div>
                          <div class="fht-cell"></div>
                        </td>
                    </tr>


                      </table>

                      <p align="right">
                      <!--<button type="submit" class="btn btn-primary" >OK</button>
                      <button type="submit" class="btn btn-default">Reset</button></p>
                    </form>-->
                    </div>
          </div>
          </div>

                </div>

                <div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Harga Penjualan</div>
					<div class="panel-body">
            <div class="bootstrap-table">

                            <table data-toggle="table" class="table table-hover">

                           <tbody><tr><td style="text-align: center; " colspan="2">
                              <div class="td-inner ">Harga Penjualan</div>
                              <div class="fht-cell"></div></td>
                            </tr>

                            <tr><td style="text-align: center; ">
                               <div class="td-inner ">R1 =</div>
                               <div class="fht-cell"></div></td>
                               <td style="text-align: left; ">
                                  <div class="td-inner "><input class="form-control" placeholder="" type="text" name="harga1" id="harga1"></div>
                                  <div class="fht-cell"></div></td>
                             </tr>

                             <tr><td style="text-align: center; ">
                                <div class="td-inner ">R2 =</div>
                                <div class="fht-cell"></div></td>
                                <td style="text-align: left; ">
                                   <div class="td-inner "><input class="form-control" placeholder="" type="text" name="harga2" id="harga2"></div>
                                   <div class="fht-cell"></div></td>
                              </tr>

                              <tr><td style="text-align: center; ">
                                 <div class="td-inner ">R3 =</div>
                                 <div class="fht-cell"></div></td>
                                 <td style="text-align: left; ">
                                    <div class="td-inner "><input class="form-control" placeholder="" type="text" name="harga3" id="harga3"></div>
                                    <div class="fht-cell"></div></td>
                               </tr>

                               <tr><td style="text-align: center; ">
                                  <div class="td-inner ">R4 =</div>
                                  <div class="fht-cell"></div></td>
                                  <td style="text-align: left; ">
                                     <div class="td-inner "><input class="form-control" placeholder="" type="text" name="harga4" id="harga4"></div>
                                     <div class="fht-cell"></div></td>
                                </tr>

                                <tr><td style="text-align: center; ">
                                   <div class="td-inner ">R5 =</div>
                                   <div class="fht-cell"></div></td>
                                   <td style="text-align: left; ">
                                      <div class="td-inner "><input class="form-control" placeholder="" type="text" name="harga5" id="harga5"></div>
                                      <div class="fht-cell"></div></td>
                                 </tr>


                                  </tbody></table></div>
            <div class="clearfix"></div>
					</div>
				</div>
			</div>

      <div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">Permintaan</div>
<div class="panel-body">
  <div class="bootstrap-table">

                  <table data-toggle="table" class="table table-hover">

                 <tbody><tr><td style="text-align: center; " colspan="2">
                    <div class="td-inner ">Permintaan</div>
                    <div class="fht-cell"></div></td>
                  </tr>

                  <tr><td style="text-align: center; ">
                     <div class="td-inner ">R1 =</div>
                     <div class="fht-cell"></div></td>
                     <td style="text-align: left; ">
                        <div class="td-inner "><input class="form-control" placeholder="" type="text" name="mintaan1" id="mintaan1"></div>
                        <div class="fht-cell"></div></td>
                   </tr>

                   <tr><td style="text-align: center; ">
                      <div class="td-inner ">R2 =</div>
                      <div class="fht-cell"></div></td>
                      <td style="text-align: left; ">
                         <div class="td-inner "><input class="form-control" placeholder="" type="text" name="mintaan2" id="mintaan2"></div>
                         <div class="fht-cell"></div></td>
                    </tr>

                    <tr><td style="text-align: center; ">
                       <div class="td-inner ">R3 =</div>
                       <div class="fht-cell"></div></td>
                       <td style="text-align: left; ">
                          <div class="td-inner "><input class="form-control" placeholder="" type="text" name="mintaan3" id="mintaan3"></div>
                          <div class="fht-cell"></div></td>
                     </tr>

                     <tr><td style="text-align: center; ">
                        <div class="td-inner ">R4 =</div>
                        <div class="fht-cell"></div></td>
                        <td style="text-align: left; ">
                           <div class="td-inner "><input class="form-control" placeholder="" type="text" name="mintaan4" id="mintaan4"></div>
                           <div class="fht-cell"></div></td>
                      </tr>

                      <tr><td style="text-align: center; ">
                         <div class="td-inner ">R5 =</div>
                         <div class="fht-cell"></div></td>
                         <td style="text-align: left; ">
                            <div class="td-inner "><input class="form-control" placeholder="" type="text" name="mintaan5" id="mintaan5"></div>
                            <div class="fht-cell"></div></td>
                       </tr>


                        </tbody></table></div>
  <div class="clearfix"></div>
</div>
</div>
</div>





<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Menentukan batasan bilangan random untuk harga penjualan :</div>
<div class="panel-body">
<div class="bootstrap-table">

            <table data-toggle="table" class="table table-hover">

           <tbody><tr><td style="text-align: center; ">
              <div class="td-inner ">Harga Penjualan ($)</div>
              <div class="fht-cell"></div></td>
              <td style="text-align: center; ">
                 <div class="td-inner ">Distribusi</div>
                 <div class="fht-cell"></div></td>
                 <td style="text-align: center; ">
                    <div class="td-inner ">cdf</div>
                    <div class="fht-cell"></div></td>
                    <td style="text-align: center; ">
                       <div class="td-inner ">Batas Bilangan Random</div>
                       <div class="fht-cell"></div></td>
            </tr>

      <tr>
             <td style="text-align: center; ">
               <div class="td-inner ">
								 <?php //if(isset($_GET['input'])){ echo $_GET["penjualan1"]; }?></div>
								 <input class="form-control" placeholder="" type="text" name="hasilhargap1" id="hasilhargap1">
                <div class="fht-cell"></div></td>
                <td style="text-align: center; ">
                  <div class="td-inner ">
										<?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]; }?></div>
										<input class="form-control" placeholder="" type="text" name="hasildistri1" id="hasildistri1">
                   <div class="fht-cell"></div></td>
                   <td style="text-align: center; ">
                     <div class="td-inner ">
											 <?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]; }?></div>
											 <input class="form-control" placeholder="" type="text" name="hasilcdfhp1" id="hasilcdfhp1">
                      <div class="fht-cell"></div></td>
                      <td style="text-align: center; ">
                        <div class="td-inner ">
													<script>
													document.write(0+" <= Ri <= "+parseFloat($('#distri1').val()));
													</script>
													<?php //if(isset($_GET['input'])){ echo 0;
														//echo " <= Ri <= ";
														//echo $_GET["dispel1"]; }?></div>
                         <div class="fht-cell"></div></td>
              </tr>

              <tr>
                     <td style="text-align: center; ">
                       <div class="td-inner ">
												 <?php //if(isset($_GET['input'])){ echo $_GET["penjualan2"]; }?></div>
												 <input class="form-control" placeholder="" type="text" name="hasilhargap2" id="hasilhargap2">
                        <div class="fht-cell"></div></td>
                        <td style="text-align: center; ">
                          <div class="td-inner ">
														<?php //if(isset($_GET['input'])){ echo $_GET["dispel2"]; }?></div>
														<input class="form-control" placeholder="" type="text" name="hasildistri2" id="hasildistri2">
                           <div class="fht-cell"></div></td>
                           <td style="text-align: center; ">
                             <div class="td-inner ">
															 <?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]; }?></div>
															 <input class="form-control" placeholder="" type="text" name="hasilcdfhp2" id="hasilcdfhp2">
                              <div class="fht-cell"></div></td>
                              <td style="text-align: center; ">
                                <div class="td-inner ">
																	<script>
																	document.write(parseFloat($('#hasilcdfhp1').val())+" < Ri <= "+parseFloat($('#hasilcdfhp2').val()));
																	</script>
																	<?php //if(isset($_GET['input'])){ echo $_GET["dispel1"];  echo " < Ri <= "; echo $_GET["dispel1"]+$_GET["dispel2"]; }?></div>
                                 <div class="fht-cell"></div></td>
                      </tr>

                      <tr>
                             <td style="text-align: center; ">
                               <div class="td-inner ">
																 <?php //if(isset($_GET['input'])){ echo $_GET["penjualan3"]; }?></div>
																 <input class="form-control" placeholder="" type="text" name="hasilhargap3" id="hasilhargap3">
                                <div class="fht-cell"></div></td>
                                <td style="text-align: center; ">
                                  <div class="td-inner ">
																		<?php //if(isset($_GET['input'])){ echo $_GET["dispel3"]; }?></div>
																		<input class="form-control" placeholder="" type="text" name="hasildistri3" id="hasildistri3">
                                   <div class="fht-cell"></div></td>
                                   <td style="text-align: center; ">
                                     <div class="td-inner ">
																			 <?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]; }?></div>
																			 <input class="form-control" placeholder="" type="text" name="hasilcdfhp3" id="hasilcdfhp3">
                                      <div class="fht-cell"></div></td>
                                      <td style="text-align: center; ">
                                        <div class="td-inner ">
																					<script>
																					document.write(parseFloat($('#hasilcdfhp2').val())+" < Ri <= "+parseFloat($('#hasilcdfhp3').val()));
																					</script>
																					<?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"];  echo " < Ri <= "; echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]; }?></div>
                                         <div class="fht-cell"></div></td>
                              </tr>

                              <tr>
                                     <td style="text-align: center; ">
                                       <div class="td-inner ">
																				 <?php //if(isset($_GET['input'])){ echo $_GET["penjualan4"]; }?></div>
																				 <input class="form-control" placeholder="" type="text" name="hasilhargap4" id="hasilhargap4">
                                        <div class="fht-cell"></div></td>
                                        <td style="text-align: center; ">
                                          <div class="td-inner ">
																						<?php //if(isset($_GET['input']))  { echo $_GET["dispel4"]; }?></div>
																						<input class="form-control" placeholder="" type="text" name="hasildistri4" id="hasildistri4">
                                           <div class="fht-cell"></div></td>
                                           <td style="text-align: center; ">
                                             <div class="td-inner ">
																							 <?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]+$_GET["dispel4"]; }?></div>
																							 <input class="form-control" placeholder="" type="text" name="hasilcdfhp4" id="hasilcdfhp4">
                                              <div class="fht-cell"></div></td>
                                              <td style="text-align: center; ">
                                                <div class="td-inner ">
																									<script>
																									document.write(parseFloat($('#hasilcdfhp3').val())+" < Ri <= "+parseFloat($('#hasilcdfhp4').val()));
																									</script>
																									<?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"];  echo " < Ri <= "; echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]+$_GET["dispel4"]; }?></div>
                                                 <div class="fht-cell"></div></td>
                                      </tr>

                                      <tr>
                                             <td style="text-align: center; ">
                                               <div class="td-inner ">
																								 <?php //if(isset($_GET['input'])){ echo $_GET["penjualan5"]; }?></div>
																								 <input class="form-control" placeholder="" type="text" name="hasilhargap5" id="hasilhargap5">
                                                <div class="fht-cell"></div></td>
                                                <td style="text-align: center; ">
                                                  <div class="td-inner ">
																										<?php //if(isset($_GET['input'])){ echo $_GET["dispel5"]; }?></div>
																										<input class="form-control" placeholder="" type="text" name="hasildistri5" id="hasildistri5">
                                                   <div class="fht-cell"></div></td>
                                                   <td style="text-align: center; ">
                                                     <div class="td-inner ">
																											 <?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]+$_GET["dispel4"]+$_GET["dispel5"]; }?></div>
																											 <input class="form-control" placeholder="" type="text" name="hasilcdfhp5" id="hasilcdfhp5">
                                                      <div class="fht-cell"></div></td>
                                                      <td style="text-align: center; ">
                                                        <div class="td-inner ">
																													<script>
																													document.write(parseFloat($('#hasilcdfhp4').val())+" < Ri <= "+parseFloat($('#hasilcdfhp5').val()));
																													</script>
																													<?php //if(isset($_GET['input'])){ echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]+$_GET["dispel4"];  echo " < Ri <= "; echo $_GET["dispel1"]+$_GET["dispel2"]+$_GET["dispel3"]+$_GET["dispel4"]+$_GET["dispel5"]; }?></div>
                                                         <div class="fht-cell"></div></td>
                                              </tr>


                  </tbody></table></div>
<div class="clearfix"></div>
</div>
</div>
</div>






<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Menentukan batasan bilangan random untuk masing-masing harga penjualan</div>
<div class="panel-body">
<div class="bootstrap-table"> <p>
 a. Harga Jual : $ <input class="form-control" placeholder="" type="text" name="hasilhargappp1" id="hasilhargappp1">
	<?php //if(isset($_GET['input'])){ echo $_GET["penjualan1"]; }?></p>
            <table data-toggle="table" class="table table-hover">

           <tbody><tr><td style="text-align: center; ">
              <div class="td-inner ">Demand</div>
              <div class="fht-cell"></div></td>
              <td style="text-align: center; ">
                 <div class="td-inner ">Prob (Total = 1)</div>
                 <div class="fht-cell"></div></td>
                 <td style="text-align: center; ">
                    <div class="td-inner ">cdf</div>
                    <div class="fht-cell"></div></td>
                    <td style="text-align: center; ">
                       <div class="td-inner ">Batas Bilangan Random</div>
                       <div class="fht-cell"></div></td>
            </tr>

      <tr>
             <td style="text-align: center; ">
               <div class="td-inner "><?php //if(isset($_GET['input2']))
               //{ echo $_GET["demanda1"]; }?>
<input class="form-control" placeholder="" type="text" name="hasildemanda1" id="hasildemanda1">
						 </div>
                <div class="fht-cell"></div></td>
                <td style="text-align: center; ">
                  <div class="td-inner ">
										<?php //if(isset($_GET['input2'])){ echo $_GET["proba1"]; }?></div>
										<input class="form-control" placeholder="" type="text" name="hasilproba1" id="hasilproba1">
                   <div class="fht-cell"></div></td>
                   <td style="text-align: center; ">
                     <div class="td-inner ">
											 <?php //if(isset($_GET['input2'])){ echo $_GET["proba1"]; }?></div>
											 <input class="form-control" placeholder="" name="hasilcdfa1" id="hasilcdfa1" type="text">
                      <div class="fht-cell"></div></td>
                      <td style="text-align: center; ">
                        <div class="td-inner ">
													<script>
													document.write(0+" <= Ri <= "+parseFloat($('#hasilcdfa1').val()));
													</script>
													<?php //if(isset($_GET['input2'])){ echo 0;  echo " <= Ri <= "; echo $_GET["proba1"]; }?></div>
                         <div class="fht-cell"></div></td>
              </tr>

              <tr>
                     <td style="text-align: center; ">
                       <div class="td-inner ">
												 <?php //if(isset($_GET['input2'])) { echo $_GET["demanda2"]; }?></div>
											 <input class="form-control" placeholder="" type="text" name="hasildemanda2" id="hasildemanda2">
                        <div class="fht-cell"></div></td>
                        <td style="text-align: center; ">
                          <div class="td-inner ">
														<?php //if(isset($_GET['input2'])){ echo $_GET["proba2"]; }?></div>
														<input class="form-control" placeholder="" type="text" name="hasilproba2" id="hasilproba2">
                           <div class="fht-cell"></div></td>
                           <td style="text-align: center; ">
                             <div class="td-inner ">
															 <?php //if(isset($_GET['input2'])){ echo $_GET["proba1"]+$_GET["proba2"]; }?></div>
															 <input class="form-control" placeholder="" name="hasilcdfa2" id="hasilcdfa2" type="text">
                              <div class="fht-cell"></div></td>
                              <td style="text-align: center; ">
                                <div class="td-inner ">
																	<script>
																	document.write(parseFloat($('#hasilcdfa1').val())+" < Ri <= "+parseFloat($('#hasilcdfa2').val()));
																	</script>
																	<?php //if(isset($_GET['input2'])){ echo $_GET["proba1"];  echo " < Ri <= "; echo $_GET["proba1"]+$_GET["proba2"]; }?></div>
                                 <div class="fht-cell"></div></td>
                      </tr>

                      <tr>
                             <td style="text-align: center; ">
                               <div class="td-inner ">
																 <?php //if(isset($_GET['input2'])){ echo $_GET["demanda3"]; }?>
                          <input class="form-control" placeholder="" type="text" name="hasildemanda3" id="hasildemanda3">
														 </div>
                                <div class="fht-cell"></div></td>
                                <td style="text-align: center; ">
                                  <div class="td-inner ">
																		<?php //if(isset($_GET['input2'])){ echo $_GET["proba3"]; }?></div>
																		<input class="form-control" placeholder="" type="text" name="hasilproba3" id="hasilproba3">
                                   <div class="fht-cell"></div></td>
                                   <td style="text-align: center; ">
                                     <div class="td-inner ">
																			 <input class="form-control" placeholder="" name="hasilcdfa3" id="hasilcdfa3" type="text">
																			 <?php //if(isset($_GET['input2'])){ echo $_GET["proba1"]+$_GET["proba2"]+$_GET["proba3"]; }?></div>
                                      <div class="fht-cell"></div></td>
                                      <td style="text-align: center; ">
                                        <div class="td-inner ">
																					<script>
																					document.write(parseFloat($('#hasilcdfa2').val())+" < Ri <= "+parseFloat($('#hasilcdfa3').val()));
																					</script>
																					<?php //if(isset($_GET['input2'])){ echo $_GET["proba1"]+$_GET["proba2"];  echo " < Ri <= "; echo $_GET["proba1"]+$_GET["proba2"]+$_GET["proba3"]; }?></div>
                                         <div class="fht-cell"></div></td>
                              </tr>


                  </tbody></table>

<br>
<p>b. Harga Jual : $ <input class="form-control" placeholder="" type="text" name="hasilhargappp2" id="hasilhargappp2">
	<?php //if(isset($_GET['input'])){ echo $_GET["penjualan2"]; }?></p>
            <table data-toggle="table" class="table table-hover">

           <tbody><tr><td style="text-align: center; ">
              <div class="td-inner ">Demand</div>
              <div class="fht-cell"></div></td>
              <td style="text-align: center; ">
                 <div class="td-inner ">Prob (Total = 1)</div>
                 <div class="fht-cell"></div></td>
                 <td style="text-align: center; ">
                    <div class="td-inner ">cdf</div>
                    <div class="fht-cell"></div></td>
                    <td style="text-align: center; ">
                       <div class="td-inner ">Batas Bilangan Random</div>
                       <div class="fht-cell"></div></td>
            </tr>

      <tr>
             <td style="text-align: center; ">
               <div class="td-inner ">
								 <?php //if(isset($_GET['input2'])){ echo $_GET["demandb1"]; }?></div>
								 <input class="form-control" placeholder="" type="text" name="hasildemandb1" id="hasildemandb1">
                <div class="fht-cell"></div></td>
                <td style="text-align: center; ">
                  <div class="td-inner ">
										<?php //if(isset($_GET['input2'])){ echo $_GET["probb1"]; }?></div>
										<input class="form-control" placeholder="" type="text" name="hasilprobb1" id="hasilprobb1">
                   <div class="fht-cell"></div></td>
                   <td style="text-align: center; ">
                     <div class="td-inner ">
											 <?php //if(isset($_GET['input2'])){ echo $_GET["probb1"]; }?></div>
											 <input class="form-control" placeholder="" name="hasilcdfb1" id="hasilcdfb1" type="text">
                      <div class="fht-cell"></div></td>
                      <td style="text-align: center; ">
                        <div class="td-inner ">
													<script>
													document.write(0+" <= Ri <= "+parseFloat($('#hasilcdfb1').val()));
													</script>
													<?php //if(isset($_GET['input2'])){ echo 0;  echo " <= Ri <= "; echo $_GET["probb1"]; }?></div>
                         <div class="fht-cell"></div></td>
              </tr>

              <tr>
                     <td style="text-align: center; ">
                       <div class="td-inner ">
												 <?php //if(isset($_GET['input2'])) { echo $_GET["demandb2"]; }?></div>
												 <input class="form-control" placeholder="" type="text" name="hasildemandb2" id="hasildemandb2">
                        <div class="fht-cell"></div></td>
                        <td style="text-align: center; ">
                          <div class="td-inner ">
														<?php //if(isset($_GET['input2'])){ echo $_GET["probb2"]; }?></div>
														<input class="form-control" placeholder="" type="text" name="hasilprobb2" id="hasilprobb2">
                           <div class="fht-cell"></div></td>
                           <td style="text-align: center; ">
                             <div class="td-inner ">
															 <input class="form-control" placeholder="" name="hasilcdfb2" id="hasilcdfb2" type="text">
															 <?php //if(isset($_GET['input2'])){ echo $_GET["probb1"]+$_GET["probb2"]; }?></div>
                              <div class="fht-cell"></div></td>
                              <td style="text-align: center; ">
                                <div class="td-inner ">
																	<script>
																	document.write(parseFloat($('#hasilcdfb1').val())+" < Ri <= "+parseFloat($('#hasilcdfb2').val()));
																	</script>
																	<?php //if(isset($_GET['input2'])){ echo $_GET["probb1"];  echo " < Ri <= "; echo $_GET["probb1"]+$_GET["probb2"]; }?></div>
                                 <div class="fht-cell"></div></td>
                      </tr>

                      <tr>
                             <td style="text-align: center; ">
                               <div class="td-inner ">
																 <?php //if(isset($_GET['input2'])) { echo $_GET["demandb3"]; }?></div>
																 <input class="form-control" placeholder="" type="text" name="hasildemandb3" id="hasildemandb3">
                                <div class="fht-cell"></div></td>
                                <td style="text-align: center; ">
                                  <div class="td-inner ">
																		<?php //if(isset($_GET['input2'])){ echo $_GET["probb3"]; }?></div>
																		<input class="form-control" placeholder="" type="text" name="hasilprobb3" id="hasilprobb3">
                                   <div class="fht-cell"></div></td>
                                   <td style="text-align: center; ">
                                     <div class="td-inner ">
																			 <input class="form-control" placeholder="" name="hasilcdfb3" id="hasilcdfb3" type="text">
																			 <?php //if(isset($_GET['input2'])){ echo $_GET["probb1"]+$_GET["probb2"]+$_GET["probb3"]; }?></div>
                                      <div class="fht-cell"></div></td>
                                      <td style="text-align: center; ">
                                        <div class="td-inner ">
																					<script>
																					document.write(parseFloat($('#hasilcdfb2').val())+" < Ri <= "+parseFloat($('#hasilcdfb3').val()));
																					</script>
																					<?php //if(isset($_GET['input2'])){ echo $_GET["probb1"]+$_GET["probb2"];  echo " < Ri <= "; echo $_GET["probb1"]+$_GET["probb2"]+$_GET["probb3"]; }?></div>
                                         <div class="fht-cell"></div></td>
                              </tr>


                  </tbody></table>


                  <p>c. Harga Jual : $ <input class="form-control" placeholder="" type="text" name="hasilhargappp3" id="hasilhargappp3">
										<?php //if(isset($_GET['input'])){ echo $_GET["penjualan3"]; }?></p>
                              <table data-toggle="table" class="table table-hover">

                             <tbody><tr><td style="text-align: center; ">
                                <div class="td-inner ">Demand</div>
                                <div class="fht-cell"></div></td>
                                <td style="text-align: center; ">
                                   <div class="td-inner ">Prob (Total = 1)</div>
                                   <div class="fht-cell"></div></td>
                                   <td style="text-align: center; ">
                                      <div class="td-inner ">cdf</div>
                                      <div class="fht-cell"></div></td>
                                      <td style="text-align: center; ">
                                         <div class="td-inner ">Batas Bilangan Random</div>
                                         <div class="fht-cell"></div></td>
                              </tr>

                        <tr>
                               <td style="text-align: center; ">
                                 <div class="td-inner ">
																	 <?php //if(isset($_GET['input2'])){ echo $_GET["demandc1"]; }?></div>
																	 <input class="form-control" placeholder="" type="text" name="hasildemandc1" id="hasildemandc1">
                                  <div class="fht-cell"></div></td>
                                  <td style="text-align: center; ">
                                    <div class="td-inner ">
																			<?php //if(isset($_GET['input2'])){ echo $_GET["probc1"]; }?></div>
																			<input class="form-control" placeholder="" type="text" name="hasilprobc1" id="hasilprobc1">
                                     <div class="fht-cell"></div></td>
                                     <td style="text-align: center; ">
                                       <div class="td-inner ">
																				 <input class="form-control" placeholder="" name="hasilcdfc1" id="hasilcdfc1" type="text">
																				 <?php //if(isset($_GET['input2'])){ echo $_GET["probc1"]; }?></div>
                                        <div class="fht-cell"></div></td>
                                        <td style="text-align: center; ">
                                          <div class="td-inner ">
																						<script>
																						document.write(0+" <= Ri <= "+parseFloat($('#hasilcdfc1').val()));
																						</script>
																						<?php //if(isset($_GET['input2'])){ echo 0;  echo " <= Ri <= "; echo $_GET["probc1"]; }?></div>
                                           <div class="fht-cell"></div></td>
                                </tr>

                                <tr>
                                       <td style="text-align: center; ">
                                         <div class="td-inner ">
																					 <?php //if(isset($_GET['input2'])){ echo $_GET["demandc2"]; }?></div>
																					 <input class="form-control" placeholder="" type="text" name="hasildemandc2" id="hasildemandc2">
                                          <div class="fht-cell"></div></td>
                                          <td style="text-align: center; ">
                                            <div class="td-inner ">
																							<?php //if(isset($_GET['input2'])){ echo $_GET["probc2"]; }?></div>
																							<input class="form-control" placeholder="" type="text" name="hasilprobc2" id="hasilprobc2">
                                             <div class="fht-cell"></div></td>
                                             <td style="text-align: center; ">
                                               <div class="td-inner ">
																								 <input class="form-control" placeholder="" name="hasilcdfc2" id="hasilcdfc2" type="text">
																								 <?php //if(isset($_GET['input2'])){ echo $_GET["probc1"]+$_GET["probc2"]; }?></div>
                                                <div class="fht-cell"></div></td>
                                                <td style="text-align: center; ">
                                                  <div class="td-inner ">
																										<script>
																										document.write(parseFloat($('#hasilcdfc1').val())+" < Ri <= "+parseFloat($('#hasilcdfc2').val()));
																										</script>
																										<?php //if(isset($_GET['input2'])){ echo $_GET["probc1"];  echo " < Ri <= "; echo $_GET["probc1"]+$_GET["probc2"]; }?></div>
                                                   <div class="fht-cell"></div></td>
                                        </tr>

                                        <tr>
                                               <td style="text-align: center; ">
                                                 <div class="td-inner ">
																									 <?php //if(isset($_GET['input2'])){ echo $_GET["demandc3"]; }?></div>
																									 <input class="form-control" placeholder="" type="text" name="hasildemandc3" id="hasildemandc3">
                                                  <div class="fht-cell"></div></td>
                                                  <td style="text-align: center; ">
                                                    <div class="td-inner ">
																											<?php //if(isset($_GET['input2'])){ echo $_GET["probc3"]; }?></div>
																											<input class="form-control" placeholder="" type="text" name="hasilprobc3" id="hasilprobc3">
                                                     <div class="fht-cell"></div></td>
                                                     <td style="text-align: center; ">
                                                       <div class="td-inner ">
																												 <input class="form-control" placeholder="" name="hasilcdfc3" id="hasilcdfc3" type="text">
																												 <?php //if(isset($_GET['input2'])){ echo $_GET["probc1"]+$_GET["probc2"]+$_GET["probc3"]; }?></div>
                                                        <div class="fht-cell"></div></td>
                                                        <td style="text-align: center; ">
                                                          <div class="td-inner ">
																														<script>
																														document.write(parseFloat($('#hasilcdfc2').val())+" < Ri <= "+parseFloat($('#hasilcdfc3').val()));
																														</script>
																														<?php //if(isset($_GET['input2'])){ echo $_GET["probc1"]+$_GET["probc2"];  echo " < Ri <= "; echo $_GET["probc1"]+$_GET["probc2"]+$_GET["probc3"]; }?></div>
                                                           <div class="fht-cell"></div></td>
                                                </tr>


                                    </tbody></table>



                                    <p>d. Harga Jual : $ <input class="form-control" placeholder="" type="text" name="hasilhargappp4" id="hasilhargappp4">
																			<?php //if(isset($_GET['input'])){ echo $_GET["penjualan4"]; }?></p>
                                                <table data-toggle="table" class="table table-hover">

                                               <tbody><tr><td style="text-align: center; ">
                                                  <div class="td-inner ">Demand</div>
                                                  <div class="fht-cell"></div></td>
                                                  <td style="text-align: center; ">
                                                     <div class="td-inner ">Prob (Total = 1)</div>
                                                     <div class="fht-cell"></div></td>
                                                     <td style="text-align: center; ">
                                                        <div class="td-inner ">cdf</div>
                                                        <div class="fht-cell"></div></td>
                                                        <td style="text-align: center; ">
                                                           <div class="td-inner ">Batas Bilangan Random</div>
                                                           <div class="fht-cell"></div></td>
                                                </tr>

                                          <tr>
                                                 <td style="text-align: center; ">
                                                   <div class="td-inner ">
																										 <?php //if(isset($_GET['input2'])){ echo $_GET["demandd1"]; }?></div>
																										 <input class="form-control" placeholder="" type="text" name="hasildemandd1" id="hasildemandd1">
                                                    <div class="fht-cell"></div></td>
                                                    <td style="text-align: center; ">
                                                      <div class="td-inner ">
																												<?php //if(isset($_GET['input2'])){ echo $_GET["probd1"]; }?></div>
																												<input class="form-control" placeholder="" type="text" name="hasilprobd1" id="hasilprobd1">
                                                       <div class="fht-cell"></div></td>
                                                       <td style="text-align: center; ">
                                                         <div class="td-inner ">
																													 <input class="form-control" placeholder="" name="hasilcdfd1" id="hasilcdfd1" type="text">
																													 <?php //if(isset($_GET['input2'])){ echo $_GET["probd1"]; }?></div>
                                                          <div class="fht-cell"></div></td>
                                                          <td style="text-align: center; ">
                                                            <div class="td-inner ">
																															<script>
																															document.write(0+" <= Ri <= "+parseFloat($('#hasilcdfd1').val()));
																															</script>
																															<?php //if(isset($_GET['input2'])){ echo 0;  echo " <= Ri <= "; echo $_GET["probd1"]; }?></div>
                                                             <div class="fht-cell"></div></td>
                                                  </tr>

                                                  <tr>
                                                         <td style="text-align: center; ">
                                                           <div class="td-inner ">
																														 <?php //if(isset($_GET['input2'])){ echo $_GET["demandd2"]; }?></div>
																														 <input class="form-control" placeholder="" type="text" name="hasildemandd2" id="hasildemandd2">
                                                            <div class="fht-cell"></div></td>
                                                            <td style="text-align: center; ">
                                                              <div class="td-inner ">
																																<?php //if(isset($_GET['input2'])){ echo $_GET["probd2"]; }?></div>
																																<input class="form-control" placeholder="" type="text" name="hasilprobd2" id="hasilprobd2">
                                                               <div class="fht-cell"></div></td>
                                                               <td style="text-align: center; ">
                                                                 <div class="td-inner ">
																																	 <input class="form-control" placeholder="" name="hasilcdfd2" id="hasilcdfd2" type="text">
																																	 <?php //if(isset($_GET['input2'])) { echo $_GET["probd1"]+$_GET["probd2"]; }?></div>
                                                                  <div class="fht-cell"></div></td>
                                                                  <td style="text-align: center; ">
                                                                    <div class="td-inner ">
																																			<script>
																																			document.write(parseFloat($('#hasilcdfd1').val())+" < Ri <= "+parseFloat($('#hasilcdfd2').val()));
																																			</script>
																																			<?php //if(isset($_GET['input2'])){ echo $_GET["probd1"];  echo " < Ri <= "; echo $_GET["probd1"]+$_GET["probd2"]; }?></div>
                                                                     <div class="fht-cell"></div></td>
                                                          </tr>

                                                          <tr>
                                                                 <td style="text-align: center; ">
                                                                   <div class="td-inner ">
																																		 <?php //if(isset($_GET['input2'])) { echo $_GET["demandd3"]; }?></div>
																																		 <input class="form-control" placeholder="" type="text" name="hasildemandd3" id="hasildemandd3">
                                                                    <div class="fht-cell"></div></td>
                                                                    <td style="text-align: center; ">
                                                                      <div class="td-inner ">
																																				<?php //if(isset($_GET['input2'])){ echo $_GET["probd3"]; }?></div>
																																				<input class="form-control" placeholder="" type="text" name="hasilprobd3" id="hasilprobd3">
                                                                       <div class="fht-cell"></div></td>
                                                                       <td style="text-align: center; ">
                                                                         <div class="td-inner ">
																																					 <input class="form-control" placeholder="" name="hasilcdfd3" id="hasilcdfd3" type="text">
																																					 <?php //if(isset($_GET['input2'])){ echo $_GET["probd1"]+$_GET["probd2"]+$_GET["probd3"]; }?></div>
                                                                          <div class="fht-cell"></div></td>
                                                                          <td style="text-align: center; ">
                                                                            <div class="td-inner ">
																																							<script>
																																							document.write(parseFloat($('#hasilcdfd2').val())+" < Ri <= "+parseFloat($('#hasilcdfd3').val()));
																																							</script>
																																							<?php //if(isset($_GET['input2'])){ echo $_GET["probd1"]+$_GET["probd2"];  echo " < Ri <= "; echo $_GET["probd1"]+$_GET["probd2"]+$_GET["probd3"]; }?></div>
                                                                             <div class="fht-cell"></div></td>
                                                                  </tr>


                                                      </tbody></table>


                                                      <p>e. Harga Jual : $ <input class="form-control" placeholder="" type="text" name="hasilhargappp5" id="hasilhargappp5">
																												<?php //if(isset($_GET['input'])){ echo $_GET["penjualan5"]; }?></p>
                                                                  <table data-toggle="table" class="table table-hover">

                                                                 <tbody><tr bgcolor:"#F5F5F5"><td style="text-align: center; ">
                                                                    <div class="td-inner ">Demand</div>
                                                                    <div class="fht-cell"></div></td>
                                                                    <td style="text-align: center; ">
                                                                       <div class="td-inner ">Prob (Total = 1)</div>
                                                                       <div class="fht-cell"></div></td>
                                                                       <td style="text-align: center; ">
                                                                          <div class="td-inner ">cdf</div>
                                                                          <div class="fht-cell"></div></td>
                                                                          <td style="text-align: center; ">
                                                                             <div class="td-inner ">Batas Bilangan Random</div>
                                                                             <div class="fht-cell"></div></td>
                                                                  </tr>

                                                            <tr>
                                                                   <td style="text-align: center; ">
                                                                     <div class="td-inner ">
																																			 <?php //if(isset($_GET['input2'])){ echo $_GET["demande1"]; }?></div>
																																			 <input class="form-control" placeholder="" type="text" name="hasildemande1" id="hasildemande1">
                                                                      <div class="fht-cell"></div></td>
                                                                      <td style="text-align: center; ">
                                                                        <div class="td-inner ">
																																					<?php //if(isset($_GET['input2'])){ echo $_GET["probe1"]; }?></div>
																																					<input class="form-control" placeholder="" type="text" name="hasilprobe1" id="hasilprobe1">
                                                                         <div class="fht-cell"></div></td>
                                                                         <td style="text-align: center; ">
                                                                           <div class="td-inner ">
																																						 <input class="form-control" placeholder="" name="hasilcdfe1" id="hasilcdfe1" type="text">
																																						 <?php //if(isset($_GET['input2'])){ echo $_GET["probe1"]; }?></div>
                                                                            <div class="fht-cell"></div></td>
                                                                            <td style="text-align: center; ">
                                                                              <div class="td-inner ">
																																								<script>
																																								document.write(0+" <= Ri <= "+parseFloat($('#hasilcdfe1').val()));
																																								</script>
																																								<?php //if(isset($_GET['input2'])){ echo 0;  echo " <= Ri <= "; echo $_GET["probe1"]; }?></div>
                                                                               <div class="fht-cell"></div></td>
                                                                    </tr>

                                                                    <tr>
                                                                           <td style="text-align: center; ">
                                                                             <div class="td-inner ">
																																							 <?php //if(isset($_GET['input2'])){ echo $_GET["demande2"]; }?></div>
																																							 <input class="form-control" placeholder="" type="text" name="hasildemande2" id="hasildemande2">
                                                                              <div class="fht-cell"></div></td>
                                                                              <td style="text-align: center; ">
                                                                                <div class="td-inner ">
																																									<?php //if(isset($_GET['input2'])){ echo $_GET["probe2"]; }?></div>
																																									<input class="form-control" placeholder="" type="text" name="hasilprobe2" id="hasilprobe2">
                                                                                 <div class="fht-cell"></div></td>
                                                                                 <td style="text-align: center; ">
                                                                                   <div class="td-inner ">
																																										 <input class="form-control" placeholder="" name="hasilcdfe2" id="hasilcdfe2" type="text">
																																										 <?php //if(isset($_GET['input2'])){ echo $_GET["probe1"]+$_GET["probe2"]; }?></div>
                                                                                    <div class="fht-cell"></div></td>
                                                                                    <td style="text-align: center; ">
                                                                                      <div class="td-inner ">
																																												<script>
																																												document.write(parseFloat($('#hasilcdfe1').val())+" < Ri <= "+parseFloat($('#hasilcdfe2').val()));
																																												</script>
																																												<?php //if(isset($_GET['input2'])){ echo $_GET["probe1"];  echo " < Ri <= "; echo $_GET["probe1"]+$_GET["probe2"]; }?></div>
                                                                                       <div class="fht-cell"></div></td>
                                                                            </tr>

                                                                            <tr>
                                                                                   <td style="text-align: center; ">
                                                                                     <div class="td-inner ">
																																											 <?php //if(isset($_GET['input2'])) { echo $_GET["demande3"]; }?></div>
																																											 <input class="form-control" placeholder="" type="text" name="hasildemande3" id="hasildemande3">
                                                                                      <div class="fht-cell"></div></td>
                                                                                      <td style="text-align: center; ">
                                                                                        <div class="td-inner ">
																																													<?php //if(isset($_GET['input2'])){ echo $_GET["probe3"]; }?></div>
																																													<input class="form-control" placeholder="" type="text" name="hasilprobe3" id="hasilprobe3">
                                                                                         <div class="fht-cell"></div></td>
                                                                                         <td style="text-align: center; ">
                                                                                           <div class="td-inner ">
																																														 <input class="form-control" placeholder="" name="hasilcdfe3" id="hasilcdfe3" type="text">
																																														 <?php //if(isset($_GET['input2'])){ echo $_GET["probe1"]+$_GET["probe2"]+$_GET["probe3"]; }?></div>
                                                                                            <div class="fht-cell"></div></td>
                                                                                            <td style="text-align: center; ">
                                                                                              <div class="td-inner ">
																																																<script>
																																																document.write(parseFloat($('#hasilcdfe2').val())+" < Ri <= "+parseFloat($('#hasilcdfe3').val()));
																																																</script>
																																																<?php //if(isset($_GET['input2'])){ echo $_GET["probe1"]+$_GET["probe2"];  echo " < Ri <= "; echo $_GET["probe1"]+$_GET["probe2"]+$_GET["probe3"]; }?></div>
                                                                                               <div class="fht-cell"></div></td>
                                                                                    </tr>


                                                                        </tbody></table>

                </div>
<div class="clearfix"></div>
</div>
</div>
</div>




<div class="col-lg-12">

<div class="panel panel-default">
<div class="panel-heading">Mencari Gross Income/year (GI/thn)</div>
<div class="panel-body">
	<div class="bootstrap-table">

<div class="col-lg-6">

		<table data-toggle="table" class="table table-hover">

		<tbody><tr><td style="text-align: center; " colspan="4">
			<div class="td-inner ">R1</div>
			<div class="fht-cell"></div></td>
		</tr>

		<tr><td style="text-align: left; ">
			 <div class="td-inner ">Harga Penjualan R1 =</div>
			 <div class="fht-cell"></div></td>
			 <td style="text-align: left; ">
					<div class="td-inner "><input class="form-control" placeholder="" type="text" name="penjualan1" id="penjualan1"></div>
					<div class="fht-cell"></div></td>
					<td style="text-align: left; ">
						 <div class="td-inner ">Harga Jual =</div>
						 <div class="fht-cell"></div></td>
						 <td style="text-align: left; ">
								<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilhargajualr1" id="hasilhargajualr1"></div>
								<div class="fht-cell"></div></td>
		 </tr>

		 <tr><td style="text-align: left; ">
				<div class="td-inner ">Permintaan R1 =</div>
				<div class="fht-cell"></div></td>
				<td style="text-align: left; ">
					 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="permintaan1" id="permintaan1"></div>
					 <div class="fht-cell"></div></td>
					 <td style="text-align: left; ">
							<div class="td-inner ">Demand =</div>
							<div class="fht-cell"></div></td>
							<td style="text-align: left; ">
								 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasildemandr1" id="hasildemandr1"></div>
								 <div class="fht-cell"></div></td>
			</tr>

			<tr><td style="text-align: left; ">
				 <div class="td-inner ">Gross Income (GI)/thn =</div>
				 <div class="fht-cell"></div></td>
				 <td style="text-align: left; " colspan="3">
						<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilgir1" id="hasilgir1"></div>
						<div class="fht-cell"></div></td>
			 </tr>


					</tbody></table><div>


	</div>
<div class="clearfix"></div>
</div>




<div class="col-lg-6">

		<table data-toggle="table" class="table table-hover">

		<tbody><tr><td style="text-align: center; " colspan="4">
			<div class="td-inner ">R2</div>
			<div class="fht-cell"></div></td>
		</tr>

		<tr><td style="text-align: left; ">
			 <div class="td-inner ">Harga Penjualan R2 =</div>
			 <div class="fht-cell"></div></td>
			 <td style="text-align: left; ">
					<div class="td-inner "><input class="form-control" placeholder="" type="text" name="penjualan2" id="penjualan2"></div>
					<div class="fht-cell"></div></td>
					<td style="text-align: left; ">
						 <div class="td-inner ">Harga Jual =</div>
						 <div class="fht-cell"></div></td>
						 <td style="text-align: left; ">
								<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilhargajualr2" id="hasilhargajualr2"></div>
								<div class="fht-cell"></div></td>
		 </tr>

		 <tr><td style="text-align: left; ">
				<div class="td-inner ">Permintaan R2 =</div>
				<div class="fht-cell"></div></td>
				<td style="text-align: left; ">
					 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="permintaan2" id="permintaan2"></div>
					 <div class="fht-cell"></div></td>
					 <td style="text-align: left; ">
							<div class="td-inner ">Demand =</div>
							<div class="fht-cell"></div></td>
							<td style="text-align: left; ">
								 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasildemandr2" id="hasildemandr2"></div>
								 <div class="fht-cell"></div></td>
			</tr>

			<tr><td style="text-align: left; ">
				 <div class="td-inner ">Gross Income (GI)/thn =</div>
				 <div class="fht-cell"></div></td>
				 <td style="text-align: left; " colspan="3">
						<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilgir2" id="hasilgir2"></div>
						<div class="fht-cell"></div></td>
			 </tr>


					</tbody></table><div>


	</div>
<div class="clearfix"></div>
</div>

<br>
<br>

<div class="col-lg-6">

		<table data-toggle="table" class="table table-hover">

		<tbody><tr><td style="text-align: center; " colspan="4">
			<div class="td-inner ">R3</div>
			<div class="fht-cell"></div></td>
		</tr>

		<tr><td style="text-align: left; ">
			 <div class="td-inner ">Harga Penjualan R3 =</div>
			 <div class="fht-cell"></div></td>
			 <td style="text-align: left; ">
					<div class="td-inner "><input class="form-control" placeholder="" type="text" name="penjualan3" id="penjualan3"></div>
					<div class="fht-cell"></div></td>
					<td style="text-align: left; ">
						 <div class="td-inner ">Harga Jual =</div>
						 <div class="fht-cell"></div></td>
						 <td style="text-align: left; ">
								<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilhargajualr3" id="hasilhargajualr3"></div>
								<div class="fht-cell"></div></td>
		 </tr>

		 <tr><td style="text-align: left; ">
				<div class="td-inner ">Permintaan R3 =</div>
				<div class="fht-cell"></div></td>
				<td style="text-align: left; ">
					 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="permintaan3" id="permintaan3"></div>
					 <div class="fht-cell"></div></td>
					 <td style="text-align: left; ">
							<div class="td-inner ">Demand =</div>
							<div class="fht-cell"></div></td>
							<td style="text-align: left; ">
								 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasildemandr3" id="hasildemandr3"></div>
								 <div class="fht-cell"></div></td>
			</tr>

			<tr><td style="text-align: left; ">
				 <div class="td-inner ">Gross Income (GI)/thn =</div>
				 <div class="fht-cell"></div></td>
				 <td style="text-align: left; " colspan="3">
						<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilgir3" id="hasilgir3"></div>
						<div class="fht-cell"></div></td>
			 </tr>


					</tbody></table><div>


	</div>
<div class="clearfix"></div>
</div>


<div class="col-lg-6">

		<table data-toggle="table" class="table table-hover">

		<tbody><tr><td style="text-align: center; " colspan="4">
			<div class="td-inner ">R4</div>
			<div class="fht-cell"></div></td>
		</tr>

		<tr><td style="text-align: left; ">
			 <div class="td-inner ">Harga Penjualan R4 =</div>
			 <div class="fht-cell"></div></td>
			 <td style="text-align: left; ">
					<div class="td-inner "><input class="form-control" placeholder="" type="text" name="penjualan4" id="penjualan4"></div>
					<div class="fht-cell"></div></td>
					<td style="text-align: left; ">
						 <div class="td-inner ">Harga Jual =</div>
						 <div class="fht-cell"></div></td>
						 <td style="text-align: left; ">
								<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilhargajualr4" id="hasilhargajualr4"></div>
								<div class="fht-cell"></div></td>
		 </tr>

		 <tr><td style="text-align: left; ">
				<div class="td-inner ">Permintaan R4 =</div>
				<div class="fht-cell"></div></td>
				<td style="text-align: left; ">
					 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="permintaan4" id="permintaan4"></div>
					 <div class="fht-cell"></div></td>
					 <td style="text-align: left; ">
							<div class="td-inner ">Demand =</div>
							<div class="fht-cell"></div></td>
							<td style="text-align: left; ">
								 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasildemandr4" id="hasildemandr4"></div>
								 <div class="fht-cell"></div></td>
			</tr>

			<tr><td style="text-align: left; ">
				 <div class="td-inner ">Gross Income (GI)/thn =</div>
				 <div class="fht-cell"></div></td>
				 <td style="text-align: left; " colspan="3">
						<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilgir4" id="hasilgir4"></div>
						<div class="fht-cell"></div></td>
			 </tr>


					</tbody></table><div>


	</div>
<div class="clearfix"></div>
</div>

<br>
<br>

<div class="col-lg-6">

		<table data-toggle="table" class="table table-hover">

		<tbody><tr><td style="text-align: center; " colspan="4">
			<div class="td-inner ">R5</div>
			<div class="fht-cell"></div></td>
		</tr>

		<tr><td style="text-align: left; ">
			 <div class="td-inner ">Harga Penjualan R5 =</div>
			 <div class="fht-cell"></div></td>
			 <td style="text-align: left; ">
					<div class="td-inner "><input class="form-control" placeholder="" type="text" name="penjualan5" id="penjualan5"></div>
					<div class="fht-cell"></div></td>
					<td style="text-align: left; ">
						 <div class="td-inner ">Harga Jual =</div>
						 <div class="fht-cell"></div></td>
						 <td style="text-align: left; ">
								<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilhargajualr5" id="hasilhargajualr5"></div>
								<div class="fht-cell"></div></td>
		 </tr>

		 <tr><td style="text-align: left; ">
				<div class="td-inner ">Permintaan R5 =</div>
				<div class="fht-cell"></div></td>
				<td style="text-align: left; ">
					 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="permintaan5" id="permintaan5"></div>
					 <div class="fht-cell"></div></td>
					 <td style="text-align: left; ">
							<div class="td-inner ">Demand =</div>
							<div class="fht-cell"></div></td>
							<td style="text-align: left; ">
								 <div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasildemandr5" id="hasildemandr5"></div>
								 <div class="fht-cell"></div></td>
			</tr>

			<tr><td style="text-align: left; ">
				 <div class="td-inner ">Gross Income (GI)/thn =</div>
				 <div class="fht-cell"></div></td>
				 <td style="text-align: left; " colspan="3">
						<div class="td-inner "><input class="form-control" placeholder="" type="text" name="hasilgir5" id="hasilgir5"></div>
						<div class="fht-cell"></div></td>
			 </tr>


					</tbody></table><div>


	</div>
<div class="clearfix"></div>
</div>



</div>
</div>


	</div>


</div>

<div class="col-lg-12">

<div class="panel panel-default">
<div class="panel-heading">Kesimpulan (Cari Nilai GI)</div>
<div class="panel-body">
	<div class="bootstrap-table">

			<table data-toggle="table" class="table table-hover">

		 <tr><td style="text-align: left; " >
				<div class="td-inner ">Masukkan Nilai GI >=</div>
				<div class="fht-cell"></div></td>
				<td style="" colspan="7"><input class="form-control" placeholder="" type="text" name="hasilcarigi" id="hasilcarigi"></td>
			</tr>

				<tr>
				<td style=""><div class="td-inner ">Harga Penjualan :</div>
					<div class="fht-cell"></div></td>
					<td style=""><input class="form-control" placeholder="" type="text" name="hasilcarihargapenjualan" id="hasilcarihargapenjualan"></td>
					<td style=""><div class="td-inner ">Harga Jual :</div>
						<div class="fht-cell"></div></td>
						<td style=""><input class="form-control" placeholder="" type="text" name="carihargajual" id="carihargajual"></td>
						<td style=""><div class="td-inner ">Permintaan :</div>
							<div class="fht-cell"></div></td>
							<td style=""><input class="form-control" placeholder="" type="text" name="caripermintaan" id="caripermintaan"></td>
							<td style=""><div class="td-inner ">Demand :</div>
								<div class="fht-cell"></div></td>
								<td style=""><input class="form-control" placeholder="" type="text" name="caridemand" id="caridemand"></td>
				</tr>


</table>

					</div>
</div>
</div>

			</div>




	<!--/.main-->

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
