<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
require_once('dbConnect.php');
$sql = "UPDATE tb_mahasiswa SET nim = '$nim', nama = '$nama', prodi =
'$prodi' WHERE id = $id;";
if(mysqli_query($con,$sql)){
echo 'Data Berhasil di Perbaharui!';
}else{
echo 'Gagal Memperbaharui Data';
}
mysqli_close($con);
}
?>