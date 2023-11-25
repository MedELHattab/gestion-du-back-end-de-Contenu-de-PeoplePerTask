<?php
require("cnx.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Comment = mysqli_real_escape_string($cnx, $_POST['Comment']);
    $User_ID = mysqli_real_escape_string($cnx, $_POST['User_ID']);


    $query = "INSERT INTO testimonials (Comment,User_ID) VALUES ('$Comment','$User_ID')";

    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>