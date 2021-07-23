<style type="text/css">
	.naaav{
		padding-left: 10px;
		border-radius: 0 10px 10px 0;
	}.naaav:hover{
    	background: orange;
	}

</style>
<div class="col-3 justify-content-between" style="background: black; height: 100vh; margin-left:0" onload="geturl();">

  <nav class="nav flex-column navbar-expand-lg navbar-light" id=nav1>
    <div class=navbar-brand style="color:#fff"><a href="/">DevClub</a></div>
    <a class="nav-item mt-5 naaav" id="nav-o" href='PersonalAccount.php'>Главная</a>
    <a class="nav-item mt-5 naaav" id="nav-t" href='Courses.php'>Курсы обучения</a>
    <a class="nav-item mt-5 naaav" id="nav-th" href='favorite.php'>Избранное</a>
    <a class="nav-item mt-5 naaav" id="nav-fo" href='tests.php'>Тесты</a>
    <a class="nav-item mt-5 naaav" id="nav-fi" href='achievements.php'>Достижения</a>
  </nav>       
                    
  <?php require 'log.php'?>
</div> 
               