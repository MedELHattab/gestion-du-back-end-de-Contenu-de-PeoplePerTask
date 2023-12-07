<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location:../sign.php");
    exit();
}

include("cnx.php");

// Assuming your users table has a 'role' column
$userId = $_SESSION["id"];
$query = "SELECT * FROM users WHERE User_ID = $userId";
$result = mysqli_query($cnx, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);

    // Check if the user has admin or visitor role
    if ($user['role'] == 'admin' || $user['role'] == 'visitor') {
        // Assuming 'project_id' is the specific project identifier
        $projectId = $_GET['project_id']; // You should validate and sanitize this input

        // Retrieve freelancers for the specific project
        $freelancerQuery = "SELECT * FROM users WHERE role = 'freelancer' AND project_id = $projectId";
        $freelancerResult = mysqli_query($cnx, $freelancerQuery);

        // Display information about freelancers
        while ($freelancer = mysqli_fetch_assoc($freelancerResult)) {
            echo "Freelancer ID: " . $freelancer['User_ID'] . "<br>";
            echo "Freelancer Name: " . $freelancer['username'] . "<br>";
            // Add more information as needed
            echo "<hr>";
        }
    } else {
        echo "You don't have permission to view freelancers.";
    }
} else {
    echo "Error fetching user data.";
}
?>


<table class="agent table align-middle bg-white">

          <thead class="bg-light">
            <tr>
              <th>Freelancer_ID</th>
              <th>Freelancer_Name</th>
              <th>Competances</th>
              <!-- <th>Username</th> -->
              <th>assign</th>
              <!-- <th>Delete</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $query = $freelancerQuery = "SELECT * FROM users WHERE role = 'freelancer'";
            $result = mysqli_query($cnx, $query);
            if(!$result) {
              die("query faild".mysqli_error());
            } else {
              while($row = mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                  <td>
                    <?php echo $row['User_ID']; ?>
                  </td>
                  <td>
                    <?php echo $row['Username']; ?>
                  </td>
                  <td>
                    <?php echo $row['Competances']; ?>
                  </td>
                  <td>
                    <?php echo $row['Username']; ?>
                  </td>

                  <td><a href="update_freelancer.php?id=<?php echo $row['Freelancer_ID']; ?>" class="btn btn-info">Update</a>
                  </td>
                  <!-- <td><a href="#" class="btn btn-danger">Delete</a></td> -->
                </tr>
                <?php
              }
            }

            ?>

          </tbody>
        </table>