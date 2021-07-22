<?php

    $email = $_POST['email1'];
    $pass = $_POST['pass1'];
    $conn1 = new MySQLi('localhost', 'root', '', 'devclub');
    $email_pass_check = $conn1->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
    $row_email_pass_check = $email_pass_check->fetch_assoc();
    if(count($row_email_pass_check) == 0){
        echo 'Неверный логин или пароль! <a href=/>Вернуться.</a>';
        exit();
    }
    
    $conn1->close();
    setcookie('user', $row_email_pass_check['name'], time()+3600*24*30, "/");
    header('Location: /PersonalAccount.php');
?>