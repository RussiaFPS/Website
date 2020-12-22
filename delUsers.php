<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Админ панель</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menuStyle.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <div class="container mt-4">
    <header id="header">
	<nav class="links" style="--items: 5;">
		<a href="index.php">Стартовая страница</a>
		<a href="information.php">Справочная</a>
		<a href="otziv.php">Отзывы</a>
		<a href="about.php">Контакты</a>
		<a href="account.php">Личный кабинет</a>
		<span class="line"></span>
	</nav>
</header>
<div id="otzivtext" align="center">
<p>Админ панель</p>
</div>
<div align="center">
<p id="VivodAdminsInfa">Добавление пользователя</p>
</div>
<div style="margin-right:-20%;">
<form action="addUsers.php" method="post">
  <input id="AddLogin" type="text" name="AddLogin" class="form-control" placeholder="Введите логин"><br>
  <input id="AddName" type="text" name="AddName" class="form-control" placeholder="Введите имя"><br>
  <input id="AddPass" type="password" name="AddPass" class="form-control" placeholder="Введите пароль"><br>
  <select name="AddRole" id="AddRole">
    <option>user</option>
    <option>admin</option>
  </select>
<button id="buttonAddUsers" class="btn btn-success" type=submit style="margin-left:7%;margin-top:2%;">Добавить пользователя</button>
</form>
</div>
<div align="center">
<p id="VivodAdminsInfa">Удаление пользователя</p>
</div>
<div style="margin-right:-20%;">
<form action="delUsers.php" method="post">
  <input id="DelLogin" type="text" name="DelLogin" class="form-control" placeholder="Введите логин"><br>
  <button id="buttonAddUsers" class="btn btn-success" type=submit style="margin-left:7%;">Удалить пользователя</button>
</form>
</div>
</div>
</body>
</html>



<?php
$UserRole=$_COOKIE['user'];
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserRole' AND `role`='admin'");
$user = $result->fetch_assoc();
if(count($user)==0){
    header('Location:/index.php');
}
$mysql->close();

include registration.php;
$login = filter_var(trim($_POST['DelLogin']), FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
  echo"<script>swal(\"Недопустимая длина логина!\", \"Логин содержит от 3 до 90 символов\", \"error\");</script>";
    exit();
}
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if(count($user)==0){
  echo"<script>swal(\"Такого пользователя нет!\", \"Поменяйте логин\", \"error\");</script>";
}else{
  $mysql->query("DELETE FROM users WHERE login = '$login'");
  $mysql->close();
  echo"<script>swal(\"Успешно!\", \"Пользователь успешно удален\", \"success\");</script>";
  exit();
}


?>
