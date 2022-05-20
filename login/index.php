<?php
    session_start();
    include("../connect.php");
?>

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
    <div class="loginwindow">
        <h1>Log in</h1>
        <form class="loginform">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <button id="loginbtn">Log in</button>
        </form>
        <div class="loginmsg">
            <?php
                echo($_SESSION['loginmsg']);
                $_SESSION['loginmsg'] = ''
            ?>
        </div>
    </div>
    <?php
        $checkpass = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`password` = "'.$_SESSION["user"]["password"].'"');
        if (mysqli_num_rows($checkpass) > 0) {
            header("Location: .");
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>