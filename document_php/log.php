<?php echo "<meta charset=utf-8>";
  $connxplevel = new MySQLi('localhost', 'root', '', 'devclub');
  $xp=$connxplevel->query("SELECT `xp` FROM `users` WHERE `name`='$cookie'");
  $level=$connxplevel->query("SELECT `level` FROM `users` WHERE `name`='$cookie'");
  $xp_res=$xp->fetch_assoc();
  $level_res=$level->fetch_assoc();
  $xp_res_res=$xp_res[xp];
  $level_res_res=$level_res[level];
  $id=$_COOKIE['user_id'];
  if($level_res_res='1' && $xp_res_res=='10'){
    $connxplevel->query("UPDATE `users` SET `level` = `level`+1, `xp` = '0' WHERE `users`.`id` = '$id'");
    $max_xp="10";
  }
  else if($level_res_res='2' && $xp_res_res=='20'){
    $connxplevel->query("UPDATE `users` SET `level` = `level`+1, `xp` = '0' WHERE `users`.`id` = '$id'");
    $max_xp="20";
  }
  else if($level_res_res='3' && $xp_res_res=='30'){
    $connxplevel->query("UPDATE `users` SET `level` = `level`+1, `xp` = '0' WHERE `users`.`id` = '$id'");
    $max_xp="30";
  }
  else if($level_res_res='4' && $xp_res_res=='40'){
    $connxplevel->query("UPDATE `users` SET `level` = `level`+1, `xp` = '0' WHERE `users`.`id` = '$id'");
    $max_xp="50";
  }
  
  $connxplevel->close();
  if($level_res[level]==2){$max_xp=20;}else if($level_res[level]==3){$max_xp='30';}else if($level_res[level]==4){$max_xp='40';}else if($level_res[level]==5){$max_xp='50';}else{$max_xp='10';}
?>
<div class="container d-flex flex-row user" id="log" style="position:relative; top:15vh; float:left; width: 100%;">
  <div class="userpic align-middle"><?=substr($_COOKIE['user'], 0, 1)?></div>
  <div class="d-flex flex-column align-content-center ml-10 userinfo">
  <span class="username"><?=$_COOKIE['user']?></span><br>
  <small class="text-muted align-self-start ">Уровень <?=$level_res[level]?> (<?=$xp_res[xp]?>/<?echo $max_xp?>xp)</small>
  <form action="singout.php">
  <input type=submit class="btn btn-warning" style="position:relative;bottom:5vh;left:150%;" value="Выйти">
  </div>
</div>
