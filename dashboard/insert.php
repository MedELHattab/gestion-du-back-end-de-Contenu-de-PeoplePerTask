<?php
include("cnx.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['Email_Address'];
    $phone = $_POST['Phone'];
    $raw_password = $_POST['Hashed_Password'];

    
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);


    $verify_query = mysqli_query($cnx, "SELECT Email_Address FROM users WHERE Email_Address='$email'");

    if (mysqli_num_rows($verify_query) != 0) {
        echo "<div class='message'>
                  <p>This email is already in use. Please try another one.</p>
              </div> <br>";
    } else {
        $stmt = $cnx->prepare("INSERT INTO users(Username, Email_Address, Phone, Hashed_Password) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $phone, $hashed_password);
        $stmt->execute();

    
        if ($stmt->affected_rows > 0) {
            echo "<div class='message'>
                      <p>Registration successful!</p>
                  </div> <br>";
        } else {
            echo "<div class='message'>
                      <p>Error occurred during registration.</p>
                  </div> <br>";
        }

        $stmt->close();
    }
}
?>
