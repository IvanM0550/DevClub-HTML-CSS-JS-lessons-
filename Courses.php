<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=style.css type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://use.fontawesome.com/c2ba6528e6.js"></script>
    <title>Курсы обучения</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body onload="geturl();">
    <div style="background-color: black;">
        <div class="body_pa flex-row justify-content-center bg-dark text-white">
        <div class="row">
        <?php require 'document_php/nav.php'?>
          <div class="col-8">
            <p class="promo-courses">Список доступных курсов</p>
            <div class="row">
            <div class="col">
            <div class="lesname-courses text-center" role="alert" >
                <p class="h-courses" id="hcou_1" onclick="openthedoor1();">HTML. Курс для начинающих.</p>
                <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                    <div class="progress-bar" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="ur1 text-white">
              Урок 1.<br>
              Урок 2.<br>
              Урок 3.<br>
              Урок 4.<br>
              Урок 5.<br>
              Урок 6.
            </div>
            </div>
                
            <div class="col">
            <div class="lesname-courses text-center" role="alert">
                <p class="h-courses">CSS. Курс для начинающих.</p>
                <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                    <div class="progress-bar" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="ur2 text-white">
              Урок 1.<br>
              Урок 2.<br>
              Урок 3.<br>
              Урок 4.<br>
              Урок 5.<br>
              Урок 6.
            </div>
            </div>

                            
            <div class="col">
                <div class="lesname-courses text-center" role="alert">
                    <p class="h-courses"> JS. Курс для начинающих.</p>
                    <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                        <div class="progress-bar" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="ur3 text-white">
                  Урок 1.<br>
                  Урок 2.<br>
                  Урок 3.<br>
                  Урок 4.<br>
                  Урок 5.<br>
                  Урок 6.
                </div>
                </div>
            </div>
        </div>
        
        </div>
        
        </div>
        
        </div><br>
        

        
</body>
</html>