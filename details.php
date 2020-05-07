<?php

$id = $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "planningstool";

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){
echo "connection failed" . $e->getMessage();
}
$query = $conn->prepare("SELECT * FROM games WHERE id ='$id'");
$query->execute();
$result3 = $query->fetchall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>

<body>

<header><h1></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>

<div id="container">

    <div class="detail">

        <div class="left">
           
</div>
    </div>

    <div class="right">
        <?php
            foreach ($result3 as $games1){
        ?>

            <h1 style="position: absolute; top: 7px;  display: inline-block;"><?php echo $games1["name"]?>
            </h1>

            <img src="afbeeldingen/<?php echo $games1["image"] ?>"id="img" style="width: 130px; height: 130px;" >
            
            <?php
            echo "<p class='info'> minimaal " . $games1['min_players'] .  " spelers </p>"; 
            echo "<p class='info'> maximaal " . $games1['max_players'] .  " spelers </p>";
            echo "<p class='info'> duurt: " . $games1['play_minutes'] .  " minuten </p>"; 
            echo "<p class='info'> uitleg: " . $games1['explain_minutes'] .  " minuten </p>";
            echo "<p class='info1'> starttijd: ".  $games1['time'];
            echo "<p class='info1'> host: " .   $games1['host'];
            echo "<p class='info1'> players: " . $games1['players'];
            echo "<p class='info1'> expansions: " . $games1['expansions'];
            echo "<p class='info2'> skills: " . $games1['skills'];
            echo "<p class='info2'> url: " . $games1['url'];
            echo "<p class='info2'> " . $games1['youtube'];
            
        } ?>
        </div>
        
            <div id="description1">
                <p><?php echo $games1["description"] ?></p>
            </div>

            <div id="blackline1">

            </div>
        
        
</div>
<footer id="footer1">&copy; Berkan Kaya - 2020</footer>
</body>
</html>