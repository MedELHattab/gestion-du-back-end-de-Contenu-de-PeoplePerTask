<?php
include('cnx.php');

if(isset($_GET['id'])){ 
    $id = $_GET['id'];

    $sql = "select * from categories where Categorie_ID = '$id'";
    $result = mysqli_query($cnx, $sql);

    if(!$result){
            die("query Failed".mysqli_error());
    }
    else {
        $row = mysqli_fetch_assoc($result);

    }
}
?>

<?php
if(isset($_POST['update_categorie']))
{

    if(isset($_GET['idnew'])){ 
        $idnew = $_GET['idnew'];
    }


   
    $Categorie_Name = $_POST['Categorie_Name'];
    



    $query = "UPDATE categories SET  Categorie_Name = '$Categorie_Name'
    WHERE Categorie_ID = '$idnew'";

$result = mysqli_query($cnx, $query);


if(!$result){
    die("deleted faild".mysqli_error());
}
else{
    header('location:freelancers.php? your update is  successfuly');
}
}

?>

<!doctype html>
<html lang="en">
<head>
      <title>edit categorie</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>

<body>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <h3>Edit Categorie</h3>
            <form action="update_categorie.php?idnew=<?php echo $id;?>" method="post" id="form">
                <div class="form-group">
                    <label for="Categorie_Name">Categorie_Name</label>
                    <input class="form-control" type="text" name="Categorie_Name" value="<?php echo $row['Categorie_Name'] ?>">
                </div>
                <input type="submit" class="btn btn-success" name="update_categorie" value="Save Change">
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