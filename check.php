<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Недопустимая длина имени";
    exit();
} elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 15) {
    echo "Недопустимая длина пароля (от 2 до 15 символов)";
    exit();
}


$pass = md5($pass."QafjhgjgH74");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');


$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if(count($user)==0){
  $mysql->query("INSERT INTO `users` (`login` , `pass` , `name`)
  VALUES('$login','$pass','$name') ");
  $mysql->close();
  header('Location:/');
}else{
  echo "Такой пользователь уже зарегистрирован";
  exit();
}

?>
