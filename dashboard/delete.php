<?php
require("cnx.php");

if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];

    $query = "DELETE FROM projects WHERE Project_ID = '$project_id'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}
if (isset($_GET['User_ID'])) {
    $User_ID = $_GET['User_ID'];

    $query = "DELETE FROM users WHERE User_ID = '$User_ID'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}

if (isset($_GET['Freelancer_ID'])) {
    $Freelancer_ID = $_GET['Freelancer_ID'];

    $query = "DELETE FROM freelancers WHERE Freelancer_ID = '$Freelancer_ID'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}

if (isset($_GET['Testimonial_ID'])) {
    $Testimonial_ID = $_GET['Testimonial_ID'];

    $query = "DELETE FROM testimonials WHERE Testimonial_ID = '$Testimonial_ID'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}

if (isset($_GET['Categorie_ID'])) {
    $Categorie_ID = $_GET['Categorie_ID'];

    $query = "DELETE FROM categories WHERE Categorie_ID = '$Categorie_ID'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}

if (isset($_GET['SousCategorie_ID'])) {
    $SousCategorie_ID = $_GET['SousCategorie_ID'];

    $query = "DELETE FROM souscategories WHERE SousCategorie_ID = '$SousCategorie_ID'";
    $result = mysqli_query($cnx, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

