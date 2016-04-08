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
<script type="text/javascript">
$(document).ready(function(){
  $('.toggle-modal').click(function(){
    $('#myModal').modal('toggle');
  }); 
});
</script>




  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"><a href="randevu.php">Randevu Al</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>

      <div class="jumbotron">
        <h2>Hatalı Giriş</h2>
       <blockquote>
          <p>TC Kimlik Numarası veya E-Posta adresiniz yanlış.</p>
             <footer>Lütfen tekrardan<cite title="Source Title">giriş yapınız.</cite></footer>
       </blockquote>
                  <!--  <p><a class="btn btn-lg btn-success" href="..." role="button">Üye OL</a>-->
    
         <input type="button"  class="btn btn-lg btn-primary toggle-modal" value="Yeniden Giriş Yap"></a></p>
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


          <form name="giris_form" method="post" action="uye_giris.php">
              <div class="modal-body">
                  <p>Lütfen TC Kimlik numaranızı ve E-Posta adresini giriniz.</p>

                      <div class="form-group"> 
                        <label for="exampleInputName2">TC Kimlik No: </label><br/>
                        <input name="tcno" type="text" class="form-control" id="exampleInputName2" placeholder=".............">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputEmail2">E-Email Adresiniz:    </label><br/>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="örnek@örnek.com">
                      </div> <br/>

                      <div align="right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Kapat </button>
                        <button type="submit" class="btn btn-primary" name="gonder" >Giriş Yap</button>  

                      </div>
            </form>


<br/><br/>
          
     <p class="text-warning"><small> <a href="http://www.google.com"><u>Şifremi Unuttum.</u></a></small></p>
     <p class="text-warning"><small> <a href="http://www.google.com"><u>Yeni Kayıt Ol.</u></a></small></p>
                </div>
         </div>
       </div>
      </div>
              

     <div class="row marketing">
      <div class="col-lg-12">
          <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
</div>
<div class="col-lg-5">
          <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
</div>
<div class="col-lg-5">
          <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
     </div>





      </div>





      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/viewport-bug.js"></script>
  </body>
</html>
