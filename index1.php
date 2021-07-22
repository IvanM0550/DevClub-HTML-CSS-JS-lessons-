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
<body class="bg-dark text-white">
	<div class="popup">
		<div class="popup_login">
			<div class="in_popup">
				<div style="text-align:right; cursor: pointer;"><i  onclick="closepopup();" class="fa fa-times" aria-hidden="true"></i>&nbsp &nbsp</div>
				<h3>Вход в личный кабинет</h3>
				<form name=forma1 action="connindex.php" method="POST">
					<div class="form-group">
						<label for="login1">Логин:</label>
						<input type=email id=email1 name=email1 class="form-control" name=login>
					</div>
					<div class="form-group">
						<label for="password1">Пароль:</label>
						<input type=password id="pass1" name=pass1 class="form-control" name=password>
						<a href=# style="text-decoration: none;">Забыли пароль?</a>
						<div class=form-group style="text-align: right;" id="dalee"><button type="submit" class="btn btn-warning">Зарегестрироваться</button></div>
					</div>

				</form>
				<div class=container>
					<hr>
					<div class="text-center">Нет аккаунта? <a href="reg.php">Зарегистрируйтесь</a></div>
				</div>
			</div>
		</div>
	</div>
<div class=body>
	
    <nav class="navbar navbar-dark justify-content-between">
        <a class="navbar-brand dev_c">DevClub</a>
        <form class="form-inline">
          <button class="btn btn-warning my-2 my-sm-0" type="button" style="color:white;" onclick="openpopup();">Войти</button>
        </form>
      </nav>
    <div class=round></div>
    <div class=row style="margin-bottom: 300px; margin-top:20px;">
    <div class="col-6 shag">
    
        <div class="shag">Сделайте шаг<br> к новой<br> профессии</div>
    </div>
        <div class="col-6 promo">
            Курсы, которые помогут освоить<br> востребованную профессию <br>с нуля и
            изучить новую специализацию<br><br><br>
            <div>
                Начать просто.<br><span id="popr">Попробуйте</span>
            </div>
            </div>
        </div>
        <div class=row >
            <div class="justify-content-center" style="display:flex; text-align:center;">
                <h1>После прохождения курсов вы изучите все<br>необходимые инструменты для создания сайта</h1></div>
        </div>
        <div class=row>
        <div class="align-content-center d-flex flex-row justify-content-center">
            <div class=col-2>
            <img src="img/html.png" id=pic1  width=250 height=250 style="text-align:center;"><br>
            <div style="text-align:center;" > 
                HTML (от английского HyperText Markup Language) — это язык гипертекстовой разметки страницы. Он используется для того, чтобы дать браузеру понять, как нужно отображать загруженный сайт.</>
            </div>
            </div>

            <div class=col-2 style="margin-left: 5%;">
                <img src="img/css.png" id=pic2 width=270 height=250 style="text-align:center;">
                <div style="text-align:center; width: 270px; height: 250px;" > 
                    CSS (Cascading Style Sheets, каскадные таблицы стилей) — язык описания внешнего вида HTML-документа. Практически ни один сайт не обходится без CSS, поэтому HTML и CSS действуют в единой связке.
                </div>
            </div>
            
            <div class="col-2 d-flex flex-column" style="margin-left: 7%">
                <img src="img/js.png" id=pic3 width=250 height=250 style="text-align:center;" >

                <div style="text-align:center; width: 250px; height: 250px;" > 
                    JavaScript — язык программирования, который позволяет вам создать динамически обновляемый контент, управляет мультимедиа, анимирует изображения                </div>
            </div>
        </div>
        </div>
        <div>
        <div class="row" style="margin-top:200px">
            <div class="col-6 promo">
                <strong>Решитесь на большее</strong><br><br>
                Вам есть что показать этому миру.<br>
                Позвольте себе ставить большие<br>
                цели, а навыки и знания дадим мы.<br> 
                Для этого у нас есть все инструменты.<br>
            </div>
            <div class="col-6">
                <img src="img/1.png" width=600 style="">
            </div>
            </div>
            <br>
            <div class="row" style="margin-top:200px; margin-bottom:200px;">
                <div class="col-6">
                    <img src="img/2.png" width=600>
                </div>
                <div class="col-6 promo">
                    <strong> Действуйте</strong>
                    Мы создали комфортную среду<br> обучения, чтобы у вас всегда была<br> мотивация двигаться вперёд.<br>
                    Учитесь, практикуйтесь и<br> применяйте знания сразу в работе.
                </div>
               </div>

               <div class=row>
                <div class="justify-content-center" style="display:flex; margin-bottom:200px">
                    <div class="shag">Мы будем рядом и не<br>
                        дадим остановиться<br>
                        на полпути<br></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-6 promo2">
                <div style="font-size:50px;">Начните учится бесплатно</div>
                <p>Зарегистрируйтесь в DevClub и получите доступ <br>
                к бесплатным курсам.</p><br>
                <form action="index.php" method="GET">
                	<div class="form-inline">
                    <input type=text name=text2 placeholder="E-Mail" id=text2 class="bg-dark">
                    <input type=submit name=but2 value="Начать" id=but2 ></div>
                </form>
                </div>
            </div>
            <br>
        </div>   
        <?php require 'document_php/footer.php'?>
</body>
</html>