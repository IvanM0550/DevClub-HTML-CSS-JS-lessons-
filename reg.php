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
    <title>Регистрация</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style type="text/css">
  /*  .body_pa{
      font-size:20px;
    }
    #but2{
    margin-top:2%;
    background:#FFA000;
    border:4px solid #FFA000;
    color:#fff;
    border-radius:10px;
    height:50px;
    width:200px;
    text-align: center;
}*/

@import url('http://fonts.googleapis.com/css?family=Ubuntu');


*, *:after, *:before{
  box-sizing:border-box;
}

html, body {background:#1a1f25;    font-family: 'Ubuntu';}

.clear {clear:both;}

#man-people-user, #lock-locker {
  fill:white;  
}

.wrapper{
  width:300px; 
  margin:12% auto;
}

form {position:relative;}

.clear {clear:both;}
.sign-in {
  color:white;
  font-size:1.3em;
  text-align:center;
}
.button {
  float:right;
  color:#7f8084;
  border:1px solid #22272d;
  padding:7px 15px;
  border-radius:3px;
  font-size:0.8em;
  cursor:pointer; 
}
.button:hover {color:#d3d3d3}
.lock {
  position:absolute;
  width:30px;
  height:30px;
  margin-top:10px;
  padding:7px; 
  left:5px;
}
.user {
 
  position:absolute;
  width:30px;
  height:30px;
  margin-top:10px;
  padding:7px;
  left:5px;
}

input {
  width:100%;
  padding:5px;
  height:40px;
  border-radius:3px;
  margin:5px 0;
  outline: none;
}
input[type="text"]:focus, input[type="password"]:focus {
  border:1px solid white;
  box-shadow:none;
}
.user-input:focus .user{
  background:white !important;
} 


input[type="text"]{
  background:transparent; 
  border:2px solid #22272d;
  padding-left:45px;
  color:#e6b333;
}
input[type="password"]{
  background:transparent; 
  border:2px solid #22272d;
  padding-left:45px;
  color:#e6b333;
}
input[type="submit"]{
  background:#e6b333; 
  border:none;
  color:white;
  text-align:center;
  font-size:0.8em;
  cursor:pointer;
  font-size:15px;
}
#dalee{
    display:none;
}
#check{
    background:#e6b333; 
    border:none;
    color:white;
    text-align:center;
    font-size:0.8em;
    cursor:pointer;
    font-size:15px;
}
#ei{
    display: none;
}
#pi{
    display: none;
}
#ni{
    display: none;
}
    </style>
    <script type="text/javascript">
        /**function checklog(obj) {
            var email = obj.mailru.value;
            var pass = obj.passs.value;
            var name = obj.name.value;
            var name_pattern = [a-zA-Z]+;
            var email_pattern = /[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/i;
            var pass_pattern = /[0-9a-z]+/i;
            var checklog1 = email_pattern.test(email);
            var checklog3 = name_pattern.test(name);
            var checklog2 = pass_pattern.test(pass);
            if(checklog1 == true && checklog2 == true && name_pattern == true){
                $('#dalee:hidden').css('display', 'block');
                $('#check').css('display', 'none');
            }
            else if(checklog1 == true && checklog2 == false && name_pattern == false){
                $('#ei:hidden').css('display', 'block');
                $('#ni:hidden').css('display', 'none');
                
            }
            else if(checklog1 == false && checklog2 == true && name_pattern == false){
                $('#pi:hidden').css('display', 'block');
                $('#ni:hidden').css('display', 'block');
                
            }
            else if(checklog1 == true && checklog2 == true && name_pattern == false){
                $('#ni:hidden').css('display', 'block');
            }
            else if(checklog1 == false && checklog2 == true && name_pattern == true){
                $('#ei:hidden').css('display', 'block');
            }
            else if(checklog1 == true && checklog2 == false && name_pattern == true){
                $('#pi:hidden').css('display', 'block');
            }
            else{
                $('#ei:hidden').css('display', 'block');
                $('#pi:hidden').css('display', 'block');
                $('#ni:hidden').css('display', "block");
                
            }

            
        }
        */
    </script>
</head>
<body>

  
   <!--- <div style="background-color: black;">
        <div class="body_pa d-flex justify-content-center bg-dark text-white" style="padding: 20px;">
        <div class="row" style="width:500px;">
          <div class="col-12">
            <form>
              <p class="h3 text-center">Регистрация</p>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">              
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Имя пользователя</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваше имя">              
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль">
              </div>
              <div class="text-right">
              <button type="submit" class="btn" id="but2">Зарегестрироваться</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        </div>-->

<div class="wrapper">
  <div class="header">
    <h3 class="sign-in">Регистрация</h3>
  </div>
  <form name=form1 action="conn.php" method="POST">
      <div>
         <label class="user text-light" for="text" style="margin-top:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
         </label>
        
        <input class="user-input" type="text" name="mailru" id="mailru" placeholder="Введите ваш Email" /><div style="color:red;" id=ei>Email invalid</div>
      </div> 

      <div>
        <label class="user text-light" for="text" style="margin-top:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
          </svg>
         </label>
        <label class="user" for="text">
        </label>
       <input class="user-input" type="text" name="name" id="name" placeholder="Введите ваше имя"/><div style="color:red" id=ni>Name Invalid</div>
     </div> 

      <div>
        <label class="lock text-light" for="password" style="margin-top:5px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
          </svg>
        </label>
        <input type="password" name="passs" id="passs" placeholder="Придумайте пароль" /><div style="color:red" id=pi>Password Invalid</div>
      </div> 
     <div>
      <div class="form-check text-light">
        <input type="checkbox" class="form-check-input ch" id="exampleCheck1" style="background-color:#F3CA65	;">
        <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
      </div>
      <!--<input type="button" id="check" value="Проверить" onclick="checklog(form1);">-->
      <input type="submit" value="Зарегестрироваться" />
    </div>
  </form>  
</div>
</body>
</html>