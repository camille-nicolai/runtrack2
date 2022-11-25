<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");

$result = $mysqli->query("SELECT salles.nom AS Salle_nom, etage.nom AS Etage_nom FROM salles JOIN etage ON salles.id_etage=etage.id;");

$row = $result -> fetch_array(MYSQLI_ASSOC);

echo "<table border='1'><tr>";


foreach ($row as $key => $value)
{
   echo " <th> " . $key . " </th> ";
}
echo "</tr>";
while ($row != NULL)
{
   echo "<tr>";
   foreach ($row as $value)
   {
         echo "<td>" . $value . "</td>";
   }
   echo "</tr>";
   $row = $result -> fetch_array(MYSQLI_ASSOC);
}
echo "</table>";
?>
</body>