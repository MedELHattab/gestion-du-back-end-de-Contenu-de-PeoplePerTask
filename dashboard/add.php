<?php
require("cnx.php");

// add project
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($cnx, $_POST['title']);
    $description = mysqli_real_escape_string($cnx, $_POST['description']);
    $Categorie_ID = mysqli_real_escape_string($cnx, $_POST['Categorie_ID']);
    $SousCategorie_ID = mysqli_real_escape_string($cnx, $_POST['SousCategorie_ID']);
    $User_ID = mysqli_real_escape_string($cnx, $_POST['User_ID']);


    $query = "INSERT INTO projects (Title, Project_Description, Categorie_ID, SousCategorie_ID, User_ID) VALUES ('$title', '$description', '$Categorie_ID', '$SousCategorie_ID', '$User_ID')";

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
