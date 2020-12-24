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
    <p>Результат поиска</p>
    </div>
</div>
</body>
</html>


<?php
$gorod = filter_var(trim($_POST['gorod']), FILTER_SANITIZE_STRING);
$tip=0;
if($_POST['cryt']=="Достопримечательности"){
 $tip=0;
}else if($_POST['cryt']=="Кафе"){
  $tip=1;
}


$mysql = new mysqli('localhost', 'root', 'root', 'infa-bd');

if ($mysql->connect_error) {
    die("<script>swal(\"Ошибка!\", \"Не удается установить соединение с базой данных\", \"error\");</script>");
}

$sql = $mysql->query("SELECT * FROM `infa` WHERE `gorod`='$gorod' ");
  if($tip==0){
    ?><div class="head_info" align="center">
      <table>
  <colgroup>
    <col span="1" style="background:Khaki">
    <col span="2" style="background:LightCyan">
    <col style="background-color:LightCyan">
  </colgroup>
  <tr>
    <th>Город</th>
    <th>Достопримечательность</th>
    <th>Тип достопримечательности</th>
  </tr>
  <?php while ($result = mysqli_fetch_array($sql)) {?>
  <tr>
    <td align="center"><?php echo "{$result['gorod']}";?></td>
    <td align="center"><?php echo "{$result['dos']}";?></td>
    <td align="center"><?php echo "{$result['typeDos']}";?></td>
  </tr>
 <?php
  }
  ?>
</table>
</div>
<?php
}else if($tip==1){
  ?><div class="head_info" align="center">
    <table>
<colgroup>
  <col span="1" style="background:Khaki">
  <col span="2" style="background:LightCyan">
  <col style="background-color:LightCyan">
</colgroup>
<tr>
  <th>Город</th>
  <th>Заведение</th>
  <th>Средний чек</th>
</tr>
<?php while ($result = mysqli_fetch_array($sql)) {?>
<tr>
  <td align="center"><?php echo "{$result['gorod']}";?></td>
  <td align="center"><?php echo "{$result['cafe']}";?></td>
  <td align="center"><?php echo "{$result['checkCafe']}";?></td>
</tr>
<?php
}
?>
</table>
</div>
<?php
}

$mysql->close();
?>
