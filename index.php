<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevClub</title>
    <link rel=stylesheet href=style.css type="text/css">
    <style type="text/css">
        #popr{
            color: #FFA000; 
        }
    </style>
    <!--
	<link rel="stylesheet" href="css/magnific-popup.css">

	 
	<script src="js/jquery.magnific-popup.js"></script>-->
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> 
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://use.fontawesome.com/c2ba6528e6.js"></script>
</head>
<body class=" b bg-dark text-white">
	<div class="popup">
		<div class="popup_login">
			<div class="in_popup bg-light" style="padding:10px; height:300px; margin-top:200px">
				<div style="text-align:right; cursor: pointer;"><i  onclick="closepopup();" class="fa fa-times" aria-hidden="true"></i>&nbsp &nbsp</div>
				<h3>Вход в личный кабинет</h3>
				<!--<form name=forma1 action="" method="POST">
					<div class="form-group">
						<label for="login1">Логин:</label>
						<input type=email id=login1 class="form-control" name=login>
					</div>
					<div class="form-group">
						<label for="password1">Пароль:</label>
						<input type=password id="password1" class="form-control" name=password>
						<a href=# style="text-decoration: none;">Забыли пароль?</a>
                        <div class=form-group style="text-align: right;"><button type=button class="btn btn-warning">Проверить</button></div>
						<div class=form-group style="text-align: right; display:none;" id="dalee"><button type="submit" class="btn btn-warning">Зарегестрироваться</button></div>
					</div>

				</form>-->
                <form name=form1 action="connindex.php" method="POST">

                    <div class="form-group">
                       <label class="user text-dark" for="login1" style="margin-top:-1px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                       </label>
                      
                      <input class="form-control" type="text" name="login" id="login1" placeholder="Введите ваш Email" /><div style="color:red;" id=ei>Email invalid</div>
                    </div> 
                    <div class="form-group">
                      <label class="lock text-dark" for="password1" style="margin-top:-1px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                      </label>
                      <input type="password" class="form-control" name="password" id="password1" placeholder="Придумайте пароль" /><div style="color:red" id=pi>Password Invalid</div>
                    </div> 
                   <div>
                    <a href=# style="text-decoration: none;" class="text-warning">Забыли пароль?</a>
                    <div class=form-group style="text-align: right;"><button type=submit class="btn btn-warning">Войти</button></div>
                    <div class=form-group style="text-align: right; display:none;" id="dalee"><button type="submit" class="btn btn-warning">Зарегестрироваться</button></div>
                  </div>
                </form> 
                <hr>
				  <div style="text-align: center; margin-top: 15px;">Нет аккаунта?<a href="/reg.php" style="text-decoration: none color: orange;"> Зарегестрироваться</a></div>
			</div>
		</div>
	</div>
<div class=body>
	
    <nav class="navbar navbar-dark justify-content-between">
        <a class="navbar-brand dev_c">DevClub</a>
        <form class="form-inline" style="margin: 10px 100px 0 0 ;">
          <button class="btn btn-warning my-2 my-sm-0 butopen" type="button" style="color:white;" onclick="openpopup();">Войти</button>
        </form>
      </nav>
    <div class=round></div>
    <div class="row" style="display:flex; margin-bottom: 300px; margin-top:20px;">
    <div class="col shag">
    
        <div class="shag">Сделайте шаг к новой профессии</div>
    </div>
        <div class="col promot r">
            Курсы, которые помогут освоить<br> востребованную профессию <br>с нуля и
            изучить новую специализацию<br><br><br>
            <div>
                Начать просто.<br><span id="popr">Попробуйте</span>
            </div>
            </div>

            <div class="discrnone">
                <div class="card text-white bg-transparent" style="font-size: 30px; border:0px">
                    <div class="card-body">
                      <p class="card-text">
                        Курсы, которые помогут освоить востребованную профессию с нуля и
                        изучить новую специализацию
                        Начать просто.<br><span id="popr">Попробуйте</span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="d">
        <div class=row >
            <div class="col-12">
            <div class="k justify-content-center" style="display:flex; text-align:center;">
                <h1>После прохождения курсов вы изучите все необходимые инструменты для создания сайта</h1></div>
        </div>
        </div>
    <div class="card-group ca">
        <div class="card text-white bg-dark border-dark ">
            <div class="text-center">
            <img class="card-img-top img-fluid" src="img/html.png">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">HTML</h5>
              <p class="card-text">HTML (HyperText Markup Language) — это язык гипертекстовой разметки страницы. Он используется для того, чтобы дать браузеру понять, как нужно отображать загруженный сайт.
            </div>
          </div>
          <div class="card text-white bg-dark border-dark">
            <div class="text-center">
            <img class="card-img-top" src="img/css.png">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">CSS</h5>
              <p class="card-text">CSS (Cascading Style Sheets, каскадные таблицы стилей) — язык описания внешнего вида HTML-документа. Практически ни один сайт не обходится без CSS, поэтому HTML и CSS действуют в единой связке.
            </div>
          </div>
          <div class="card text-white bg-dark border-dark ">
            <div class="text-center">
            <img class="card-img-top" src="img/js.png">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">JS</h5>
              <p class="card-text">JavaScript — язык программирования, который позволяет вам создать динамически обновляемый контент, управляет мультимедиа, анимирует изображения.
            </div>
          </div>
      </div>

    </div>

        </div>
        </div>
        <div>
        <div class="r" style="margin-top:20px">
            <div class="re">
            <div class="row">
                <div class="col-6 promo text-right">
                    <strong>1Решитесь на большее</strong><br>
                    Вам есть что показать этому миру.
                    Позвольте себе ставить большие
                    цели, а навыки и знания дадим мы.
                    Для этого у нас есть все инструменты.
                </div><br>
                <div class="col-6">
                    <img src="img/1.png" width=600 class="rounded img-fluid float-left" >
                </div>
            </div>
            </div>
            <br>
            <div class="resh">
                <div class="row">
                    <div class="col-6">
                        <img src="img/1.png" width=600 class="rounded img-fluid float-left" id="im">
                    </div>
                    <div class="col-6 promo text-right">
                        <strong>Решитесь на большее</strong><br>
                        Вам есть что показать этому миру.
                        Позвольте себе ставить большие
                        цели, а навыки и знания дадим мы.
                        Для этого у нас есть все инструменты.
                    </div>
                </div>
            </div>
            <br>
            <div class="de">
            <div class="row">
                <div class="col-6">
                    <img src="img/2.png" width=600 class="rounded img-fluid float-left" id="im">
                </div>
                <div class="col-6 promo text-right">
                    <strong> Действуйте</strong><br>
                    Мы создали комфортную среду обучения, чтобы у вас всегда была мотивация двигаться вперёд.
                    Учитесь, практикуйтесь и применяйте знания сразу в работе.
                </div>
            </div>
                </div>
               </div>
               <div class="discrnone">
                      <div class="card text-white bg-dark border-dark">
                        <div class="text-center">
                        <img class="card-img-top" src="img/1.png">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-left" style="font-size: 40px;">Решитесь на большее</h5>
                          <p class="card-text" style="font-size: 30px;">
                            Вам есть что показать этому миру.
                            Позвольте себе ставить большие
                            цели, а навыки и знания дадим мы.
                            Для этого у нас есть все инструменты.
                          </div>
                      </div>
                      <div class="card text-white bg-dark border-dark ">
                        <div class="text-center">
                        <img class="card-img-top" src="img/2.png">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title text-left" style="font-size: 40px;">Действуйте</h5>
                          <p class="card-text" style="font-size: 30px;">
                            Мы создали комфортную среду обучения, чтобы у вас всегда была мотивация двигаться вперёд.
                            Учитесь, практикуйтесь и применяйте знания сразу в работе.
                          </div>
                      </div>
                  </div>
               </div>
<br>
<div class="oh">
               <div class=row>
                <div class="justify-content-center" style="display:flex; margin-bottom:200px">
                    <div class="shag" style="margin-left: 50px;">Мы будем рядом и не
                        дадим остановиться
                        на полпути</div>
                    </div>
                </div>
            <div class="row justify-content-center">
            <div class="col-8 promo2 pr">
                <div class="i">
                <p class="h1 text-xl-left">Начните учится бесплатно</p>
                <p>Зарегистрируйтесь в DevClub и получите доступ
                к бесплатным курсам.</p><br>
                <form action="index.php" method="GET">
                	<div class="form-inline">
                    <input type=text name=text2 placeholder="E-Mail" id=text2 class="bg-dark form-control"><br>
                    <input type=submit name=but2 value="Начать" id=but2 ></div>
                </form>
                </div>
                </div>
            </div>
</div>
            <div class="discrnone">
                <div class="card text-white bg-dark border-dark">
                  <div class="card-body">
                    <h1 class="card-title text-xl-left" style="font-size: 50px;">Мы будем рядом и не
                        дадим остановиться
                        на полпути</h1>
                    <p class="card-text">
                    </div>
                </div>
                <div class="card text-white bg-dark border-dark">
                  <div class="card-body">
                    <h5 class="card-title text-left" style="font-size: 75px;">Начните учится бесплатно</h5>
                    <p class="card-text">
                        <p style="font-size: 30px;">Зарегистрируйтесь в DevClub и получите доступ
                            к бесплатным курсам.</p><br>
                            <form action="index.php" method="GET">
                                <div class="form-inline">
                                <input type=text name=text2 placeholder="E-Mail" id=text2 class="bg-dark form-control"><br>
                                <input type=submit name=but2 value="Начать" id=but2 ></div>
                            </form>
                    </div>
                </div>
            </div>
            <br>
            </div>
        </div>
        <?php require 'document_php/footer.php'?>
</body>
</html>