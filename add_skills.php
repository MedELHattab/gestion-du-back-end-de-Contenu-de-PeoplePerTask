<?php
session_start();
include("./dashboard/cnx.php");

if (!isset($_SESSION["id"])) {
    echo "error: User not logged in";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION["id"];
    $skill = mysqli_real_escape_string($cnx, $_POST["skill"]);

    // Insert the skill into the skills table
    $insertSkillQuery = "INSERT INTO skills (skill) VALUES ('$skill')";
    mysqli_query($cnx, $insertSkillQuery);

    // Get the skill id that was just inserted
    $skillId = mysqli_insert_id($cnx);

    // Insert the relationship into the pivot_skills table
    $insertPivotQuery = "INSERT INTO pivot_skills (skill_id, User_ID) VALUES ($skillId, $userId)";
    mysqli_query($cnx, $insertPivotQuery);
}
?>
