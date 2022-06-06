<?php
    include("../connect.php");
    session_start();
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $em = $_POST['email'];
    $checkuser = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`username` = "'.$un.'"');
    $checkemail = mysqli_query($link,'SELECT * FROM `users` WHERE `users`.`email` = "'.$em.'"');
    if ($un == '' || $pw == '' || $em == ''){
        echo json_encode("Please fill all the blanks!");
    }else{
        if (mysqli_num_rows($checkemail) < 1){
            if (mysqli_num_rows($checkuser) < 1){
                $dtplayer = base64_encode('{"score":0,"lvl":1,"reb":0,"pre":0}');
                mysqli_query($link, "INSERT INTO `users`(`username`,`password`,`email`,`dataid`) VALUES ('$un','$pw','$em',0)");
                mysqli_query($link,"INSERT INTO `plrdata`(`data`) VALUES ('$dtplayer')");
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
                echo json_encode("success");
            }else{
                echo json_encode("The username is already taken!");
            }
        }else{
            echo json_encode("Cannot create a second acount with same email!");
        }
    }
?>