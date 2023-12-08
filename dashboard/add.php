<?php
require("cnx.php");

// Add project and tags
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($cnx, $_POST['title']);
    $description = mysqli_real_escape_string($cnx, $_POST['description']);
    $Categorie_ID = mysqli_real_escape_string($cnx, $_POST['Categorie_ID']);
    $SousCategorie_ID = mysqli_real_escape_string($cnx, $_POST['SousCategorie_ID']);
    $User_ID = mysqli_real_escape_string($cnx, $_POST['User_ID']);
    $tags = isset($_POST['tags']) ? explode(",", $_POST['tags']) : [];

    
    $query = "INSERT INTO projects (Title, Project_Description, Categorie_ID, SousCategorie_ID, User_ID) VALUES ('$title', '$description', '$Categorie_ID', '$SousCategorie_ID', '$User_ID')";
    $result = mysqli_query($cnx, $query);

    if ($result) {
       
        $projectID = mysqli_insert_id($cnx);


        foreach ($tags as $tag) {
            $tag = mysqli_real_escape_string($cnx, trim($tag));

           
            $checkTagQuery = "SELECT id FROM tags WHERE tag = '$tag'";
            $checkTagResult = mysqli_query($cnx, $checkTagQuery);

            if (mysqli_num_rows($checkTagResult) == 0) {
              
                $insertTagQuery = "INSERT INTO tags (tag) VALUES ('$tag')";
                mysqli_query($cnx, $insertTagQuery);
                $tagID = mysqli_insert_id($cnx);
            } else {
              
                $tagID = mysqli_fetch_assoc($checkTagResult)['id'];
            }


            $insertPivotQuery = "INSERT INTO pivot_tags (tag_id, Project_ID) VALUES ('$tagID', '$projectID')";
            mysqli_query($cnx, $insertPivotQuery);
        }

        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
