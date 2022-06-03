<?php
    include("connect.php");
    session_start();
    $verify = $_POST["fromGame"];
    if ($verify == true){
        $getid = mysqli_query($linl,'SELECT `dataid` FROM `users` WHERE `users`.`username` = "'.$_SESSION['user']['name'].'" AND `users`.`password` = "'.$_SESSION['user']['password'].'"');
        $getid = mysqli_fetch_array($getid);
        echo json_encode($getid);
    }