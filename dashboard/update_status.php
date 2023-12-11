<?php
include("cnx.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $offerId = $_POST["offerId"];
    $action = $_POST["action"];

    $updateQuery = "UPDATE `offers` SET `etat` = '$action' WHERE `Offer_ID` = $offerId";
    $result = mysqli_query($cnx, $updateQuery);

    if ($result) {
        echo "success";
    } else {
        echo "error: " . mysqli_error($cnx); 
    }
}
?>