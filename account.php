<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Личный кабинет</title>
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
<div align="center" >
<input type="image" id="Avatar" src="Assets/Avatar.png">
</div>
    <div align="center" >
  <?php
  if($_COOKIE['user']==''):?>
<p id="AccountHello">Гость</p>
<p id="AccountHello2">Хотите <a href ="/registration.php">зарегистрироваться</a> или <a href ="/login.php">авторизоваться</a>?</p>
<?php else:?>
    <p id="AccountHello"><?=$_COOKIE['user']?></p>
        </div>
    <form action="exit.php">
    <button id="ButtonExit" class="btn btn-success">Выйти</button>
    </form>
  <?php endif;?>


  <?php
  $UserRole=$_COOKIE['user'];
  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserRole' AND `role`='admin'");
  $user = $result->fetch_assoc();
  if(count($user)!=0){
    ?>
    <form action="adminPanel.php">
    <button id="ButtonExit" class="btn btn-success">Админ панель</button>
    </form>
    <?php
  }
  $mysql->close();
    ?>
  </div>
</body>
</html>
