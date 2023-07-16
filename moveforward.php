<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


echo "forward";
echo "<br>";

    $sql = "insert into input (forward)
    values('forward')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>