<?php
include 'db_conn.php';

if(isset($_GET["acceptId"])){

    $id = $_GET["acceptId"];

    $sql = "UPDATE `appointments` SET `state` = 'Accepted' WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo '<script type="text/javascript">'; 
        echo 'alert("Accepted the '.$id.' appointment.");';
        echo 'window.location.href = "appointments.php";';
        echo '</script>';

    } else {

        die(mysqli_error($conn));
    }
}
?>