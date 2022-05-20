<?php
    include("../connect.php");
    session_start();
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $em = $_POST['email'];
    $checkuser = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`username` = "'.$un.'"');
    $checkemail = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`email` = "'.$em.'"');
    if ($un == '' || $pw == '' || $em == ''){
        echo "Please fill all the blanks!";
    }else{
        if (mysqli_num_rows($checkemail) < 1){
            if (mysqli_num_rows($checkuser) < 1){
                mysqli_query($link,'INSERT INTO `users`(`username`,`password`,`email`,`dataid`) VALUES ("'.$un.'","'.$pw.'","'.$em.'",0)');
                $_SESSION['user'] = [
                    'name' => $un,
                    'password' => $pw
                ];
                mkdir("../users/".$un);
                $file = fopen("../users/".$un."/index.php","w");
                fwrite($file,'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world
</body>
</html>');
            }else{
                echo "The username is already taken!";
            }
        }else{
            echo "Cannot create a second acount with same email!";
        }
    }
?>