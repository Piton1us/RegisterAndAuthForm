<?

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);




    $pass = md5($pass."gdhjsexc1");

    $mysql = new mysqli('localhost','root','root','register-bd');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    //Преобразование в массив для удобства
    $user = $result->fetch_assoc();
    // print_r($user);
    // exit();

    //В теории проверка данных на вход(выдаёт ошибку хз по чему)
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    //Создание cookie
    setcookie('user',$user['name'], time() + 3600, "/WebBook");


    $mysql->close();

    header('Location:/WebBook');
?>