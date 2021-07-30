<?php
	$conn2 = new MySQLi('localhost', 'root', '', 'devclub');
	$email = $_POST['mailru'];
	$pass = $_POST['passs'];
	$name = $_POST['name'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$res=$conn2->query("SELECT `email`, `email_validate` FROM `users` WHERE `email` = '$email'");
		$res_res=$res->fetch_assoc();
		if($res_res[email] == "" && $pass !="" && ctype_alpha($name)){
			sleep(5);
			$conn2->query("INSERT INTO `users` (`id`, `name`, `email`, `email_validate`, `pass`, `level`, `xp`, `html_prog`, `css_prog`, `js_prog`) VALUES (NULL, '$name', '$email', '0', '$pass', '1', '0', '0', '0', '0')");
			header("Location: /");
		}
		else if($res_res[email] != "" && $res_res[email_validate] == '0' && $pass != "" && ctype_alpha($name)){
			sleep(5);
			$conn2->query("INSERT INTO `users` (`id`, `name`, `email`, `email_validate`, `pass`, `level`, `xp`, `html_prog`, `css_prog`, `js_prog`) VALUES (NULL, '$name', '$email', '0', '$pass', '1', '0', '0', '0', '0')");
			header("Location: /");
		}
		else if($res_res[email] != "" && $res_res[email_validate] != '0'){
			echo '<meta http-equiv="refresh" content="5; url=/reg.php" charset=utf-8>';
			echo 'Данный E-Mail уже активирован!';
		}
		else{
			echo '<meta http-equiv="refresh" content="5; url=/reg.php" charset=utf-8>';
			echo "Возникла ошибка при вводе данных!";
		}

	}
	else{
		echo '<meta http-equiv="refresh" content="5; url=/reg.php" charset=utf-8>';
		echo "Данные введены некорректно";
	}



		
	/*
	$conn2->query("INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass')");
	header('Location: /');
	$conn2->close();*/
	
?>