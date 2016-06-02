<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="own.css" media="screen">
	<title>Foodsharing - Münster</title>
</head>

<body style= "background-image: url('foodsharing_Logo.png');background-repeat: no-repeat; background-position: center center;">
</body>

</html>

<?php

$servername = "localhost";
$username = "admin";
$password = "r00t";
$database = "foodsharing";

$conn = new mysqli($servername, $username, $password, $database);


$ergebnis = mysqli_query($conn, "SELECT kind, timespan, location, pot FROM food");
while($row = mysqli_fetch_object($ergebnis))
{
  echo "<div class=\"cube\">";
  echo "<b>Art des Lebensmittels   </b>"; 
  echo $row->kind;
  echo "<br />";
  echo "<b>geschätzte Nutzungsdauer   </b>";
  echo $row->timespan;
  echo "<br />";
  echo "<b>Ort   </b>";
  echo $row->location;
  echo "<br />";
  echo "<b>idealer Abholzeitpunkt   </b>";
  echo $row->pot;
  echo "<br />";
  echo "<br />";
  echo "</div>";
  
}
	
?>