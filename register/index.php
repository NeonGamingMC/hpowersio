<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="registerwindow">
        <h1>Register</h1>
        <form class="registerform" action="register.php" method="POST">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <label>Email</label>
            <input type="email" name="email"><br><br>
            <button id="registerbtn">Register</button>
        </form>
        <div class="regmsg">
            <?php
                echo($_SESSION['regmsg']);
                $_SESSION['regmsg'] = ''
            ?>
        </div>
    </div>
</body>
</  