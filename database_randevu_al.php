<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deneme";


require_once('config.php');


/*if(isset($_POST)){
	var_dump($_POST);
}
*/
/* tabloid   = postid yanı sayfa   */


$tarih = $_POST["tarih"];
$time = $_POST["time"];
$konu = $_POST["konu"];
$uyeler_id = $_POST["uye_id"];
$doktor = $_POST["doktor"];
$kategori_id = $_POST["kategori_input"];



if ($tarih == "" or $time=="") {

	die( "<b>Lutfen eksiksiz tamamlayiniz</b><br><a href=randevu.php>Geri Gel</a></center>");

}





	
/*
if(isset($_GET['tcno'])){

      echo 'kaydiniz basariyla gerceklesti';

      } 

      else{

          echo "<h3>sartlari kabul ettiginizi onaylamalisiniz<h3>";

      }
*/


$query ="INSERT INTO randevu(konu,tarih,time,uyeler_id,doktor,kategori_id) VALUES (?,?,?,?,?,?)";
$stmt = $conn -> prepare($query);

$stmt -> bind_param("sssisi",$val1, $val2, $val3, $val4,$val5,$val6);

$val1 = $konu; /*formlardki isiler*/
$val2 = $tarih;
$val3 = $time;
$val4 = $uyeler_id;
$val5 = $doktor;
$val6 = $kategori_id;


$stmt -> execute();
$stmt -> close();

/*
$query = "SELECT ad, soyad, tcno, email FROM dis_table";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_row()) {
		printf("%s (%s,%s)\n", $row[0], $row[1], $row[2], $row[3]);
	}

	$result->close();
}
*/
$conn -> close();




echo "<center><b>Kayit eklendi. Lutfen bekleyiniz.</b><br><br><a href=randevu.php>Randevu Sayfası</a></center>";
header("Refresh: 3; url= randevu.php");
?>