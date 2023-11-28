<?php
include('cnx.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM freelancers WHERE Freelancer_ID = $id";
    $result = mysqli_query($cnx, $sql);

    if (!$result) {
        die("Query Failed: " . mysqli_error($cnx));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if (isset($_POST['update_freelancer'])) {
    if (isset($_GET['idnew'])) {
        $idnew = $_GET['idnew'];
    }

    $Freelancer_Name = mysqli_real_escape_string($cnx, $_POST['Freelancer_Name']);
    $Competances = mysqli_real_escape_string($cnx, $_POST['Competances']);
    $User_ID = mysqli_real_escape_string($cnx, $_POST['User_ID']);

    $query = "UPDATE freelancers SET Freelancer_Name = '$Freelancer_Name', Competances = '$Competances', User_ID = '$User_ID'
    WHERE Freelancer_ID = '$idnew'";

    $result = mysqli_query($cnx, $query);

    if (!$result) {
        die("Update Failed: " . mysqli_error($cnx));
    } else {
        header('location: freelancers.php?message=update_success');
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
      <title>edit freelancer</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>

<body>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h3>Edit Freelancer</h3>
            <form action="update_freelancer.php?idnew=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input class="form-control" type="text" name="Freelancer_Name" value="<?php echo $row['Freelancer_Name'] ?>">
                </div>
                <div class="form-group">
                    <label for="first_name">Competances</label>
                    <input class="form-control" type="text" name="Competances" value="<?php echo $row['Competances'] ?>">
                </div>
                <div class="form-group">
                        <label for="Username">User Name:</label>
                       <select name="User_ID" id="#">
                        <?php 
                         $query = "SELECT * from users";
                         $result = mysqli_query($cnx, $query);
                         foreach($result as $res){  ?>
                            <option value="<?php echo $res['User_ID']?>"><?php echo $res['Username']?></option>
                        <?php }?>

                       </select>
                </div>
                <input type="submit" class="btn btn-success" name="update_freelancer" value="Save Change">
            </form>
        </div>
    </div>
</div>


    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Page Script -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>