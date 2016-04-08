<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ugur Sengezer Hastanesi</title>



    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/U-Bahn_Wien.svg/35px-U-Bahn_Wien.svg.png"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <script src="js/modes-warning.js"></script>
    <script src="js/kucuk-jquery.min.js"></script>
    <script src="js/kucuk-jquery2-min.js"></script>

    <script type="text/javascript">
            $(document).ready(function(){
              $('.toggle-modal').click(function(){
                $('#myModal').modal('toggle');
              }); 
            });
        </script>
        <style type="text/css">
            .bs-example{
              margin: 20px;
            }
            .toggle-modal {
              width: 200px;

              margin: 0 auto;
              z-index: 9999;
              right: 0;
              left: 0;
            }
        </style>



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
              <h1>Diş Randevu Sistemi</h1>
             <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                   <footer>Randevu almak için <cite title="Source Title">giriş yapınız.</cite></footer>
             </blockquote>
                        <!--  <p><a class="btn btn-lg btn-success" href="..." role="button">Üye OL</a>-->
          
               <input type="button"  class="btn btn-lg btn-primary toggle-modal" value="Giriş Yap"></a></p>
            </div>

    <div id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
            <h4 class="modal-title">Üye Giriş Paneli</h4>
          </div>


          <form name="giris_form" method="post" action="uye_giris.php">
              <div class="modal-body">
                  <p>Lütfen 11 haneli TC Kimlik numaranızı ve E-Posta adresini giriniz.</p>



<script type="text/javascript">
    $(document).ready(function () {
      $("#tcno").keypress(function (e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
     $("#errmsg").html("Sadece Rakam Giriniz").show().fadeOut("slow");
                 return false;
        }
       });
    });

</script>

                      <div class="form-group"> 
                        <label for="exampleInputName2">TC Kimlik No: </label><br/>
                        <input pattern=".{11,11}" maxlength="11"minlength="11" name="tcno" type="text" class="form-control" id="tcno" placeholder=".............">
                        <span id="errmsg"></span>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputEmail2">E-Email Adresiniz:    </label><br/>
                        <input name="email" type="email" class="form-control emailyazdirma" id="exampleInputEmail2" placeholder="örnek@örnek.com">
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



                   <form action="veri_al.php" method="post">
                    <input type="submit" value="Ekrana DB'leri Getir">
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
