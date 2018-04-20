<?php if(isset($_POST['input']))
{

$nik = $_POST["nik"];
$nama = $_POST["nama"];

$sql = "INSERT INTO data VALUES ('$nik','$nama','$tempat_tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$status_perkawinan', '$pekerjaan', '$kewarganegaraan', '$golongan_darah', '$foto')";

if(mysqli_query($koneksi, $sql))
{
mysqli_close($koneksi);

echo '<script type="text/javascript">';
echo 'alert("Data Berhasil Ditambah");';
echo 'window.location.href="../admin/index.php";';
echo '</script>';
}
else {
echo "Error ".mysqli_error($koneksi);
}
}
?>
