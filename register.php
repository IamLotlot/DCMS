<?php
include "db_conn.php";

if (isset($_POST['signUp'])) {
    
    $username = $_POST['usernameR'];
    $email = $_POST['emailR'];
    $password = $_POST['passwordR'];

    $sql1 = "SELECT * FROM `accounts` WHERE `username` = '$username'";
    $sql2 = "SELECT * FROM `accounts` WHERE `email` = '$email'";

    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result1) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Username '.$username.' is already been used");';
        echo 'location.href = "sign.php#registerLabel";';
        echo '</script>';

    } else if (mysqli_num_rows($result2) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Email '.$email.' is already been used");';
        echo 'location.href = "sign.php#registerLabel";';
        echo '</script>';

    } else {

        $sql = "INSERT INTO `accounts`(`username`, `email`, `password`, `role`) 
                            VALUES ('$username','$email','$password','user')";
                
        $result = mysqli_query($conn, $sql);
                
        echo '<script type="text/javascript">'; 
        echo 'alert("'.$username.' account registered successfully!");';
        echo 'window.location.href = "sign.php#loginLabel";';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Creating an account failed! Try again later.");';
    echo 'window.location.href = "sign.php";';
    echo '</script>';
}
?>