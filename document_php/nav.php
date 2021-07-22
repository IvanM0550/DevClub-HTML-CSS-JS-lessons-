<?php echo "<meta charset=utf-8>";
  $connxplevel = new MySQLi('localhost', 'root', '', 'devclub');
  $xp=$connxplevel->query("SELECT `xp` FROM `users` WHERE `name`='$cookie'");
  $level=$connxplevel->query("SELECT `level` FROM `users` WHERE `name`='$cookie'");
  $xp_res=$xp->fetch_assoc();
  $level_res=$level->fetch_assoc();
  $connxplevel->close();
?>
<div class="col-3 justify-content-between" style="background: black; height: 100vh;" onload="geturl();">

  <nav class="nav flex-column navbar-expand-lg navbar-light" id=nav1>
    <div class=navbar-brand style="color:#fff"><a href="/">DevClub</a></div>
    <a class="nav-item mt-5" id="nav-o" href='PersonalAccount.php'>Главная</a>
    <a class="nav-item mt-5" id="nav-t" href='Courses.php'>Курсы обучения</a>
    <a class="nav-item mt-5" id="nav-th" href='favorite.php'>Избранное</a>
    <a class="nav-item mt-5" id="nav-fo" href='tests.php'>Тесты</a>
    <a class="nav-item mt-5" id="nav-fi" href='achievements.php'>Достижения</a>
  </nav>       
                    
  <div class="container d-flex flex-row user" style="position:relative; top:35vh; float:left; width: 100%;">
  <div class="userpic align-middle"><?=substr($_COOKIE['user'], 0, 1)?></div>
  <div class="d-flex flex-column align-content-center ml-10 userinfo">
  <span class="username"><?=$_COOKIE['user']?></span><br>
  <small class="text-muted align-self-start ">Уровень <?=$level_res[level]?> (<?=$xp_res[xp]?>/10xp)</small>
  <form action="singout.php">
  <input type=submit class="btn btn-warning" style="position:relative;bottom:5vh;left:150%;" value="Выйти">
  </div>
  </div>
  
</div>                    