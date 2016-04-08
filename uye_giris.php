<?php
require_once('config.php');




if (isset($_POST['tcno'])) {

$email = $_POST["email"];
$tcno = $_POST["tcno"];



$result= $conn->query("SELECT * FROM uyeler WHERE email='$email' AND tcno='$tcno'"); 
$row = $result->fetch_array(MYSQLI_BOTH);



 if(!$row){
            echo "<div>";
            echo "TC No veya E-Posta Hatali";
            echo "</div>";
            header("Location: sifre_hatasi.php");
        }else {


session_start();/*usuerid*/
$_SESSION["tcno"] = $row["tcno"];
$_SESSION["id"] = $row["id"];
$_SESSION["ad"] = $row["ad"];
$_SESSION["soyad"] = $row["soyad"];
$_SESSION["yetki"] = $row["yetki"];


//kontrol buraya


header("Location: Account.php");

}
}
?>