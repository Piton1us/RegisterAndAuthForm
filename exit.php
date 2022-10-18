<?

setcookie('user',$user['name'], time() - 3600, "/WebBook");

header('Location:/WebBook');
?>