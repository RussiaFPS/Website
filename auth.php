<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авторизация</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <div class="container mt-4">
    <?php
    if($_COOKIE['user']==''):
    ?>
    <form action="index.php">
    <div align="center">
    <input type="image" id="MainLogo" src="Assets/MainLogo.png">
    </div>
    </form>
    <h1 id="MainForms">Форма авторизации</h1>
   <form action="auth.php" method="post">
     <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
     <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
     <button class="btn btn-success" type=submit>Авторизоваться</button>
   </form>
 <?php else:
    header('Location:/main.php');?>
  <?php endif;?>
  </div>
</body>
</html>

<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."QafjhgjgH74");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user)==0){
echo"<script>swal(\"Такой пользователь не найден!\", \"Данный пользователь не зарегистрирован\", \"error\");</script>";
exit();
}

setcookie('user',$user['name'],time() + 3600,"/");

$mysql->close();

header('Location:/main.php');
?>
