<?php
  function DatabaseConnect(){

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "planningstool";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    
    }
    catch (PDOException $e){
        echo "connection failed" . $e->getMessage();
    }
}

function conn($id){
    $conn = DatabaseConnect();
    $query = $conn->prepare('SELECT * FROM games WHERE id=:id');
    $query->bindParam(":id", $id);
    $query->execute();
    $conn = null;
    return $query->fetchAll();
}

function AllGames(){
    $conn = DatabaseConnect();
    $query = $conn->prepare('SELECT * FROM games');
    $query->execute();
    $conn = null;
    return $query->fetchAll();
}


function Addall($gameid, $time, $host, $players){
    $conn = DatabaseConnect();
    $query = $conn->prepare('UPDATE `games` SET `time` = :time, `host` = :host, `players` = :players WHERE `games`.`id` = :id; ');
    $query->bindParam(":id", $gameid);
    $query->bindParam(":time", $time);
    $query->bindParam(":host", $host);
    $query->bindParam(":players", $players);
    $query->execute();
    $conn = null;
    return $query->errorCode(); 
}

function deleteCharacter($gameid){
    $conn = DatabaseConnect();
    $query = $conn->prepare('UPDATE `games` SET `host` = null, `players` = null, `time` = "00:00" WHERE id=:id');
    $query->bindParam(":id", $gameid);
    $query->execute();
    $conn = null;
}


