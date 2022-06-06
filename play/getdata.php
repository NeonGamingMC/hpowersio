<?php
    include("../connect.php");
    session_start();
    $verify = $_POST["fromGame"];
    //if ($verify == true){
        $getid = mysqli_query($link,"SELECT `dataid` FROM `users` WHERE `users`.`username` = '$_SESSION[user][name]' AND `users`.`password` = '$_SESSION[user][password]'");
        $getid = mysqli_fetch_array($getid);
        $data = mysqli_query($link,"SELECT `data` FROM `plrdata` WHERE `plrdata`.`id` = '$getid[dataid]'");
        $data = mysqli_fetch_array($data)["data"];
        $data = base64_decode($data);
        print_r((array)json_decode($data));
    //}