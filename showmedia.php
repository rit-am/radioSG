<?php
$dbname = "dbicecast";

// Create connection
$conn = new mysqli(ini_get("mysqli.default_host"), ini_get("mysqli.default_user"), ini_get("mysqli.default_pw"), $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT track_name, track_description, artist_name, track_category, filename FROM table_media";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Track Name</th><th>Trck Description</th><th>Artist</th><th>Category</th><th>Filename</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["track_name"]."</td><td>".$row["track_description"]."</td><td>".$row["artist_name"]."</td><td>".$row["track_category"]."</td><td>".$row["filename"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
