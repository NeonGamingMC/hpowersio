<?php
    include("../connect.php");
    session_start();
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $checkuser = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`username` = "'.$un.'" and `users`.`password` = "'.$pw.'"');
    if ($un == '' || $pw == ''){
        $_SESSION['loginmsg'] = "Please fill all the blanks!";
        header('Location: .');
    }else{
        if (mysqli_num_rows($checkuser) > 0){
            $_SESSION['user'] = [
                'name' => $un,
                'password' => $pw
            ];
            header('Location: ..');
        }else{
            $_SESSION['loginmsg'] = "Incorrect password or username!";
            header('Location: .');
        }
    }
?>