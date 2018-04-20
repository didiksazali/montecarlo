<?php
 // memanggil file koneksi.php
 include "include/koneksi.php";


 //fungsi anti sql injection untuk username
function antiinjeksuser($username)
{
	$u_aman=mysql_escape_string(stripcslashes(strip_tags(htmlspecialchars($username,ENT_QUOTES))));
	return $u_aman;
}

//fungsi anti sql injection untuk password
function antiinjekpas($password)
{
	$p_aman=mysql_escape_string(stripcslashes(strip_tags(htmlspecialchars($password,ENT_QUOTES))));
	return $p_aman;
}


 // membuat variable dengan nilai dari form
 $username = antiinjeksuser($_POST['username']); // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
 $password = md5(antiinjeksuser($_POST['password']));



 // menyesuaikan dengan data di database
 $sqlquery ="select * from login WHERE username = '$username' AND password = '$password'";
 $result = mysqli_query($koneksi, $sqlquery);
 $row = mysqli_fetch_assoc($result);
 if ($row['username'] == $username AND $row['password'] == $password) {
 session_start(); // memulai fungsi session
 $_SESSION['username'] = $username;
 $_SESSION['level']=$row['level'];
 $_SESSION['timeout']=time()+36000;
 header("location:index.php"); // jika berhasil login, maka masuk ke file home.php
 }
 else {
 //echo "Gagal Masuk"; // jika gagal, maka muncul teks gagal masuk
header("location:index.php");
 }
 ?>
