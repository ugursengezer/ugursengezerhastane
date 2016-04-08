
<html>
<head>
 <meta charset="utf-8">
</head>
<body>

</body>
</html>



<?php
require_once('config.php');

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$tcno = $_POST["tcno"];
$email = $_POST["email"];
$tarih = date("Y-m-d h:i:s");



if ($ad == "" or $soyad == "" or $tcno=="") {

	die( "<b>Lütfen, boş alan bırakmayınız!</b><br><a href=kayit_ol.php>Kayit Sayfasi</a></center>");

}


/*
$_SESSION["kullaniciad"] = $_POST["ad"];
$_SESSION["kullanicisoyad"] = $_POST["soyad"];
$_SESSION["kullanicitcno"] = $_POST["tcno"];
$_SESSION["kullaniciemail"] = $_POST["email"];
$_SESSION["kullanicihata"] = 'Lütfen girmiş olduğunuz değerleri kontrol ediniz.';

if(isset($_SESSION["kullaniciemail"]) && isset($_SESSION["kullanicitcno"])  ) {
		


		 header("Location: kayit_ol.php");

	}


*/








//TC Dogrumalama

$input_tcno = $_POST['tcno'];



if (preg_match('/^\d{11}$/', $input_tcno)) 
{   //preg_math tcnın 11 olmasını dogrular. dogruyla devam eder.
//eposta doğru ise bunu yapar

  //EPOSTA DOGRUMA



		$input_epostaadresi = $_POST['email'];
		 
		function turkcekarakter_kontrolu($deger){
			//turkce karakterli olan mailleri görür !! engeller
			$turkcekarakterler = array('ç','ı','ğ','ö','ü','ş','Ç','İ','Ğ','Ö','Ü','Ş');
		 
			$hatalikarakter=false;
				foreach($turkcekarakterler as $turkcekarakter){
					if(strpos($deger,$turkcekarakter)!=false){
					$hatalikarakter = true;
					break;
					}
				}
				return $hatalikarakter;
		}

		 
			if(filter_var($input_epostaadresi, FILTER_VALIDATE_EMAIL)!= false && turkcekarakter_kontrolu($input_epostaadresi) == false)
			{      //karakter bakıyor


					// EMAİL tipi doğru ise buruaya giriyor ve kayıt alıyor.

					$sql="SELECT * FROM uyeler WHERE email='$email' OR tcno='$tcno'";
					$user_query = mysqli_query($conn, $sql);
					$numrows = mysqli_num_rows($user_query);

					if($numrows < 1){ //email yoksa dvam ediyor


						$query ="INSERT INTO uyeler(ad,soyad,tcno,email,tarih) VALUES (?,?,?,?,?)";
						$stmt = $conn -> prepare($query);

						$stmt -> bind_param("sssss",$val1, $val2, $val3, $val4,$val5);

							$val1 = $ad; //formlardki isiler
							$val2 = $soyad;
							$val3 = $tcno;
							$val4 = $email;
							$val5 = $tarih;	


						$stmt -> execute();
						$stmt -> close();

							
							//echo "<center><b>Kaydiniz Gerceklestirildi. Yonlendiriliyorsunuz.<br/>"."</b><br><br><a href=kayit_ol.php>Geri Git</a></center>";
							

							session_destroy();

						//echo "<script type='text/javascript'>alert('denedik görcez');</script>";

							header("Location: Login.php");
							//session_destroy();
							// kayıt yapınca index1 e gidiyr.
					

					}


					else {  // daha
							$_SESSION["kullaniciad"] = trim(addslashes($_POST["ad"]));
							$_SESSION["kullanicisoyad"] = $_POST["soyad"];
							$_SESSION["kullanicitcno"] = trim(addslashes($_POST["tcno"]));
							$_SESSION["kullaniciemail"] = trim(addslashes($_POST["email"]));
							$_SESSION["kullanicihatasistemde"] = 'E-Posta veya TC Adresiniz daha once sistemize girilmis'; //OK

								unset($_SESSION["kullanicihatatcno"]);
								unset($_SESSION["kullanicihataeposta"]);
							// EMAİL KONTROLÜ
						
					//echo "<center><b>E-Posta Adresiniz ve/veya TC Numaranizi daha once sistemize girilmis. Lutfen degistiriniz.<br/>"."</b><br><br><a href=kayit_ol.php>Geri Git</a></center>";
					header("Location: kayit_ol.php");
					
					}

		  				// echo "Girdiginiz E-posta Adresi Gecerlidir.";

			


		 	}

			else //e posta dogru değil
			{	$_SESSION["kullaniciad"] = trim(addslashes($_POST["ad"]));
				$_SESSION["kullanicisoyad"] = trim(addslashes($_POST["soyad"]));
				$_SESSION["kullanicitcno"] = trim(addslashes($_POST["tcno"]));
				$_SESSION["kullaniciemail"] = trim(addslashes($_POST["email"]));
				$_SESSION["kullanicihataeposta"] = 'Lütfen girmiş olduğunuz E-Posta Adresini kontrol ediniz.'; //OK
					
					unset($_SESSION["kullanicihatatcno"]);
					unset($_SESSION["kullanicihatasistemde"]);

							

				//echo "<center><b>Girdiginiz E-Posta adresi dogru degildir. Lutfen degistiriniz.<br/>"."</b><br><br><a href=kayit_ol.php>Geri Git</a></center>";
		   		header("Location: kayit_ol.php");
			}

} 

else {
//eposta yanlış ise bunu yapar
			$_SESSION["kullaniciad"] = trim(addslashes($_POST["ad"]));
			$_SESSION["kullanicisoyad"] = $_POST["soyad"];
			$_SESSION["kullanicitcno"] = trim(addslashes($_POST["tcno"]));
			$_SESSION["kullaniciemail"] = trim(addslashes($_POST["email"]));
			$_SESSION["kullanicihatatcno"] = 'Lütfen girmiş olduğunuz TC Kimlik değerleri kontrol ediniz.'; // ok


				unset($_SESSION["kullanicihataeposta"]);
				unset($_SESSION["kullanicihatasistemde"]);
 // echo "<center><b>TC Numaraniz yanlis. Lutfen degistiriniz ve devam ediniz..."."<br/>"."Yönlendiriliyorsunuz <br/>"."</b><br><br><a href=kayit_ol.php>Geri Git</a></center>";
 header("Location: kayit_ol.php");
}


		








/*
boyle kalacak

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




?>