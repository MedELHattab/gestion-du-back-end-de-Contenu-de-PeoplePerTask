<?php
include('cnx.php');

if(isset($_GET['id'])){ 
    $id = $_GET['id'];

    $sql = "select * from projects where Project_ID = '$id'";
    $result = mysqli_query($cnx, $sql);

    if(!$result){
            die("query Failed".mysali_error());
    }
    else {
        $row = mysqli_fetch_assoc($result);

    }
}
?>

<?php
if(isset($_POST['update_project']))
{

    if(isset($_GET['idnew'])){ 
        $idnew = $_GET['idnew'];
    }


    $Title = $_POST['Title'];
    $Project_Description = $_POST['Project_Description'];
    $Categorie_ID = $_POST['Categorie_ID'];
    $SousCategorie_ID = $_POST['SousCategorie_ID'];
    $User_ID = $_POST['User_ID'];



    $query = "UPDATE projects SET  Title = '$Title', Project_Description = '$Project_Description', Categorie_ID = '$Categorie_ID', SousCategorie_ID = '$SousCategorie_ID', User_ID = '$User_ID'
    WHERE Project_ID = '$idnew'";

$result = mysqli_query($cnx, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:projects.php? your update is  successfuly');
}
}

?>

<!doctype html>
<html lang="en">
<head>
      <title>edit project</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>

<body>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h3>Edit Project</h3>
            <form action="update_project.php?idnew=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="name">Title</label>
                    <input class="form-control" type="text" name="Title" value="<?php echo $row['Title'] ?>">
                </div>
                <div class="form-group">
                    <label for="Project_Description">Project_Description</label>
                    <input class="form-control" type="text" name="Project_Description" value="<?php echo $row['Project_Description'] ?>">
                </div>
                <div class="form-group">
                        <label for="Categorie_Name">Categorie_Name:</label>
                       <select name="Categorie_ID" id="#">
                        <?php 
                         $query = "SELECT * from categories";
                         $result = mysqli_query($cnx, $query);
                         foreach($result as $res){  ?>
                            <option value="<?php echo $res['Categorie_ID']?>"><?php echo $res['Categorie_Name']?></option>
                        <?php }?>

                       </select>
                </div>
                
                <div class="form-group">
                        <label for="SousCategorie_Name">SousCategorie_Name:</label>
                       <select name="SousCategorie_ID" id="#">
                        <?php 
                         $query = "SELECT * from souscategories";
                         $result = mysqli_query($cnx, $query);
                         foreach($result as $res){  ?>
                            <option value="<?php echo $res['SousCategorie_ID']?>"><?php echo $res['SousCategorie_Name']?></option>
                        <?php }?>

                       </select>
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
                <input type="submit" class="btn btn-success" name="update_project" value="Save Change">
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