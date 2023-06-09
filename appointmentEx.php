<?php
session_start();

include "db_conn.php";

    $service = "";
    $dataID = "";

    if(isset($_POST['service'])){
        $selectedServices = $_POST['service'];
      
        $service = implode(", ", $selectedServices);
    }

    $date = date('M-d-Y', strtotime('now'));

    $dateID = $_POST['dateID'];

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $mName = $_POST['mName'];
    $name = $fName . " " . $mName . " " . $lName;

    $dateTime = $_POST['dateTime'];
    $position = $_POST['position'];

    if (empty($fName)) {

        echo '<script type="text/javascript">';
        echo 'alert("First name is empty!");';
        echo 'window.history.back();';
        echo '</script>';

    } else if (empty($lName)) {

        echo '<script type="text/javascript">';
        echo 'alert("Last name is empty!");';
        echo 'window.history.back();';
        echo '</script>';

    } else if (empty($mName)) {

        echo '<script type="text/javascript">';
        echo 'alert("Middle name is empty!");';
        echo 'window.history.back();';
        echo '</script>';

    } else if (empty($dateTime)) {

        echo '<script type="text/javascript">';
        echo 'alert("Date and time is empty!");';
        echo 'window.history.back();';
        echo '</script>';

    } else if (empty($position)) {

        echo '<script type="text/javascript">';
        echo 'alert("Position is empty!");';
        echo 'window.history.back();';
        echo '</script>';

    } else {

        $sql = "INSERT INTO `appointments`(`id`,`name`, `position`, `service`, `dateTime`, `date`, `state`) 
                VALUES ('$dateID','$name','$position','$service','$dateTime','$date','Pending')";

        $result = mysqli_query($conn, $sql);
        
        unset($_SESSION['month']);
        unset($_SESSION['day']);
        unset($_SESSION['year']);
        unset($_SESSION['week']);
        unset($_SESSION['service']);

        echo '<script type="text/javascript">'; 
        echo 'alert("Successfully created an appointment!");';
        echo 'window.location.href = "appointment.php";';
        echo '</script>';
    }
?>