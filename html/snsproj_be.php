<?php
//be: Back end (server) work for my sns project.
//This opens the connection between server and web.
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "!!jun01234!!";
$dbName = "snsproj";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>
