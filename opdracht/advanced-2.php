<?php
$siem = array("Naam"=>"Siem", "Leeftijd"=>"17", "Klas"=>"9D", "Muziek"=>"Dark Trap", "Fietsmerk"=>"Gazelle", "Woonplaats"=>"Zevenhoven", "Eten"=>"Aardappelen met jus");
?>

<style>
body{
    color: <?php echo $_POST["color"]; ?> ;
    background-color: <?php echo $_POST["backgroundColor"]; ?> ;
}

table, tr, th,td{
    padding: <?php echo $_POST["padding"]; ?> ;
    border: solid black <?php echo $_POST["tabelBorder"]; ?>px ;
    border-collapse: collapse ;

}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>

<?php
foreach ($siem as $genre=>$info){
    echo "<tr>";
    echo "<th>".$genre."</th>";
    echo "<td>".$info."</td>";
    echo "</tr>";
}

?>
</table>



</body>
</html>