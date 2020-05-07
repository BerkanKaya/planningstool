<?php
    require("functions.php");
    

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $deletegameid = $_POST["deletegameid"];
        if($deletegameid != null){
            deleteCharacter($deletegameid);
        }
        $gameid = $_POST['gameid'];
        $time = $_POST['time'];
        if($time == null){
            $time = "00:00";
        }
        $host = $_POST['host'];
        $players = $_POST['players'];
        $update =  Addall($gameid, $time, $host, $players);
    }
    $result = AllGames();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planningstool</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    
    <header>
        <h1>Games</h1>
    </header>

    <form action="update.php" method="get">
           <input type="hidden" value=<?php $games['id'] ?> name="id">
           <input type="submit" value="UPDATE A GAME" name="id" id="update">
        </form>

    
    <?php
    foreach($result as $games){ 
    ?>
       <div class="opmaak"> 

       <img src="afbeeldingen/<?= $games['image'] ?>">


       <form action="delete.php" method="post">
           <input type="hidden" value=<?php echo $games['id'] ?> name="deleteid">
           <input type="submit" value="DELETE" name="id" id="delete">
        </form>

       </div> 

       <?php 
       echo "<p class='persoon'> minimaal " . $games['min_players'] .  " spelers </p>"; 
       echo "<p class='persoon'> maximaal " . $games['max_players'] .  " spelers </p>";
       echo "<p class='persoon'> duurt: " . $games['play_minutes'] .  " minuten </p>"; 
       echo "<p class='persoon'> uitleg: " . $games['explain_minutes'] .  " minuten </p>";
       echo "<p class='gamename'> <a href='details.php?id={$games['id']}' href='details.php'>" . $games['name']."</a>";
       echo "<p class='names'> starttijd: ".  $games['time'];
       echo "<p class='names'> host: " .   $games['host'];
       echo "<p class='names'> players: " . $games['players'];
       
       
} 
?>
        

<footer id="berkan"> &copy;Berkan Kaya - 2020</footer>
</body>
</html>