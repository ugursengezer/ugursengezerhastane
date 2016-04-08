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

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="css/modes-warning.js" rel="stylesheet"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>



     <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"><a href="randevu.php">Randevu</a></li>
            <li role="presentation"  class="active"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>

      <div class="jumbotron">
        <h2>İletişim Paneli</h2>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
       
      </div>





 <div id="body" class="container">

  <h2>Adresimiz ve Telefon Numaralarımız</h2>

<p><b>Telefon:</b> +90 216 747 88 90 || +90 216 747 88 92</p>
<p><b>Fax:</b> +90 216 747 88 97</p>

  <p><b>Adresimiz: </b>27 Ağustos Mevkii. KAyışdağı Cad. Bilgin Sokak. Barış Apart. No:43</p>

<p>Ataşehir - İstanbul</p>
________________ 
           <h1 style="color:rgb(147, 27, 17)">İletişim Formu</h1>


            <p>Bu "İletişim Formu" sizlere daha iyi hizmet vermek amacıyla kurulmuştur. En yakın sürede sizlere geri dönülecektir.:)</p>
           
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class ="form-group">
                <label for="isim">Ad - Soyad</label>
                <input name="ad" type="text" class="form-control" placeholder="Ad - Soyad"/>
            </div>


            <div class ="form-group">
                <label>Email</label>
                <input name="email"  class="form-control" type="email" placeholder="örnek@örnek.com" />
            </div>

            <div class ="form-group">
                <label for="isim">Konu</label>
                <input name="subject" type="text" class="form-control" placeholder="Konu"/>
            </div>

            <div class ="form-group">
               
                <label>Mesaj</label>
                <textarea cols="40" rows="6" name="message" class="form-control" placeholder="Mesajınızı giriniz"></textarea>
                  </div>


                <input type="submit" class="btn btn-danger"   value="Gönder" />
          
       </form>
       
  <br /><br />





 
  <footer class="footer">
        <p>&copy; Company 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/viewport-bug.js" rel="stylesheet"></script>
  </body>
</html>
