<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/appointments.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Logs Page</title>
</head>
<body onload="onStart(); setColors()">
<?php
    include 'nav.php';
    include 'db_conn.php';
?>
    <section>
        <h1 id="pendingApp">Pending Appointments</h1>
        <div class="tableHeader">
            <label>Name</label>
            <label>Position</label>
            <label>Service</label>
            <label>Date Scheduled</label>
            <label>Date Created</label>
            <label>State</label>
        </div>
        <div class="table">
            <?php

                $sql = "SELECT * FROM `appointments` WHERE `state` = 'Pending'";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $position = $row['position'];
                        $service = $row['service'];
                        $dateCreated = $row['dateTime'];
                        $dateEnd = $row['date'];

                        echo '
                        <div class="tableContent">
                            <label style="display:none">'.$id.'</label>
                            <label>'.$name.'</label>
                            <label>'.$position.'</label>
                            <label>'.$service.'</label>
                            <label>'.$dateCreated.'</label>
                            <label>'.$dateEnd.'</label>
                            <div>
                                <button class="buttons" id="acceptBtn"><a id="acceptLabel" href="accept.php?acceptId='.$id.'">Accept</a></button>
                                <button class="buttons" id="denyBtn"><a id="denyLabel" href="deny.php?denyId='.$id.'"">Deny</a></button>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
        <div>
            
        </div>
    </section>
    <section>
        <h1 id="onProgressApp">On Progress Appointments</h1>
        <div class="tableHeader">
            <label>Name</label>
            <label>Position</label>
            <label>Service</label>
            <label>Date Scheduled</label>
            <label>Date Created</label>
            <label>State</label>
        </div>
        <div class="table">
            <?php

                $sql = "SELECT * FROM `appointments` WHERE `state` = 'Accepted'";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $position = $row['position'];
                        $service = $row['service'];
                        $dateCreated = $row['dateTime'];
                        $dateEnd = $row['date'];

                        echo '
                        <div class="tableContent">
                            <label style="display:none">'.$id.'</label>
                            <label>'.$name.'</label>
                            <label>'.$position.'</label>
                            <label>'.$service.'</label>
                            <label>'.$dateCreated.'</label>
                            <label>'.$dateEnd.'</label>
                            <div>
                                <button class="buttons" id="successBtn"><a id="successLabel" href="success.php?successId='.$id.'">Success</a></button>
                                <button class="buttons" id="failedBtn"><a id="failedLabel" href="failed.php?failedId='.$id.'"">Failed</a></button>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
        <div>
            
        </div>
    </section>
    <script src="js/nav.js"></script>
    <script src="js/appointments.js"></script>
</body>
</html>