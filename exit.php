<?
//Удаление cookie (если пользователь решил зайти заново)

setcookie('user',$user['name'], time() - 3600, "/RegisterAndAuthForm");

header('Location:/RegisterAndAuthForm');
?>