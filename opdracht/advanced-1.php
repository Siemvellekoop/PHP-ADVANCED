<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
 
<form action="advanced-2.php" method="post">
    Tekstkleur: <label for="color"></label><br>
    <?php 
        $kleuren = array("Red", "Blue", "Green", "Black", "Brown");
        foreach($kleuren as $kleur){
            echo "<input type='checkbox' name='color' value='".$kleur."'>".$kleur."<br>";
        }
    ?>
    Achtergrondkleur: <label for="backgroundColor"><br>
    <?php 
        $kleuren = array("Red", "Blue", "Green", "Black", "Brown");
        foreach($kleuren as $kleur){
            echo "<input type='checkbox' name='backgroundColor' value='".$kleur."'>".$kleur."<br>";
        }
    ?>
    Padding <input type="text" name="padding"><br>
    Tabel-border: <input type="text" name="tabelBorder"><br>
    <input type="submit">
</form>





<?php
if(isset($_POST["color"]) || isset($_POST["backgroundColor"]) || isset($_POST["padding"]) || isset($_POST["tabelBorder"]) ){
    header("advanced-2.php");
}


?>

</body>
</html>