<?php
    include("connect.php");
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H Powers</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="menu">
                <ul class="nav">
                    <a href="/play"><li>Play</li></a>
                    <a href="#about"><li>About</li></a>
                    <a href="#feedback"><li>Feedback</li></a>
                    <a href="#community"><li>Community</li></a>
                </ul>
                <?php
                    $checkpass = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`password` = "'.$_SESSION["user"]["password"].'"');
                    if (mysqli_num_rows($checkpass) > 0) {
                        echo('<div id="user"><div class="username">'.$_SESSION['user']['name'].'</div><img src="images/usericon.png"></div>');
                    }else{
                        echo('<div class="regbtns">
                        <a href="/login"><div id="login">
                        Log in
                        </div></a>
                        <a href="/register"><div id="register">
                        Register
                        </div></a>
                        </div>');
                    }
                ?>
            </div>
            <img class="icon" src="images/icon.png" alt="icon">
            <div class="title">Welcome to hpowers.io</div>
            <div class="subtitle">...also known as H Powers</div>
            
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/startupanim.js"></script>
</body>
</html>