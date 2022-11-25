<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");

$result = $mysqli->query("SELECT prenom,nom,naissance,sexe,email FROM etudiants WHERE TIMESTAMPDIFF(YEAR,naissance,CURRENT_DATE) < 18;");

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
</html>