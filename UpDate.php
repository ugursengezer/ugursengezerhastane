<?php

require_once('config.php');

if (isset($_SESSION["tcno"])) 
  {    } else {

  header("Location:index1.php");
}
?>

<?php






 $User = $_SESSION["tcno"];

 $result = $conn->query("SELECT * FROM uyeler WHERE tcno='$User'");

 $row = $result->fetch_array(MYSQLI_BOTH);


 $_SESSION["tcno"] = $row['tcno'];   //2. kısım db namelerdeki
 $_SESSION["email"] = $row['email'];
 $_SESSION["ad"] = $row['ad'];
 $_SESSION["soyad"] = $row['soyad'];


?>


<?php 

if (isset($_POST["Update"])) {

  $UpdateAd = $_POST['ad'];
  $UpdateSoyad = $_POST['soyad'];
  $UpdateTcno = $_POST['tcno'];
  $UpdateEmail = $_POST['email'];


$sql = $conn->query("UPDATE uyeler SET ad = '{$UpdateAd}', soyad = '{$UpdateSoyad}', tcno = '{$UpdateTcno}', email = '{$UpdateEmail}' where tcno=$User");

header("Location: Account.php");

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


    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <script src="js/modes-warning.js"></script>


<!-- Açılır kucuk ekran -->
<script src="js/kucuk-jquery.min.js"></script>
<script src="js/kucuk-jquery2-min.js"></script>




  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"><a href="kayit.php">Kayıt Ol</a></li>
            <li role="presentation"><a href="randevu.php">Randevu Al</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>

      <div class="jumbotron">
        <h1>Up Date Sistemi</h1>
       <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
             <footer>Randevu almak için <cite title="Source Title">giriş yapınız.</cite></footer>
       </blockquote>
                  <!--  <p><a class="btn btn-lg btn-success" href="..." role="button">Üye OL</a>-->
    
         
<div>

  <h3>345678ınkmlş</h3>

<form name="form1" method="post" action="">
  <div>

 <p>Lütfen Update.</p>

                     <div class="form-group"> 
                        <label for="exampleInputName2">Ad: </label><br/>
                        <input name="ad" type="text" class="form-control" id="ad" placeholder="............." value="<?php echo  $_SESSION["ad"]; ?>">
                      </div>

                       <div class="form-group"> 
                        <label for="exampleInputName2">Soyad: </label><br/>
                        <input name="soyad" type="text" class="form-control" id="soyad" placeholder="............." value="<?php echo  $_SESSION["soyad"]; ?>">
                      </div>

                      <div class="form-group"> 
                        <label for="exampleInputName2">TC Kimlik No: </label><br/>
                        <input name="tcno" type="text" class="form-control" id="tcno" placeholder="............." value="<?php echo  $_SESSION["tcno"]; ?>">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputEmail2">E-Email Adresiniz:    </label><br/>
                        <input name="email" type="email" class="form-control" id="email" placeholder="örnek@örnek.com" value="<?php echo  $_SESSION["email"]; ?>">
                      </div> <br/>

                 

                        <input id="update" type="submit" class="button" name="Update" value="Update Yap" ></input>  







  </div>
</form>

</div>



  <!-- Button HTML (to Trigger Modal) -->
   
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
            <h4 class="modal-title">Üye Giriş Paneli</h4>
          </div>





              

     <div class="row marketing">
      <div class="col-lg-12">
          <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
</div>



</form> 




      </div>





      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/viewport-bug.js"></script>
  </body>
</html>
