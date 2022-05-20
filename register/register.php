<?php
    include("../connect.php");
    session_start();
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $em = $_POST['email'];
    $checkuser = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`username` = "'.$un.'"');
    $checkemail = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`email` = "'.$em.'"');
    if ($un == '' || $pw == '' || $em == ''){
        $_SESSION['regmsg'] = "Please fill all the blanks!";
        header('Location: .');
    }else{
        if ($checkemail['num_rows'] < 1){
            if ($checkuser['num_rows'] < 1){
                mysqli_query($link,'INSERT INTO `users`(`username`,`password`,`email`) VALUES ("'.$un.'","'.$pw.'","'.$em.'")');
                $_SESSION['user'] = [
                    'name' => $un,
                    'password' => $pw
                ];
                print_r($_SESSION);
                header('Location: ..');
            }else{
                $_SESSION['regmsg'] = "The username is already taken!";
                header('Location: .');
            }
        }else{
            $_SESSION['regmsg'] = "Cannot create a second acount with same email!";
            header('Location: .');
        }
    }
?>