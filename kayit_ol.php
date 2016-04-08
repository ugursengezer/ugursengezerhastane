

<?php
session_start();

if (!isset($_SESSION["kullaniciad"]) || (!isset($_SESSION["kullanicisoyad"]) || (!isset($_SESSION["kullanicitcno"]) || (!isset($_SESSION["kullaniciemail"]) || (!isset($_SESSION["kullanicihatatcno"]) || (!isset($_SESSION["kullanicihataeposta"]) || (!isset($_SESSION["kullanicihatasistemde"]))))))))
{
 
error_reporting(0);
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

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"  class="active"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"><a href="randevu.php">Randevu</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>

        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>




      <div class="jumbotron">

        <h1>Kayıt Sayfası</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">


          <h2>Kayıt Olma</h2>

            <h3 style="background-color:#D35172" align="center" ><u><?php echo $_SESSION["kullanicihatatcno"];?></u></h3>
            <h3 style="background-color:#D35172" align="center" ><u><?php echo $_SESSION["kullanicihataeposta"];?></u></h3>
           <h3 style="background-color:#D35172" align="center" ><u><?php echo $_SESSION["kullanicihatasistemde"];?></u></h3>
           
<br/>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>



              <form class="form-horizontal" method="POST" action="database_kayit_al.php">




                <div class="form-group">
                  <label class="col-sm-2 control-label">Ad: </label>
                    <div class="col-sm-10">
                      <input name="ad" type="text" class="form-control"  placeholder="Adınız" value="<?php echo stripslashes($_SESSION["kullaniciad"]);?>"/>




                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Soyad: </label>
                     <div class="col-sm-10">
                     <input name="soyad" type="text" class="form-control" placeholder="Soyadınız" value="<?php echo stripslashes($_SESSION["kullanicisoyad"]);?>"/>
                  </div>
               </div>


              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">TC Kimlik No:</label>
                  <div class="col-sm-10">
                    <input name="tcno" type="text" class="form-control" id="inputPassword3" data-fv-integer="true" data-fv-integer-message="The value is not an integer" placeholder="TC Kimlik Numarası" value="<?php echo stripslashes($_SESSION["kullanicitcno"]);?>" >
                  </div>
              </div>

              <div class="form-group">
                  <label  class="col-sm-2 control-label">E-Posta:</label>
                  <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" placeholder="E-Posta Adresiniz" value="<?php echo stripslashes($_SESSION["kullaniciemail"]);?>">
                  </div>
              </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" value="GONDER" class="btn btn-primary">Kayıt Yap</button>
                  </div>
                </div>





</form>







         
        </div>
      </div>

      <footer class="footer">
        <p>&copy; Company 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>