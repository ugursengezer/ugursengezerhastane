<?php

session_start();


if (isset($_SESSION["tcno"])) {
} else {

  header("Location:index1.php");
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
            <li role="presentation"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"><a href="randevu.php">Randevu</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>

      <div class="jumbotron">
         <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="update.php"><b>Üyelik Gücelle</b></a></li>
            <li role="presentation"><a href="logout.php"><b>Çıkış Yap</b></a></li>          
          </ul>

         </nav>
            <br/>

        <h2>Üyelik Sistemi</h2>

       <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
             <footer>Randevu almak için <cite title="Source Title">giriş yapınız.</cite></footer>
       </blockquote>
                  <!--  <p><a class="btn btn-lg btn-success" href="..." role="button">Üye OL</a>-->
    
      


              <div>
                
                     <b>
                <h2>
                  <br><?php echo "TC: ".$_SESSION["tcno"];?>
                    </B>
                </h2>
              </div>



  <!-- Button HTML (to Trigger Modal) -->
   
    
    <!-- Modal HTML -->
   
            
            <h4 class="modal-title">Üye Giriş Paneli</h4>
          </div>

            <div class="row marketing">
              <div class="col-lg-12">
               <h4><center>Kullanıcı Paneli</center></h4>
                 <div align="center" class="renkDiv">
                   <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='randevu.php'">Randevu Al</button>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='randevu_gor.php'"> Randevularım</button>
                    <button type="button" class="btn btn-danger btn-lg" onclick="window.location.href='logout.php'"> Çıkış</button>




                  <!--  <p><a class="btn btn-lg btn-success" href="..." role="button">Üye OL</a>-->
    
     </div>   
              </div>
            </div>
        </div>
      </div>
    </div>
  

</div>
      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>




    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/viewport-bug.js"></script>
  </body>
</html>
