<?php
$username = $_POST["username"];
$password = $_POST["password"];



$url = "localhost";
$uname = "root";
$pwd = "";
$db = "login";
$conn = new mysqli($url, $uname, $pwd, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (username, password)
VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
  echo "Registered Successfully";
  header( "Refresh:5; url=index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>