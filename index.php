<?php
$servername = "localhost";
$username = "root";
$password = "Son@L1997";
$dbname = "reddrop";
$name = $_POST['username'];
$bloodgroup = $_POST['bloodgroup'];
$units = $_POST['units'];
$xc = $_POST['x_coordinartes'];
$yc = $_POST['y_coordinates'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "INSERT INTO hospital (username, blood_group, units,x_coordinates,y_coordinates)
VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiss",$name,$bloodgroup,$units,$xc,$yc);
$stmt->execute();
echo "New record inserted sucessfully";
}
$conn->close();
?>