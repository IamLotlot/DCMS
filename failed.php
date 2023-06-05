<?php
include 'db_conn.php';

if(isset($_GET["failedId"])){

    $id = $_GET["failedId"];

    $dateEnd = date('M-d-Y', strtotime('now'));

    $sql = "INSERT INTO `log` (`name`, `position`, `service`, `dateCreated`, `dateEnd`, `state`) 
            SELECT `name`,`position`,`service`,`date`,'$dateEnd','Failed' 
            FROM `appointments` 
            WHERE `id` = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $sql2 = "DELETE FROM `appointments` WHERE `id` = '$id'";

        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {

            echo '<script type="text/javascript">'; 
            echo 'alert("Appointment id ('.$id.') operation failed and moved to logs!");';
            echo 'window.location.href = "appointments.php";';
            echo '</script>';

        } else {

        die(mysqli_error($conn));
        }

    } else {

        die(mysqli_error($conn));
    }
}
?>