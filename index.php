<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">

    <!-- Выполняется когда не была произведена авторизация -->
    <?php
        if($_COOKIE['user'] == ''):

    ?>
        <div class="row">
            <div class="col">
                <h1> Форма регистрации</h1>
                <form action="../RegisterAndAuthForm/validation-form/check.php" method="post"> 
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Зарегистрировать</button>
                </form>
            </div>

            <div class="col">
                <h1> Форма авторизации</h1>
                <form action="../RegisterAndAuthForm/validation-form/auth.php" method="post"> 
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
                </form>
            </div>
            
            <!-- Выполняется когда уже выполнен вход -->
            <?php else:?>

                <p>Привет <?= $_COOKIE['user']?>. Чтобы выйти нажмите <a href="../RegisterAndAuthForm/exit.php">здесь</a> </p>
            <!-- Конец php -->
            <?php endif;?>
        </div>

    </div>
    
</body>
</html>