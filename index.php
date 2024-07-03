<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h2>Авторизация</h2>

        <?php 
        session_start();  

        if (!isset($_GET['go'])) {
        ?>
        <form>
            <label for="login">Логин:</label>
            <input type="text" name="login" id="login" required>

            <label for="passwd">Пароль:</label>
            <input type="password" name="passwd" id="passwd" required>

            <input type="submit" name="go" value="Войти">
        </form>


        <?php
        } else {
            $_SESSION['login'] = $_GET['login'];
            $_SESSION['passwd'] = $_GET['passwd'];

            if ($_GET['login'] == "admin" && $_GET['passwd'] == "123") {
                header("Location: secret_info.php");
            } else {
                echo "Неверный ввод, попробуйте еще раз<br>";
                header("Location: auth.php");
            }
        }
        ?>

      
    </div>
</body>
</html>
