<?php
include "db_conn.php";

if (isset($_POST['signIn'])) {
    
    $username = $_POST['usernameL'];
    $password = $_POST['passwordL'];

    $sql1 = "SELECT * FROM `accounts` WHERE `username` = 'user1'";

    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid username or password!");';
        echo 'location.href = "sign.php";';
        echo '</script>';

    } else {
                
        echo '<script type="text/javascript">';
        echo "localStorage.setItem('onlineUser', '$username');";

        echo 'alert("User detected! Welcome '.$username.'!");';
        echo 'window.location.href = "home.php";';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Sign in failed! Try again later.");';
    echo 'window.location.href = "sign.php";';
    echo '</script>';
}
?>