<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peoplepertask";

$cnx = mysqli_connect($servername, $username, $password, $dbname);


if (!$cnx) {
    die("Connection failed: " . mysqli_connect_error());
}