<?php
session_start();

  $users = require 'storage.php';
  $error = '';
  if ($_POST) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    //Валидация
    if (empty($login) || empty($password)) {
        $error = 'Логин и пароль обязательны для заполнения';
    }  else {
        foreach ($users as $user){
            if ($user['login'] === $login && $user['password'] === $password){
                $_SESSION['user'] = $user;
                header('Location: about.php');
                exit;
            }
        }
        $error = 'Неверный логин или пароль';
    }
}
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Authorisation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="index">
<div class="form">
            <h1>Authorisation</h1>
                <form method="post">
                    <label class="label">Login</label>
                    <input class="input" type="text" name="login" placeholder="Enter your login"><br><br>
                    <label class="label">Password</label>
                    <input class="input" type="password" name="password" placeholder="Enter your password"><br><br>
                    <input class="button" type="submit" value="GO">
                </form>
        </div>
    <?php if ($error): ?>
    <?php echo $error; ?>
    <?php endif; ?>
</body>
</html>