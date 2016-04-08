

<?php
require_once('config.php');

if (!isset($_SESSION["tcno"])) {
  header("Location: index1.php");
}

?>

                  



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/U-Bahn_Wien.svg/35px-U-Bahn_Wien.svg.png">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <script src="js/modes-warning.js"></script>



<link rel="stylesheet" href="css/datepicker.css">
 
  </head>




  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"  class="active"><a href="randevu.php">Randevu</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>
<div align="right">
<h4>Merhaba TC: "<?php echo $_SESSION["tcno"]  ?>" ve ID: <?php echo $_SESSION["id"]  ?> <h4>


  <a  href="logout.php">Çıkış Yap</a></div>

      <div class="jumbotron" align="center" style="padding:0px !important;">
        <br/>
        <h3>Randevularınız</h1><br/>
        


 
<?php

//
$deneme = $_SESSION["id"];


$sql = "SELECT  uyeler.id, 
        uyeler.ad, 
        uyeler.soyad, 
        uyeler.tcno, 
        randevu.id, 
        randevu.konu, 
        randevu.tarih, 
        randevu.time, 
        randevu.doktor,
        doktorlar.doktor_ad,
        randevu.kategori_id,
        kategori.katAdi
  FROM uyeler 
  
  INNER JOIN randevu
    ON uyeler.id = randevu.uyeler_id 
   
  INNER JOIN doktorlar
    ON randevu.doktor = doktorlar.id

  INNER JOIN kategori
    ON randevu.kategori_id = kategori.id  WHERE uyeler.id = $deneme";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 ?>
<style type="text/css">
  .jumbotron table{ font-size:12px; margin: auto; }
  table tbody tr td,table thead th{ padding: 5px; text-align: center; }
</style>
<table border="1" class="table table-hover" >
  <thead >
    <th  class="info">Randv. ID:</th>
    <th  class="info">Ad:</th>
    <th  class="info">Soyad:</th>
    <th  class="info">TC Kimlik No:</th>

    <th  class="info">Rand. Konusu:</th>
    <th  class="info">Tarih:</th>
    <th  class="info">Saat:</th>
    <th  class="info">Kat. Adı:</th>
    <th  class="info">Doktor Ad-Soyad:</th>
  </thead>
<tbody>

 <?php 
    while($row = $result->fetch_assoc()) {
      echo '<tr class="active">';
        echo "<td>{$row["id"]}</td>
              <td>{$row["ad"]}</td>
              <td>{$row["soyad"]}</td>
              <td>{$row["tcno"]}</td>

              <td>{$row["konu"]}</td>
              <td>{$row["tarih"]}</td>
              <td>{$row["time"]}</td>
              <td>{$row["katAdi"]}</td>
              <td>{$row["doktor_ad"]}</td>";
      echo '</tr>';
    }

?>




</tbody>
</table>
                      

                  
<?php    
} else {
    echo "0 results";
}




$conn->close();
?> 




      </div>


<div align="center">
      <button type="button" class="btn btn-success btn-lg" align="left"onclick="window.location.href='randevu.php'">Geri Gel</button>
 
</div>




</div>
  


         <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
       


<?php

/*

<select class="form-control">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>



<select class="form-control input-lg">...</select>
<select class="form-control">...</select>
<select class="form-control input-sm">...</select>

*/
?>
</html>