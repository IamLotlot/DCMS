<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/appointment.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Appointment Page</title>
</head>
<body onload="onStart(); getCurrentDay(); cancelApp(); setColors(); reservedDates()">
<?php
    include 'nav.php';
    include 'db_conn.php';

    $sql = "SELECT `id` FROM `appointments` WHERE `state` = 'Accepted'";
	
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {

			$id = $row['id'];

            echo '
				<input type="text" class="reservedDate" value="'.$id.'" style="display:none" disabled>
                ';
		}
	}
?>
    <section class="first">
        <div class="calendar">
            <div class="weekHeader">
                <div class="sideHeader">
                    <label id="month"></label>
                    <label id="day"></label>
                    <label id="year"></label>
                </div>
                <div class="centerHeader">
                    <i class="fa-solid fa-chevron-left" id="lastLeftIcon" style="display:none"></i>
                    <i class="fa-solid fa-chevron-left" id="leftIcon" style="visibility:hidden"></i>
                    <h1 id="weekLabel">This Week</h1>
                    <i class="fa-solid fa-chevron-right" id="rightIcon"></i>
                    <i class="fa-solid fa-chevron-right" id="lastRightIcon" style="display:none"></i>
                </div>
                <div class="sideHeader">
                    
                </div>
            </div>
            <div>
                <div class="calendarCon">
                    <label class="timeLabel">Time</label>
                    <label class="week" id="monLabel" data-info1="">Mon</label>
                    <label class="week" id="tueLabel" data-info1="">Tue</label>
                    <label class="week" id="wedLabel" data-info1="">Wed</label>
                    <label class="week" id="thuLabel" data-info1="">Thu</label>
                    <label class="week" id="friLabel" data-info1="">Fri</label>
                    <label class="week" id="satLabel" data-info1="">Sat</label>
                </div>
                <div class="calendarCon">
                    <label class="time">9AM-10AM</label>
                    <label class="slots" id="mo9" name="mon" data-info1="Monday 9AM-10AM" data-info2="mo9">Available</label>
                    <label class="slots" id="tu9" name="tue" data-info1="Tuesday 9AM-10AM" data-info2="tu9">Available</label>
                    <label class="slots" id="we9" name="wed" data-info1="Wednesday 9AM-10AM" data-info2="we9">Available</label>
                    <label class="slots" id="th9" name="thu" data-info1="Thursday 9AM-10AM" data-info2="th9">Available</label>
                    <label class="slots" id="fr9" name="fri" data-info1="Friday 9AM-10AM" data-info2="fr9">Available</label>
                    <label class="slots" id="sa9" name="sat" data-info1="Saturday 9AM-10AM" data-info2="sa9">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">10AM-11AM</label>
                    <label class="slots" id="mo10" name="mon" data-info1="Monday 10AM-11AM" data-info2="mo10">Available</label>
                    <label class="slots" id="tu10" name="tue" data-info1="Tuesday 10AM-11AM" data-info2="tu10">Available</label>
                    <label class="slots" id="we10" name="wed" data-info1="Wednesday 10AM-11AM" data-info2="we10">Available</label>
                    <label class="slots" id="th10" name="thu" data-info1="Thursday 10AM-11AM" data-info2="th10">Available</label>
                    <label class="slots" id="fr10" name="fri" data-info1="Friday 10AM-11AM" data-info2="fr10">Available</label>
                    <label class="slots" id="sa10" name="sat" data-info1="Saturday 10AM-11AM" data-info2="sa10">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">11AM-12PM</label>
                    <label class="slots" id="mo11" name="mon" data-info1="Monday 11AM-12PM" data-info2="mo11">Available</label>
                    <label class="slots" id="tu11" name="tue" data-info1="Tuesday 11AM-12PM" data-info2="tu11">Available</label>
                    <label class="slots" id="we11" name="wed" data-info1="Wednesday 11AM-12PM" data-info2="we11">Available</label>
                    <label class="slots" id="th11" name="thu" data-info1="Thursday 11AM-12PM" data-info2="th11">Available</label>
                    <label class="slots" id="fr11" name="fri" data-info1="Friday 11AM-12PM" data-info2="fr11">Available</label>
                    <label class="slots" id="sa11" name="sat" data-info1="Saturday 11AM-12PM" data-info2="sa11">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">12PM-1PM</label>
                    <label class="slots" id="mo12" name="mon" data-info1="Monday 12PM-1PM" data-info2="mo12">Available</label>
                    <label class="slots" id="tu12" name="tue" data-info1="Tuesday 12PM-1PM" data-info2="tu12">Available</label>
                    <label class="slots" id="we12" name="wed" data-info1="Wednesday 12PM-1PM" data-info2="we12">Available</label>
                    <label class="slots" id="th12" name="thu" data-info1="Thursday 12PM-1PM" data-info2="th12">Available</label>
                    <label class="slots" id="fr12" name="fri" data-info1="Friday 12PM-1PM" data-info2="fr12">Available</label>
                    <label class="slots" id="sa12" name="sat" data-info1="Saturday 12PM-1PM" data-info2="sa12">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">1PM-2PM</label>
                    <label class="slots" id="mo1" name="mon" data-info1="Monday 1PM-2PM" data-info2="mo1">Available</label>
                    <label class="slots" id="tu1" name="tue" data-info1="Tuesday 1PM-2PM" data-info2="tu1">Available</label>
                    <label class="slots" id="we1" name="wed" data-info1="Wednesday 1PM-2PM" data-info2="we1">Available</label>
                    <label class="slots" id="th1" name="thu" data-info1="Thursday 1PM-2PM" data-info2="th1">Available</label>
                    <label class="slots" id="fr1" name="fri" data-info1="Friday 1PM-2PM" data-info2="fr1">Available</label>
                    <label class="slots" id="sa1" name="sat" data-info1="Saturday 1PM-2PM" data-info2="sa1">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">2PM-3PM</label>
                    <label class="slots" id="mo2" name="mon" data-info1="Monday 2PM-3PM" data-info2="mo2">Available</label>
                    <label class="slots" id="tu2" name="tue" data-info1="Tuesday 2PM-3PM" data-info2="tu2">Available</label>
                    <label class="slots" id="we2" name="wed" data-info1="Wednesday 2PM-3PM" data-info2="we2">Available</label>
                    <label class="slots" id="th2" name="thu" data-info1="Thursday 2PM-3PM" data-info2="th2">Available</label>
                    <label class="slots" id="fr2" name="fri" data-info1="Friday 2PM-3PM" data-info2="fr2">Available</label>
                    <label class="slots" id="sa2" name="sat" data-info1="Saturday 2PM-3PM" data-info2="sa2">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">3PM-4PM</label>
                    <label class="slots" id="mo3" name="mon" data-info1="Monday 3PM-4PM" data-info2="mo3">Available</label>
                    <label class="slots" id="tu3" name="tue" data-info1="Tuesday 3PM-4PM" data-info2="tu3">Available</label>
                    <label class="slots" id="we3" name="wed" data-info1="Wednesday 3PM-4PM" data-info2="we3">Available</label>
                    <label class="slots" id="th3" name="thu" data-info1="Thursday 3PM-4PM" data-info2="th3">Available</label>
                    <label class="slots" id="fr3" name="fri" data-info1="Friday 3PM-4PM" data-info2="fr3">Available</label>
                    <label class="slots" id="sa3" name="sat" data-info1="Saturday 3PM-4PM" data-info2="sa3">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">4PM-5PM</label>
                    <label class="slots" id="mo4" name="mon" data-info1="Monday 4PM-5PM" data-info2="mo4">Available</label>
                    <label class="slots" id="tu4" name="tue" data-info1="Tuesday 4PM-5PM" data-info2="tu4">Available</label>
                    <label class="slots" id="we4" name="wed" data-info1="Wednesday 4PM-5PM" data-info2="we4">Available</label>
                    <label class="slots" id="th4" name="thu" data-info1="Thursday 4PM-5PM" data-info2="th4">Available</label>
                    <label class="slots" id="fr4" name="fri" data-info1="Friday 4PM-5PM" data-info2="fr4">Available</label>
                    <label class="slots" id="sa4" name="sat" data-info1="Saturday 4PM-5PM" data-info2="sa4">Available</label>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>
    <section class="second" id="secondSec">
        <div class="mouth">
            <h2 id="topMouthLabel">Top Mouth</h2>
                <div class="topMouth">
                    <div class="topLeftMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t7" data-info1="top left lateral incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t6" data-info1="top left canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t5" data-info1="top left first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t4" data-info1="top left second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t3" data-info1="top left first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t2" data-info1="top left second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t1" data-info1="top left third molar"/>
                    </div>
                    <div class="gumsCon">
                        <img src="css/img/gums.png" id="gum">
                    </div>
                    <div class="topMiddleMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t8" data-info1="top left central incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t9" data-info1="top right central incisor"/>
                    </div>
                    <div class="topRightMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t10" data-info1="top right lateral incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t11" data-info1="top right canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t12" data-info1="top right first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t13" data-info1="top right second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t14" data-info1="top right first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t15" data-info1="top right second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t16" data-info1="top right third molar"/>
                    </div>
                </div>
                <div class="bottomMouth">
                    <div class="bottomLeftMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t7" data-info1="bottom left third molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t6" data-info1="bottom left second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t5" data-info1="bottom left first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t4" data-info1="bottom left second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t3" data-info1="bottom left first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t2" data-info1="bottom left canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t1" data-info1="bottom left lateral incisor"/>
                    </div>
                    <div class="bottomMiddleMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t8" data-info1="bottom left central incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t9" data-info1="bottom right central incisor"/>
                    </div>
                    <div class="bottomRightMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t10" data-info1="bottom right third molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t11" data-info1="bottom right second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t12" data-info1="bottom right first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t13" data-info1="bottom right second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t14" data-info1="bottom right first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t15" data-info1="bottom right canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t16" data-info1="bottom right lateral incisor"/>
                    </div>
                </div>
            <h2 id="bottomMouthLabel">Bottom Mouth</h2>
        </div>
        <div class="description">
            <h2>Customer's Description</h2>
            <form action="appointmentEx.php" method="post" enctype="multipart/form-data" id="desForm">
                <div class="desCon">
                    <div class="desWrapper">
                        <input class="inputField" type="text" id="weekID" name="weekID" style="display:none">
                        <input class="inputField" type="text" id="dateID" name="dateID" style="display:none">
                        <label>First Name</label>
                        <input class="inputField" type="text" id="fName" name="fName" required>
                        <label>Last Name</label>
                        <input class="inputField" type="text" id="lName" name="lName" required>
                    </div>
                    <div class="desWrapper">
                        <label>Middle Name</label>
                        <input class="inputField" type="text" id="mName" name="mName" required>
                        <label>Date & Time</label>
                        <input class="inputField" type="text" id="dateTime" name="dateTime" readonly required>
                    </div>
                    <div>
                        <label>Tooth/Teeth Position</label>
                        <input class="inputField" type="text" id="position" name="position" readonly required><i class="fa-solid fa-x" id="clearIcon" style="visibility:hidden"></i>
                    </div>
                    <label>Service</label>
                    <div class="services">
                        <div class="servicesWrapper">
                            <input type="checkbox" class="checkboxes" id="general" name="service[]" value="General "/>
                            <a href="">General</a>
                            <input type="checkbox" class="checkboxes" id="cosmetic" name="service[]" value="Cosmetic "/>
                            <a href="">Cosmetic</a>
                            <input type="checkbox" class="checkboxes" id="pediatric" name="service[]" value="Pediatric "/>
                            <a href="">Pediatric</a>
                        </div>
                        <div class="servicesWrapper">
                            <input type="checkbox" class="checkboxes" id="orthodontics" name="service[]" value="Orthodontics "/>
                            <a href="">Orthodontics</a>
                            <input type="checkbox" class="checkboxes" id="endodontics" name="service[]" value="Endodontics "/>
                            <a href="">Endodontics</a>
                            <input type="checkbox" class="checkboxes" id="periodontics" name="service[]" value="Periodontics "/>
                            <a href="">Periodontics</a>
                        </div>
                        <div class="servicesWrapper">
                            <input type="checkbox" class="checkboxes" id="oral" name="service[]" value="Oral "/>
                            <a href="">Oral</a>
                            <input type="checkbox" class="checkboxes" id="prosthodontics" name="service[]" value="Prosthodontics"/>
                            <a href="">Prosthodontics</a>
                            <input type="checkbox" class="checkboxes" id="other" name="service[]" value="Other "/>
                            <a href="">Other</a>
                        </div>
                    </div>
                <div class="btnCon">
                    <button type="button" class="desBtn" id="cancelBtn" name="cancelBtn" style="display:none">Cancel</button>
                    <button type="button" class="desBtn" id="confirmBtn" name="confirmBtn" onclick="confirmSubmit(event)" style="display:none">Confirm</button>
                    <label for="cancelBtn" class="desLbl" id="cancelLbl">Cancel</label>
                    <label for="confirmBtn" class="desLbl" id="confirmLbl">Confirm</label>
                </div>
                </div>
            </form>
        </div>
    </section>
    <section class="third">
        <h1 id="myApp">Appointments</h1>
        <div class="tableHeader">
            <label>Name</label>
            <label>Date Scheduled</label>
            <label>Date Created</label>
            <label>State</label>
        </div>
        <div class="table">
            <?php

                $sql = "SELECT * FROM `appointments`";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $dateTime = $row['dateTime'];
                        $date = $row['date'];
                        $state = $row['state'];

                        echo '
                        <div class="tableContent">
                            <label>'.$name.'</label>
                            <label>'.$dateTime.'</label>
                            <label>'.$date.'</label>
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
    <script src="js/appointment.js"></script>
</body>
</html>