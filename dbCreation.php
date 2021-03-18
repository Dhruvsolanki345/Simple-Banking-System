<?php
$servername = "localhost";
$username = "id16394800_banksystemusername";
$password = "{yAZC[bFZ8Kb@XU{";
$dbname = "id16394800_banksystem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>