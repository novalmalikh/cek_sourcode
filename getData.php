<?php
$id = $_GET['id'];
require_once('dbConnect.php');
$sql = "SELECT * FROM tb_mahasiswa WHERE id=$id";
$r = mysqli_query($con,$sql);
$result = array();
$row = mysqli_fetch_array($r);
array_push($result,array(
"id"=>$row['id'],
"nim"=>$row['nim'],
"nama"=>$row['nama'],
"prodi"=>$row['prodi']
));
echo json_encode(array('result'=>$result));
mysqli_close($con);

?>