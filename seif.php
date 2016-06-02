<?php



if (isset($_POST['kind'])){
	$kind =  $_POST['kind'];
} else {
	$kind = "null";
}

if (isset($_POST['timespan'])){
	$timespan = $_POST['timespan'];
} else {
	$timespan = "null";
}

if (isset($_POST['location'])){
	$location = $_POST['location'];
} else {
	$location = "23";
}

if (isset($_POST['pot'])){
	$pot = $_POST['pot'];
} else {
	$pot = "null";
}

if (isset($_POST['pic'])){
	$pic = $_POST['pic'];
} else {
	$pic = "null";
}

if (isset($_POST['phone'])){
	$phone = $_POST['phone'];
} else {
	$phone= "123456789";
}



$servername = "localhost";
$username = "admin";
$password = "r00t";
$database = "foodsharing";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO food (kind, timespan, location, pot, phone)
VALUES (\"$kind\", \"$timespan\", \"$location\", \"$pot\", \"$phone\")";

if ($conn->query($sql) === TRUE) {
    echo header("Location: listing.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>