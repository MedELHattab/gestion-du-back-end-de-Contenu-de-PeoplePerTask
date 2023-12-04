<?php
session_start();
include("cnx.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($cnx, $_POST['Email']);
    $password = $_POST['Hashed_Password'];

    $result = mysqli_query($cnx, "SELECT * FROM users WHERE Email_Address = '$email'") or die("Select Error");

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['Hashed_Password'])) {
            if ($row['role'] == 'admin') {
                $_SESSION['valid'] = $row['Email_Address'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['Phone'] = $row['Phone'];
                $_SESSION['id'] = $row['User_ID'];
                setcookie('user_id', $row['User_ID'], time() + (86400 * 30), "/");
                header("Location: dashboard.php");
                exit();
            } elseif ($row['role'] == 'freelancer') {
                $_SESSION['valid'] = $row['Email_Address'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['Phone'] = $row['Phone'];
                $_SESSION['id'] = $row['User_ID'];
                setcookie('user_id', $row['User_ID'], time() + (86400 * 30), "/");
                header("Location: card.php");
                exit();
            } else {
                header("Location: ../index.php");
            }
        } else {
            echo "<div class='message'>
                      <p>Wrong Password</p>
                  </div> <br>";
            echo "<a href='../index.php'><button class='btn'>Go Back</button></a>";
        }
    } else {
        echo "<div class='message'>
                  <p>User not found</p>
              </div> <br>";
        echo "<a href='../index.php'><button class='btn'>Go Back</button></a>";
    }
}
?>