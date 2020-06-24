<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
 
<form action="advanced-2.php" method="post">
    Tekstkleur: <input type="text" name="color"><br>
    Achtergrondkleur: <input type="text" name="backgroundColor"><br>
    Padding <input type="text" name="padding"><br>
    Tabel-border: <input type="text" name="tabelBorder"><br>
    <input type="submit">
</form>




<?php
if(isset($_POST["color"])  isset($_POST["backgroundColor"])  isset($_POST["padding"]) || isset($_POST["tabelBorder"]) ){
    header("advanced-2.php");
}

?>

</body>
</html>