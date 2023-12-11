<?php
require("cnx.php");
session_start();

if (!isset($_SESSION["id"])) {
    echo "error: User not logged in";
    exit();
}
$User_ID = $_SESSION["id"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Amount = mysqli_real_escape_string($cnx, $_POST['Amount']);
    $Deadline = mysqli_real_escape_string($cnx, $_POST['Deadline']);
    $Project_ID = mysqli_real_escape_string($cnx, $_POST['Project_ID']);  
    $query = "INSERT INTO 'offers' (Amount, Deadline, Project_ID, User_ID) VALUES ('$Amount', '$Deadline', '$Project_ID', '$User_ID')";

    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($cnx);
    }
} else {
    echo "error: Form not submitted";
}
?>
