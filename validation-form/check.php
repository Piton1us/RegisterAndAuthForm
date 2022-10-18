<?

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo"Не допустимая длина логина";
        exit();
    }else if(mb_strlen($pass) < 4 || mb_strlen($login) > 15){
        echo"Не допустимая длина пароля (от 4 до 15 символов)";
        exit();
    }else if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
        echo"Не допустимая длина имени";
        exit();
    }

    $pass = md5($pass."gdhjsexc1");

    $mysql = new mysqli('localhost','root','root','register-bd');
    $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`) VALUES('$login','$pass','$name')");

    $mysql->close();

    header('Location:/WebBook');
    

?>