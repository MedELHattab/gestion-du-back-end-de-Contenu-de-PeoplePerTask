<?php

include("dashboard/cnx.php");

session_start();

$projectID = isset($_GET['project_id']) ? intval($_GET['project_id']) : null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = isset($_POST['amount']) ? mysqli_real_escape_string($cnx, $_POST['amount']) : null;
    $deadline = isset($_POST['deadline']) ? mysqli_real_escape_string($cnx, $_POST['deadline']) : null;
    $projectID = isset($_POST['project_id']) ? mysqli_real_escape_string($cnx, $_POST['project_id']) : null;
    $userID = isset($_POST['userId']) ? mysqli_real_escape_string($cnx, $_POST['userId']) : null;
    
    if (!empty($amount) && !empty($deadline) && !empty($projectID) && !empty($userID)) {
        $insertQuery = "INSERT INTO offers (Project_ID, Amount, Deadline, User_ID) VALUES ('$projectID', '$amount', '$deadline', '$userID')";
        $insertResult = mysqli_query($cnx, $insertQuery);
    
        if ($insertResult) {
            echo "Offer submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($cnx);
        }
    } else {
        echo "Please fill in all the required fields.";
    }
} else {
    echo "Invalid request.";
}
// echo "Amount: $amount<br>";
// echo "Deadline: $deadline<br>";
// echo "Project ID: $projectID<br>";
// echo "User ID: $userID<br>";

?>