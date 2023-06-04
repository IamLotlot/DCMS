<?php
include "db_conn.php";

if (isset($_POST['signIn'])) {
    
    $username = $_POST['usernameL'];
    $password = $_POST['passwordL'];
    
    $sql = "SELECT * FROM `accounts` WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row["role"]=="admin") {

        echo '<script type="text/javascript">'; 
        echo 'alert("Admin Detected. Greetings '.$username.'!");';

        //Store online username in local storage
        echo "localStorage.setItem('onlineUser', '$username');";

        echo 'window.location.href = "home.php";</script>';

    } else if ($row["role"]=="user") {
        //Store online username in session
        $_SESSION['onlineUser'] = $username;
        
	    echo '<script type="text/javascript">'; 
	    echo 'alert("User Detected. Greetings '.$username.'!");';


        //Store online username in local storage
        echo "localStorage.setItem('onlineUser', '$username');";

	    echo 'window.location.href = "home.php";';
	    echo '</script>';
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Username or password is incorrect!");';
        echo 'window.history.back();';
        echo '</script>';
    }
} else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Sign in failed! Try again later.");';
    echo 'window.location.href = "sign.php";';
    echo '</script>';
}
?>