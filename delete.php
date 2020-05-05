<?php
    require("functions.php");

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
        <label><b></b></label>
        <input type="hidden" value=<?php echo $_POST['deleteid'] ?> name="deletegameid">
        <label><b>Weet u het zeker?</b></label>

        <input type="submit" value="DELETE" name="id" id="delete1">
    </form>

    <form action="index.php">
        <input type="submit" value="NEE" name="no" id="no"> 
    </form

    

</div>
<footer>&copy; Berkan Kaya - 2020</footer>
</body>
</html>