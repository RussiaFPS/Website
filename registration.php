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
    <meta name=viewport content="width=1000">
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
