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
    <title>Достижения</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body onload="geturl();" style=" height: 100vh;">
    <style>
        .c{
            display: flex;
        }
        @media screen and (max-width: 1100px) {
            .c{
                display: block;
                width: 400px;
            }
        }
    </style>
    <div style="background-color: black;">
        <div class="body_pa flex-row justify-content-center bg-dark text-white">
        <div class="row">
        <?php require 'document_php/nav1.php'?>
          <div class="col-8">
            <p class="promo-courses">Достижения</p>
            <div class="row">
            <div class="col">

                <div class="row c">
                    <div class="col">
                  <div class="card text-white bg-warning border-dark" style="border-radius:30px;">
                      <a class="card-body" href="achievements/achhtml.html" style="text-decoration: none;">
                        <h5 class="card-title text-center">    
                            <p class="h-courses text-white" style="text-decoration: none;">HTML</p>           
                        </h5>
                        <div class="text-center">
                          <p class="card-text">
                            <div class="trophy">
                                <p class="trophy-text fa fa-trophy fa-2x trophy-text text-white" aria-hidden="true"><span style="font-family:Ubuntu; font-size:24px">: 3 из 10</span></p>
                              </div>
                          <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                              <div class="progress-bar trophy-progress" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              </div>
                          </div>
                          </p>
                          </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                  <div class="card text-white bg-warning border-dark" style="border-radius:30px;">
                      <a class="card-body" href="achievements/achcss.html" style="text-decoration: none;">
                        <h5 class="card-title text-center">    
                            <p class="h-courses text-white" style="text-decoration: none;">CSS</p>           
                        </h5>
                        <div class="text-center">
                          <p class="card-text">
                            <div class="trophy">
                                <p class="trophy-text fa fa-trophy fa-2x trophy-text text-white" aria-hidden="true"><span style="font-family:Ubuntu; font-size:24px">: 3 из 10</span></p>
                              </div>
                          <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                              <div class="progress-bar trophy-progress" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              </div>
                          </div>
                          </p>
                          </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                  <div class="card text-white bg-warning border-dark" style="border-radius:30px;">
                      <a class="card-body" href="achievements/achjs.html" style="text-decoration: none;">
                        <h5 class="card-title text-center">    
                            <p class="h-courses text-white" style="text-decoration: none;">JS</p>           
                        </h5>
                        <div class="text-center">
                          <p class="card-text">
                            <div class="trophy">
                                <p class="trophy-text fa fa-trophy fa-2x trophy-text text-white" aria-hidden="true"><span style="font-family:Ubuntu; font-size:24px">: 3 из 10</span></p>
                              </div>
                          <div class="progress" style="border-radius:15px; background:white; margin-top: 30px;">
                              <div class="progress-bar trophy-progress" id="progress-bar1" role="progressbar"  style="background-color:#41A73F; width:16%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              </div>
                          </div>
                          </p>
                          </div>
                        </a>
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