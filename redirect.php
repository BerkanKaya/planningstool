<?php
    include("functions.php");
    
    $id = $_POST['id'];
    $gameid = $_POST['gameid'];
    $time = $_POST['time'];
    $host = $_POST['host'];
    $players = $_POST['players'];



    $sql = "INSERT INTO planning (id, gameid, time, host, players) VALUES (null, '$first');";
    
    Addall($first);

    header("location: index.php");
?>