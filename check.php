<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <div class="container mt-4">
    <form action="index.php">
    <div align="center">
    <input type="image" id="MainLogo" src="Assets/MainLogo.png">
    </div>
    </form>
        <h1 id="MainForms">Форма регистрации</h1>
        <form action="check.php" method="post">
          <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
          <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"><br>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type=submit>Зарегистрировать</button>
        </form>
  </div>
</body>
</html>

<?php
include registration.php;
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
  echo"<script>swal(\"Недопустимая длина логина!\", \"Логин содержит от 3 до 90 символов\", \"error\");</script>";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo"<script>swal(\"Недопустимая длина имени!\", \"Имя содержит от 3 до 50 символов\", \"error\");</script>";
    exit();
} elseif (mb_strlen($pass) < 3 || mb_strlen($pass) > 15) {
    echo"<script>swal(\"Недопустимая длина пароля!\", \"Пароль содержит от 3 до 15 символов\", \"error\");</script>";
    exit();
}


$pass = md5($pass."QafjhgjgH74");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');


$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if(count($user)==0){
  $mysql->query("INSERT INTO `users` (`login` , `pass` , `name`)
  VALUES('$login','$pass','$name') ");
  $mysql->close();
  echo"<script>swal(\"Успешно!\", \"Вы зарегистрировались успешно\", \"success\");</script>";
}else{
  echo"<script>swal(\"Такой пользователь уже зарегистрирован!\", \"Поменяйте логин\", \"error\");</script>";
  exit();
}
?>
