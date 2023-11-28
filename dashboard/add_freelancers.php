<?php
require("cnx.php");

// add freelancer
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Freelancer_Name = mysqli_real_escape_string($cnx, $_POST['Freelancer_Name']);
    $Competances = mysqli_real_escape_string($cnx, $_POST['Competances']);
    $User_ID = mysqli_real_escape_string($cnx, $_POST['User_ID']);
    
    $query = "INSERT INTO freelancers (Freelancer_Name, Competances, User_ID) VALUES ('$Freelancer_Name', '$Competances', '$User_ID')";

    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($cnx);
    }
} else {
    echo "error";
}
?>
