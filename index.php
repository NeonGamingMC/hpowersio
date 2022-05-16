<?php
    include("connect.php")
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
                <div class="regbtns">
                    <a href="/login"><div id="login">
                        Log in
                    </div></a>
                    <a href="/register"><div id="register">
                        Register
                    </div></a>
                </div>
            </div>
            <img class="icon" src="images/icon.png" alt="icon">
            <div class="title">Welcome to hpowers.io</div>
            <div class="subtitle">...also known as H Powers</div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="js/startupanim.js"></script>
        </div>
    </header>
</body>
</html>