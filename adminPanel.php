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
    <meta name=viewport content="width=1000">
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
<div align="center" style="margin-right:37%;">
<form action="ProcessingUsers.php">
<button class="btn btn-success">Работа с аккаунтами пользователей</button>
</form>
<form action="ProcessingInfa.php">
<button class="btn btn-success" style="margin-top:5%;">Работа со справочной информацией</button>
</form>
</div>
</div>
</body>
</html>


<?php
$UserRole=$_COOKIE['user'];
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

if ($mysql->connect_error) {
    die("<script>swal(\"Ошибка!\", \"Не удается установить соединение с базой данных\", \"error\");</script>");
}

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserRole' AND `role`='admin'");
$user = $result->fetch_assoc();
if(count($user)==0){
    header('Location:/index.php');
}
$mysql->close();

?>
