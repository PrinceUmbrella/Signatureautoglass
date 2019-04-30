<?php
DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', '314159265');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'autoglass');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}

echo 'Connected Successfully';

// $mysqli->close();

 ?>
