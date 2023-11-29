<?php
session_start();
include("cnx.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($cnx, $_POST['Email']);
    $password = mysqli_real_escape_string($cnx, $_POST['Hashed_Password']);

    $result = mysqli_query($cnx,"SELECT * FROM users WHERE Email_Address='$email' AND Hashed_Password ='$password' ") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    
    if(is_array($row) && !empty($row)){
        $_SESSION['valid'] = $row['Email'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['Phone'] = $row['Phone'];
        $_SESSION['id'] = $row['User_ID'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<div class='message'>
                  <p>Wrong Username or Password</p>
              </div> <br>";
        echo "<a href='../index.html'><button class='btn'>Go Back</button></a>";
    }
}
?>
