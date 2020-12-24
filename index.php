<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Приветствие</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/Mainstyle.css">
  <meta name=viewport content="width=1000">
    <meta name=viewport content="width=1000">
  </head>
<body>
  <div class="container mt-4">
    <IMG class="displayed" src="/Assets/MainLogo.png">
    <div class="main">
    	<span>И</span>
    	<span>Н</span>
    	<span>Ф</span>
    	<span>О</span>
    	<span>Р</span>
      <span>М</span>
      <span>А</span>
      <span>Ц</span>
      <span>И</span>
    	<span class="letter"></span>
    	<span>Н</span>
    	<span>Н</span>
      <span>О</span>
      <span>-</span>
      <span>С</span>
    	<span>П</span>
    	<span>Р</span>
    	<span>А</span>
    	<span>В</span>
      <span>О</span>
      <span>Ч</span>
      <span>Н</span>
      <span>А</span>
      <span>Я</span>
      <span> </span>
      <span>С</span>
      <span>И</span>
      <span>С</span>
      <span>Т</span>
      <span>Е</span>
      <span>М</span>
      <span>А</span>
    </div>
    <div class="main">
    <span>Т</span>
    <span>У</span>
    <span>Р</span>
    <span>И</span>
    <span>С</span>
    <span>Т</span>
    <span> </span>
    <span>В</span>
    <span> </span>
    <span>Р</span>
    <span>О</span>
    <span>С</span>
    <span>С</span>
    <span>И</span>
    <span>И</span>
    </div>
    <div class ="row">
        <div class="col">
        <form action="registration.php">
        <button id="MainButton" class="btn btn-success">Зарегистрироваться</button>
        </form>
      </div>
        <div class="col">
         <form action="login.php">
           <button id="MainButton1" class="btn btn-success">Авторизоваться</button>
         </form>
       </div>
       <?php
   if($_COOKIE['user']==''):
   ?>
       <div class="col">
         <form action="main.php">
           <button id="MainButton1" class="btn btn-success">Войти как гость</button>
         </form>
       </div>
       <?php endif;?>
     </div>
   </div>
  </body>
</html>
