<?php
include("cnx.php");
if (isset($_POST['submit']) && isset($username) ) {
    $username = $_POST['username'];
    $email = $_POST['Email_Address'];
    $phone = $_POST['Phone'];
    $password = $_POST['Hashed_Password'];

    // Verifying the unique email
    $verify_query = mysqli_query($cnx, "SELECT Email_Address FROM users WHERE Email_Address='$email'");
    // var_dump($verify_query);
    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                  <p>This email is already in use. Please try another one.</p>
              </div> <br>";
    } else {
        mysqli_query($cnx, "INSERT INTO users(Username, Email_Address, Phone, Hashed_Password) VALUES('$username','$email','$phone','$password')") 
        or die("Error Occurred");

        echo "<div class='message'>
                  <p>Registration successful!</p>
                  
              </div> <br>";
    }

}
?>