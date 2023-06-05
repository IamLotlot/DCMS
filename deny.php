<?php
include 'db_conn.php';

if(isset($_GET["denyId"])){
    
    $id = $_GET["denyId"];

    $sql = "UPDATE `appointments` SET `state` = 'Denied' WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo '<script type="text/javascript">'; 
        echo 'alert("Denied the '.$id.' appointment.");';
        echo 'window.location.href = "appointments.php";';
        echo '</script>';

    } else {

        die(mysqli_error($conn));
    }
}
?>