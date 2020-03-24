<?php 
error_reporting( E_ERROR | E_WARNING | E_PARSE );
session_start();

?>
 <?php require 'Tools.php';?>
 <?php
if(isset($_POST['btn-put'])){
    echo $_POST['btn-put'];
    $_SESSION["username"] = $_POST['btn-put'];
    echo "   Is added to the session";
    echo "<br>";
    echo "test".$_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php
        echo $moviesObjec;
        echo $pricesObject;
    ?>

    <h1>Exercise 2:Processing POST data:</h1>
    <p>test POST</P>
    <form accept="index.php" method="post">
    <label>User name</label><input name="btn-put" type="text" value="">
    <input type="submit" value="POST">
    </form>
</body>
</html>