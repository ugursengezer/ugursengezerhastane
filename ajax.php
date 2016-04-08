<?php 



error_reporting(0);


require_once('config.php');

header("Content-Type:application/json;charset=utf-8");


$id=$_POST['ad'];

		$query = "SELECT doktorlar.id,doktorlar.doktor_ad FROM doktorlar
			inner join kategori on kategori.id=doktorlar.kategori_id WHERE kategori.id=".$id;

	$result=mysqli_query($conn, $query);
	$arr = array();

while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$arr[]= $row;
		}
echo json_encode($arr);




?>