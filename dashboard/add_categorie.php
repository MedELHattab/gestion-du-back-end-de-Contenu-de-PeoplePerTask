<?php
require("cnx.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Categorie_Name = mysqli_real_escape_string($cnx, $_POST['Categorie_Name']);
    
    $query = "INSERT INTO categories (Categorie_Name) VALUES ('$Categorie_Name')";

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