<?php

include("dashboard/cnx.php");

session_start();
isset($_SESSION["id"]);
$userId = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$projectID = isset($_GET['project_id']) ? intval($_GET['project_id']) : null;

if ($projectID === null || !is_numeric($projectID)) {
    die("Invalid project ID");
}

$query = "SELECT projects.*,categories.Categorie_Name FROM projects 
INNER JOIN categories ON projects.Categorie_ID = categories.Categorie_ID
WHERE Project_ID = $projectID";
$result = mysqli_query($cnx, $query);
if (!$result) {
    die("Error in query: " . mysqli_error($cnx));
}

$project = mysqli_fetch_assoc($result);

$queryOffers = "SELECT * FROM offers WHERE Project_ID = $projectID";
$resultOffers = mysqli_query($cnx, $queryOffers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Project Details</title>
</head>
<body>

<div class="container mt-5">
    <?php if ($project) { ?>
        <h2 class="text-center mb-4"><?= $project['Title'] ?></h2>
        <p><strong>Description:</strong> <?= $project['Project_Description'] ?></p>
        <p><strong>Category:</strong> <?= $project['Categorie_Name'] ?></p>
        <p><strong>Status:</strong> <?= $project['condition'] ?></p>

        <hr>

        <h4 class="mb-3">Offers:</h4>
        <?php while ($offer = mysqli_fetch_assoc($resultOffers)) { ?>
            <p><strong>Amount:</strong> $<?= $offer['Amount'] ?> | <strong>Deadline:</strong> <?= $offer['Deadline'] ?></p>
            
        <?php } ?>

        <hr>

        <form action="handling_offer.php" method="post">
            <h4 class="mb-3">Submit Offer</h4>
            <div class="form-group">
                <label for="amount">Offer Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
            </div>

            <input type="hidden" name="userId" value="<?= $userId ?>">
            <input type="hidden" name="project_id" value="<?= $projectID ?>">
            <button type="submit" class="btn btn-primary">Submit Offer</button>
        </form>
    <?php } else { ?>
        <p>Project not found.</p>
    <?php } ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

