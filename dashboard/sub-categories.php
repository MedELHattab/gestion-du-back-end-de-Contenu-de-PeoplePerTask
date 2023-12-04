<?php
require("cnx.php");
session_start();
if (isset($_SESSION["id"])) {
  unset($_SESSION['id']); 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="side">
            <div class="h-100">
                <div class="sidebar_logo d-flex align-items-end">
                <img src="img/PeoplePerTask.png" alt="logo" style="width: 75%;">
                    <img class="close align-self-start" src="img/close.svg" alt="">
                </div>

                <ul class="sidebar_nav">
                    <li class="sidebar_item " style="width: 100%;">
                        <a href="dashboard.php" class="sidebar_link"> <img src="img/1. overview.svg"
                                alt="">Overview</a>
                    </li>
                    <li class="sidebar_item ">
                        <a href="users.php" class="sidebar_link"> <img src="img/agents.svg" alt="">Users</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="freelancers.php" class="sidebar_link"> <img src="img/task.svg" alt="">Freelancers</a>
                    </li>
                    <li class="sidebar_item">
                        <a href="testimonials.php" class="sidebar_link"><img src="img/agent.svg" alt="">Testimonials</a>
                    </li>
                    <li class="sidebar_item ">
                        <a href="categories.php" class="sidebar_link"><img src="img/agent.svg" alt="">Categories</a>
                    </li>
                    <li class="sidebar_item active">
                        <a href="sub-categories.php" class="sidebar_link"><img src="img/articles.svg" alt="">Sub-categories</a>
                    </li>
                    <li class="sidebar_item ">
                        <a href="projects.php" class="sidebar_link"><img src="img/articles.svg" alt="">projects</a>
                    </li>

                </ul>
                <div class="line"></div>
                <a href="#" class="sidebar_link"><img src="img/settings.svg" alt="">Settings</a>


            </div>
        </aside>
        <div class="main">
            <nav class="navbar justify-content-space-between pe-4 ps-2">
                <button class="btn open">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar  gap-4">
                    <div class="">
                        <input type="search" class="search " placeholder="Search">
                        <img class="search_icon" src="img/search.svg" alt="iconicon">
                    </div>
                    <!-- <img src="img/search.svg" alt="icon"> -->
                    <img class="notification" src="img/new.svg" alt="icon">
                    <div class="card new w-auto">
                        <div class="list-group list-group-light">
                            <div class="list-group-item px-3 d-flex justify-content-between align-items-center ">
                                <p class="mt-auto">Notification</p><a href="#"><img src="img/settingsno.svg"
                                        alt="icon"></a>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and
                                        make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1 day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 d-flex"><img src="img/notif.svg" alt="iconimage">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and
                                        make up
                                        the bulk of the card's content.</p>
                                    <small class="card-text">1 day ago</small>
                                </div>
                            </div>
                            <div class="list-group-item px-3 text-center"><a href="#">View all notifications</a></div>
                        </div>
                    </div>
                    <div class="inline"></div>
                    <div class="name">lahcen Admin</div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                                <img src="img/photo_admin.svg" alt="icon">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <a class="dropdown-item" href="/PeoplePerTask/project/pages/index.html">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>



            <section class="Agents px-4">
            <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#addsouscategoriesModal">
    Add souscategories
</button>
<div class="modal fade" id="addsouscategoriesModal" tabindex="-1" aria-labelledby="addsouscategoriesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addsouscategoriesModalLabel">Add New souscategories</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addsouscategoriesForm">
                <div class="mb-3">
                        <label for="SousCategorie_Name" class="form-label">SousCategorie_Name</label>
                        <input type="text" class="form-control" id="SousCategorie_Name" name="SousCategorie_Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Categorie_ID" class="form-label">Categorie_ID</label>
                        <input type="text" class="form-control" id="Categorie_ID" name="Categorie_ID" required>
                    </div>    
                    <button type="submit" class="btn btn-primary">Add souscategories</button>
                </form>
            </div>
        </div>
    </div>
</div>
                <table class="agent table align-middle bg-white">

                    <thead class="bg-light">
                        <tr>
                            <th>SousCategorie_ID</th>
                            <th>SousCategorie_Name</th>  
                            <th>Categorie_Name</th> 
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT souscategories.*, C.Categorie_Name FROM souscategories INNER JOIN categories C ON souscategories.Categorie_ID = C.Categorie_ID";
                        $result = mysqli_query($cnx, $query);
                        if (!$result) {
                            die("query faild" . mysqli_error());
                        } else {
                            while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['SousCategorie_ID']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['SousCategorie_Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Categorie_Name']; ?>
                                    </td>
                                    <td><a href="#" class="btn btn-success">Update</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>


            </section>
            
    <script>
$(document).ready(function () {
$(".btn-danger").click(function () {
var SousCategorie_ID = $(this).closest("tr").find("td:first-child").text();

        $.ajax({
            url: "delete.php",
            type: "GET",
            data: { SousCategorie_ID: SousCategorie_ID },
            success: function (response) {
                if (response === "success") {
                    
                    location.reload();
                } else {
                    alert("Error deleting Categorie");
                }
            }
        });
    });
});
</script>
<script>
$(document).ready(function () {
    // Handle form submission
    $("#addsouscategoriesForm").submit(function (e) {
        e.preventDefault();

        // Get form data
        var formData = $(this).serialize();

        // Send AJAX request to add_project.php
        $.ajax({
            url: "SousCategorie_add.php",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response === "success") {
                    // Refresh the page or update the table as needed
                    location.reload();
                } else {
                    alert("Error adding souscategories");
                }
            }
        });
    });
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="agents.js"></script>
</body>

</html>