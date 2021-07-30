<?php
    session_start();
    $cookie=$_COOKIE['user'];
    $dbh = new MySQLi('localhost', 'root', '', 'devclub');
    $do1=$dbh->query("SELECT `html_prog` FROM `users` WHERE `name`='$cookie'");
    $do2=$dbh->query("SELECT `css_prog` FROM `users` WHERE `name`='$cookie'");
    $do3=$dbh->query("SELECT `js_prog` FROM `users` WHERE `name`='$cookie'");
    $res_do1=$do1->fetch_assoc();
    $res_do2=$do2->fetch_assoc();
    $res_do3=$do3->fetch_assoc();
    $dbh->close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=style.css type="text/css">
    <style type="text/css">
    </style>
    <!--
	<link rel="stylesheet" href="css/magnific-popup.css">

	 
	<script src="js/jquery.magnific-popup.js"></script>-->
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://use.fontawesome.com/c2ba6528e6.js"></script>
    <title>Личный кабинет</title>
</head>
<body onload="geturl();">
  <style>
    .d{
      display: flex;
    }
    @media screen and (max-width: 1000px) {
      .d{
      display: block;
margin-right: -200px;
      padding: 0;
      }
    .body_pa{
      width: 100%;
    }
}
@media screen and (max-width: 500px) {
  .body_pa{
    }
}
  </style>
<div style="background-color: black;">
<div class="body_pa flex-row justify-content-center bg-dark text-white">
<div class="row">
  <?php require 'document_php/nav.php'?>

        <div class="col-8">
          <div class="row d">
            <div class="col-6">
            <p class="promo" style="font-size:30px">Привет, <?=$_COOKIE['user']?>,</p> 
            <p class="promo" style="font-size:30px">Что ты будешь учить сегодня?<?echo $res_do1[0];?></p>
<br><br> 
<div class="card text-white bg-warning border-dark text-center" style="border-radius:30px; height: 190px;">

  <div class="card-body">
    <h5 class="card-title">HTML для начинающих</h5>
    <p class="card-text">Урок 1. Введение в HTML</p>
    <button type="button" class="btn btn-dark" style="border-radius: 20px; padding: 10px 20px;">Начать</button>

  </div>
</div> 

</div>
            <div class="col-6" style="padding-top: 100px;">
                <p style="font-size:30px">Активные курсы</p>
                <div class="progress" style="height:50px; border-radius:15px; background:black;">
                    <span style="text-align:left; padding-left:10px; font-size:20px; z-index:2; margin-top:0.7%; position: absolute;">HTML</span>
                    <div class="progress-bar bg-warning" id="progress-bar1" role="progressbar"  style="width: <?=$res_do1['html_prog']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        
                    </div>
                  </div><br>
                  <div class="progress" style="height:50px; border-radius:15px; background:black;">
                    <span style="text-align:left; padding-left:10px; font-size:20px; z-index: 2; margin-top:0.7%; position: absolute;">CSS</span>
                    <div class="progress-bar bg-warning" id="progress-bar1" role="progressbar"  style="width: <?=$res_do2['css_prog']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        
                    </div>
                  </div>
                  <br>
                  <div class="progress" style="height:50px; border-radius:15px; background:black;">
                    <span style="text-align:left; padding-left:10px; font-size:20px; z-index: 2; margin-top: 0.7%; position: absolute;">JS</span>
                    <div class="progress-bar bg-warning" id="progress-bar1" role="progressbar"  style="width: <?=$res_do3['js_prog']?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        
                    </div>
                  </div>
            </div>
                  
</div>
</div>
</div>

</div>
</div>
</div>
</body>
</html>