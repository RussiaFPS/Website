<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Отзывы</title>
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
<p>Отзывы</p>
</div>
</div>
</body>
</html>


<?php
$link=mysqli_connect('localhost', 'root', 'root', 'otzivi-bd') or die ("<script>swal(\"Ошибка!\", \"Не удается установить соединение с базой данных\", \"error\");</script>");
$sql = mysqli_query($link, 'SELECT `login`, `otziv`, `balli` FROM `otzivi`');
while ($result = mysqli_fetch_array($sql)) {
  ?><div class="head_info" align="center"><p id="otzivName"><?php echo "Пользователь: {$result['login']}";?></p> <p id="otzivName"><?php echo "Оценка: {$result['balli']}";?></p><textarea id="VivodOtziv" cols="70" rows="5" readonly><?php echo "{$result['otziv']}"; ?></textarea></div><?php
  }
mysqli_close($link);
?>
