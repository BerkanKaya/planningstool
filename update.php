<?php
    require("functions.php");
    $result2 = AllGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Game</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <a href="index.php" id="back"> Back </a>
    <div id="opmaak">

    </div>

    <form action="index.php" method="post">
        <label><b>Game:</b></label>
        <select name="gameid">
          <?php foreach($result2 as $allgames) {?>
            <option value="<?= $allgames['id'] ?>"><?= $allgames['name'] ?></option>
          <?php } ?>
        </select>
        <input type="submit" value="update" id="dump">

    <label><b>Starttijd:</b></label>
        <input type="time" name="time" id="starttijd">     

    <label><b>Host:</b></label>
        <input type="text" name="host" id="starttijd">     

    <label><b>Spelers:</b></label>
        <input type="text" name="players" id="starttijd">     
    </form>


</div>
<footer>&copy; Berkan Kaya - 2020</footer>
</body>
</html>