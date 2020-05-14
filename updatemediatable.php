<?php
echo "Received data on Srver";
echo $_POST['TrackName'] . " " .  $_POST['TrackDescription']. " " .  $_POST['Category']. " " .  $_POST['Artist']. " " .  $_POST['Phone']. " " .  $_POST['File'];
echo "Processing Data";

$dbname = "dbicecast";

// Create connection
$conn = new mysqli(ini_get("mysqli.default_host"), ini_get("mysqli.default_user"), ini_get("mysqli.default_pw"), $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO table_media (artist_name, artist_phone, track_name, track_description, track_category, filename)
VALUES ('$_POST[Artist]','$_POST[Phone]','$_POST[TrackName]','$_POST[TrackDescription]','$_POST[Category]','$_POST[File]')";



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
