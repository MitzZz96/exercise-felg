<?php

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "felg";

$result_array = array();

$conn = new mysqli($servername, $username, $password, $dbname);

if(!is_null($conn->connect_error)) {
    die("Połączenie nie udane: " . $conn->connect_error);
}

 $sql = "SELECT * FROM user_group";
 $all_groups = $conn->query($sql);

?>