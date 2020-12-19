<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Личный кабинет</title>
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
    <div align="center" id="UserName">
       <p>Привет <?=$_COOKIE['user']?></p>
    </div>
      <form action="exit.php">
      <button id="ButtonExit" class="btn btn-success">Выйти</button>
      </form>
  </div>
</body>
</html>
