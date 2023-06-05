<?php
include "db_conn.php";

// Add account
if (isset($_POST['addBtn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql1 = "SELECT * FROM `accounts` WHERE `username` = '$username'";
    $sql2 = "SELECT * FROM `accounts` WHERE `email` = '$email'";
    $sql3 = "SELECT * FROM `accounts` WHERE `username` = '$contact'";

    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result1) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Username is already been used");';
        echo 'location.href = "accounts.php";';
        echo '</script>';
    } else if (mysqli_num_rows($result2) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Email is already been used");';
        echo 'location.href = "accounts.php";';
        echo '</script>';
    } else if (mysqli_num_rows($result3) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Contact Number is already been used");';
        echo 'location.href = "accounts.php";';
        echo '</script>';

    } else {

        //Images
        $profile = $_FILES['profileInput'];
        $profile_name = $_FILES['profileInput']['name'];
        $profile_ext = pathinfo($profile_name, PATHINFO_EXTENSION);
        $profile_new_name = $username . "_Profile-Picture." . $profile_ext;

        //Image format or extension

        $profile_ex = pathinfo($profile_name, PATHINFO_EXTENSION);
        $profile_ex_lc = strtolower($profile_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($profile_ex_lc, $allowed_exs)) {
                
            move_uploaded_file($profile["tmp_name"], "documents/Profile/".$profile_new_name);
                        
            $password = $_POST['password'];
            // $passwordEn = password_hash($password, PASSWORD_BCRYPT);
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $yearSection = $_POST['yearSection'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
                
                    $sql = "INSERT INTO `accounts`(`username`, `email`, `password`, `role`, `fullname`, `address`, `contact`, `age`, `sex`, `profilePic`) 
                            VALUES ('$username','$email','$password','user','$fullname','$address','$contact','$age','$sex','$profile_new_name')";
                
                    $result = mysqli_query($conn, $sql);
                
                    echo '<script type="text/javascript">'; 
                    echo 'alert("'.$username.' account registered successfully!");';
                    echo 'window.location.href = "accounts.php";';
                    echo '</script>';
                
                } else {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Profile Picture needs to be in jpg, jpeg or png format");';
                    echo 'window.history.back();';
                    echo '</script>';
                }
            }
}

// Remove account
if (isset($_POST['removeBtn'])){
    
    $username = $_POST['username'];
    
    $sql = "SELECT * FROM `accounts` WHERE `username` = '$username'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $sql2 = "DELETE FROM `accounts` WHERE `username`='$username'";
        
        $result2 = mysqli_query($conn, $sql2);
            
        echo '<script type="text/javascript">'; 
        echo 'alert("'.$username.' account was removed!");';
        echo 'window.location.href = "accounts.php";';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("'.$username.' account is not found");';
        echo 'window.history.back();';
        echo '</script>';
    }


}

// Edit account
if (isset($_POST['editBtn'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
    $sql = "SELECT * FROM `accounts` WHERE `username` = '$username'";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        
        $password = $_POST['password'];
        // $passwordEn = password_hash($password, PASSWORD_BCRYPT);
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
            
        $sql2 = "UPDATE `accounts` SET `password`='$password',`fullname`='$fullname',`address`='$address',`age`='$age',`sex`='$sex' WHERE `username`='$username'";
            
        $result2 = mysqli_query($conn, $sql2);
            
        echo '<script type="text/javascript">'; 
        echo 'alert("'.$username.' account was updated!");';
        echo 'window.location.href = "accounts.php";';
        echo '</script>';
            
    } else {
        echo '<script type="text/javascript">'; 
        echo 'alert("'.$username.' account is not found");';
        echo 'window.history.back();';
        echo '</script>';
    }
}
?>