<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//Getting values
$nim = $_POST['nim'];
$nm = $_POST['nama'];
$prd = $_POST['prodi'];
//Creating an sql query
$sql = "INSERT INTO tb_mahasiswa (nim,nama,prodi) VALUES ('$nim','$nm','$prd')";
//Importing our db connection script
require_once('dbConnect.php');
//Executing query to database
if(mysqli_query($con,$sql)){
echo 'Data Berhasil Tesimpan!';
}else{
echo 'Gagal Menyimpan Data';
}
//Closing the database
mysqli_close($con);
}
?>