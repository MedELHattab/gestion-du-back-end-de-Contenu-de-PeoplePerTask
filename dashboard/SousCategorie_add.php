<?php
require("cnx.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Categorie_Name = mysqli_real_escape_string($cnx, $_POST['SousCategorie_Name']);
    $Categorie_ID = mysqli_real_escape_string($cnx, $_POST['Categorie_ID']);
    
    $query = "INSERT INTO souscategories (SousCategorie_Name,Categorie_ID) VALUES ('$SousCategorie_Name','$Categorie_ID')";

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