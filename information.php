<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Информация</title>
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
<p>Впишите город </p>
</div>
<form action="infaObrabotka.php" method="post">
  <textarea name="gorod" id="gorod" cols="30" rows="1"></textarea></p>
  <p id="textBall">Выберите критерий</p>
  <select name="cryt" id="cryt">
    <option>Достопримечательности</option>
    <option>Кафе</option>
  </select>
  <button class="btn btn-success" type=submit>Отправить</button>
</form>
</div>
</div>
</body>
</html>
