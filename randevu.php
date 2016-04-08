<?php

require_once('config.php');


      if (!isset($_SESSION["tcno"])) {
        header("Location: index1.php");
          }
?>




<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/U-Bahn_Wien.svg/35px-U-Bahn_Wien.svg.png">

    <title>Ugur Hastanesi</title>

    <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
    <script src="js/modes-warning.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">


  $(document).ready(function(){
      
      var id = null;

      /*$(".optionArea").click(){
        id = $(this).attr("val");
        alert(id);
      }*/

      $("#alanId").change(function(){
        $("#doctor option").remove();
        id = $(this).val();
        $.ajax({
          type: 'POST',
          cache: 'false',
          data: {ad : id},
          url: "ajax.php",
          success: function(dataJson){


          var option = $();
          for (var i = 0; i < dataJson.length ; i++) {
            option = option.add('<option value="'+dataJson[i].id+'">' + dataJson[i].doktor_ad + '</option>');
            //$("#doctor").append(new Option(arr[i],arr[i],true,true));
          }
          $("#doctor").append(option);
          }
        });
    });



  });
</script>

<link rel="stylesheet" href="css/datepicker.css">

  </head>




  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index1.php">Ana Sayfa</a></li>
            <li role="presentation"><a href="kayit_ol.php">Kayıt Ol</a></li>
            <li role="presentation"  class="active"><a href="#">Randevu</a></li>
            <li role="presentation"><a href="iletisim.php">İletişim</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Uğur Diş ve Diş Hastalıkları</h3>
      </div>
<div align="right">
<h4>Merhaba TC: "<?php echo $_SESSION["tcno"]  ?>" ve ID: <?php echo $_SESSION["id"]  ?> <h4>


  <a  href="logout.php">Çıkış Yap</a></div>

      <div class="jumbotron">
        <h3>Randevu Al</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
       


                       <form name="giris_form" method="post" action="randevu_gor.php">
                          <button type="submit" class="btn btn-primary" >Randevularını Gör</button>  
                      </form>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#buttonForm2").click(function(){
            var id = $("#userText").attr("userid");
            $("#userText").val(id);
            $("#buttonSubmit2").click();
          });
       });
      </script>


       <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {

              var date = new Date();
                date.setDate(date.getDate());
                
                $('#example1').datepicker({   
                        format: "dd/mm/yyyy",
                       daysOfWeekDisabled: "0",  //pazarı da kapatmak ıstersek "0,6"
                       todayHighlight: true,
                       minDate: 0,
                       startDate:date


                       
                });  
            
            });
        </script>



      <form action="database_randevu_al.php" method="post">



      </form>
      <div class="row marketing">

          
          <form class="form-horizontal" method="POST" action="database_randevu_al.php">
            <div class="col-lg-12">
             <h2>Kayıt Olma</h4>
               <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
                   <div class ="form-group">
                    <label>Kullanıcı ID : </label>
                    <input name="uye_id"  class="form-control" type="text" placeholder="Randevu konusu" id="userText" userid="<?php echo $_SESSION["id"];?>" value="<?php echo $_SESSION["ad"];?>" />
                 
                   </div>

                  <div class="well" align="center" >        
                    <h3>Lütfen tarih seçiniz</h3>
                      <table>
                        <tr>
                          <td><input class= "form-control" name="tarih" type="text" placeholder="Tarih Seç"  id="example1"></td>
                          <td><img class="image" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQju5IQQkZvZ0sDDAR_5vk5ndNJvYWGAW5WJ9NvBZS1o_Zd7VQGoA" alt="Smiley face" width="35" height="35"></td>
                        </tr>
                     </table>
                 </div>

            </div>
<br />

<?php /*

$sql = "SELECT * FROM doktorlar";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["doktor_ad"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
?>

<!-- Alan Seçim Alanı-->



              <div class="col-md-5 form-group" name="doktor" align="left">
                <h4> Lütfen Alan Seçiniz</h4>

                  <?php

                      $sql = "SELECT * FROM kategori";
                      $result = $conn->query($sql);?>

                      <select name="kategori_input" class="form-control  option" id="alanId">
                         <option selected>Lütfen seçiniz...</option>

                          <?php while ($row = $result->fetch_assoc()) {
                          ?>
                       <option value=" <?php echo $row['id']; ?> " class="optionArea">
                          <?php echo $row['katAdi']; ?>
                       </option>
                          <?php
                          }
                          ?>        
                     </select>
              </div>



              <div class="col-md-2">
                <!-- Boşluk bıraklamsı için burası mevcut-->
              </div>



          
<!-- Doktor Seçim Alanı-->
              <div class="col-md-5 form-group" name="doktor">
                 <h4> Lütfen Doktor Seçiniz</h4>
                  <?php
                  $sql = "SELECT * FROM doktorlar";
                  $result = $conn->query($sql);?>

                <div id="doctorArr"></div>
                 <select id="doctor" name="doktor" class="form-control  option" >
                     <option selected>Lütfen seçiniz...</option>
                    <option value=""></option>
                </select>
                </div>
              </div>

              <div name="saat">
               <style type="text/css">.option{text-align: center;}</style>
                 <label>Saat seçiniz: </label>
                    <select name="time" class="form-control option">
                      <option>10:00</option>
                      <option>11:00</option>
                      <option>13:00</option>
                      <option>15:00</option>
                      <option>16:00</option>
                   </select>
              </div>

            <div class ="form-group" align="left">
                <label>Konu: </label>
                <input name="konu"  class="form-control" type="konu" placeholder="Randevu konusu" required />
           </div>


            <div class="checkbox" align="left">
                  <p><input id="onay" type="checkbox" name="onay" required/> Sartlari okudum ve kabul ediyorum (**Zorunlu)</p>
            </div>

               
        <input type="submit" value="submit" id="buttonSubmit2" style="display:none;" />
        <input type="button" class="btn btn-danger" value="Randevuyu Oluştur" id="buttonForm2" /></td>
            </div>
        </form>
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