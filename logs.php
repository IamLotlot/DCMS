<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/logs.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Logs Page</title>
</head>
<body onload="onStart(); setColors()">
<?php
    include 'nav.php';
?>
    <section>
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

                $sql = "SELECT * FROM `log`";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $position = $row['position'];
                        $service = $row['service'];
                        $dateCreated = $row['dateCreated'];
                        $dateEnd = $row['dateEnd'];
                        $state = $row['state'];

                        echo '
                        <div class="tableContent">
                            <label>'.$name.'</label>
                            <label>'.$position.'</label>
                            <label>'.$service.'</label>
                            <label>'.$dateCreated.'</label>
                            <label>'.$dateEnd.'</label>
                            <label class="'.$state.'" id="state">'.$state.'</label>
                        </div>
                        ';
                    }
                }
            ?>
        <div>
            
        </div>
    </section>
    <script src="js/nav.js"></script>
    <script src="js/logs.js"></script>
</body>
</html>