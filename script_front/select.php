<?php



header("Access-Control-Allow-Origin: *");




 
$servername = "localhost";
$username = "u481158665_ffa";
$password = "v3p9r3e@59A";
$dbname = "u481158665_ffa";







 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `info_a` WHERE 1 LIMIT 10';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["get_users_nom_complet"] ;
  }
} else {
  echo "0 results";
}
$conn->close();

 
?>