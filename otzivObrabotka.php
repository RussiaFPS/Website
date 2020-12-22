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
  </head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <div class="container mt-4">
    <header id="header">
	<nav class="links" style="--items: 5;">
    <a href="index.php">Стартовая страница</a>
    <a href="#">Link 2</a>
    <a href="otziv.php">Отзывы</a>
    <a href="#">Link 4</a>
    <a href="account.php">Личный кабинет</a>
    <span class="line"></span>
	</nav>
</header>
<div id="otzivtext" align="center">
<p>Отзыв</p>
</div>
<form action="otzivObrabotka.php" method="post">
  <textarea name="otziv" id="otziv" cols="70" rows="5"></textarea></p>
  <p id="textBall">Выберите оценку</p>
  <select name="balli" id="balli">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
  <button class="btn btn-success" type=submit>Отправить</button>
</form>
<div id="SpisokOtzivovButton">
<form action="spisokOtzivov.php">
  <button class="btn btn-success">Посмотреть отзывы</button>
</form>
</div>
</div>
</body>
</html>

<?php
$login = $_COOKIE['user'];
$otziv = filter_var(trim($_POST['otziv']), FILTER_SANITIZE_STRING);
$balli = filter_var(trim($_POST['balli']), FILTER_SANITIZE_STRING);

if (mb_strlen($otziv) < 3 || mb_strlen($otziv) > 500) {
    echo"<script>swal(\"Недопустимая длина отзыва!\", \"Отзыв содержит от 3 до 500 символов\", \"error\");</script>";
    exit();
}
if($_COOKIE['user']==''){
  echo"<script>swal(\"Отзыв могут оставлять только зарегистрированные пользователи!\", \"Зарегистрируйтесь\", \"error\");</script>";
  exit();
}


$mysql = new mysqli('localhost', 'root', 'root', 'otzivi-bd');

$mysql->query("INSERT INTO `otzivi` (`login` , `otziv` , `balli`)
VALUES('$login','$otziv','$balli') ");
$mysql->close();

?>
