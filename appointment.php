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
<body onload="onStart(); getCurrentDay()">
<?php
    include 'nav.php';
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
                    <i class="fa-solid fa-chevron-left" id="leftIcon"></i>
                    <h1>This Week</h1>
                    <h1 style="display:none">Next Week</h1>
                    <h1 style="display:none">Week After Another</h1>
                    <i class="fa-solid fa-chevron-right" id="rightIcon"></i>
                </div>
                <div class="sideHeader">
                    
                </div>
            </div>
            <div>
                <div class="calendarCon">
                    <label class="timeLabel">Time</label>
                    <label class="week" id="monLabel" data-info="">Mon</label>
                    <label class="week" id="tueLabel" data-info="">Tue</label>
                    <label class="week" id="wedLabel" data-info="">Wed</label>
                    <label class="week" id="thuLabel" data-info="">Thu</label>
                    <label class="week" id="friLabel" data-info="">Fri</label>
                    <label class="week" id="satLabel" data-info="">Sat</label>
                </div>
                <div class="calendarCon">
                    <label class="time">9AM-10AM</label>
                    <label class="slots mon" id="mo9" name="mon" data-info="Monday 9AM-10AM">Available</label>
                    <label class="slots tue" id="tu9" name="tue" data-info="Tuesday 9AM-10AM">Available</label>
                    <label class="slots wed" id="we9" name="wed" data-info="Wednesday 9AM-10AM">Available</label>
                    <label class="slots thu" id="th9" name="thu" data-info="Thursday 9AM-10AM">Available</label>
                    <label class="slots fri" id="fr9" name="fri" data-info="Friday 9AM-10AM">Available</label>
                    <label class="slots sat" id="sa9" name="sat" data-info="Saturday 9AM-10AM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">10AM-11AM</label>
                    <label class="slots mon" id="mo10" name="mon" data-info="Monday 10AM-11AM">Available</label>
                    <label class="slots tue" id="tu10" name="tue" data-info="Tuesday 10AM-11AM">Available</label>
                    <label class="slots wed" id="we10" name="wed" data-info="Wednesday 10AM-11AM">Available</label>
                    <label class="slots thu" id="th10" name="thu" data-info="Thursday 10AM-11AM">Available</label>
                    <label class="slots fri" id="fr10" name="fri" data-info="Friday 10AM-11AM">Available</label>
                    <label class="slots sat" id="sa10" name="sat" data-info="Saturday 10AM-11AM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">11AM-12PM</label>
                    <label class="slots mon" id="mo11" name="mon" data-info="Monday 11AM-12PM">Available</label>
                    <label class="slots tue" id="tu11" name="tue" data-info="Tuesday 11AM-12PM">Available</label>
                    <label class="slots wed" id="we11" name="wed" data-info="Wednesday 11AM-12PM">Available</label>
                    <label class="slots thu" id="th11" name="thu" data-info="Thursday 11AM-12PM">Available</label>
                    <label class="slots fri" id="fr11" name="fri" data-info="Friday 11AM-12PM">Available</label>
                    <label class="slots sat" id="sa11" name="sat" data-info="Saturday 11AM-12PM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">12PM-1PM</label>
                    <label class="slots mon" id="mo12" name="mon" data-info="Monday 12PM-1PM">Available</label>
                    <label class="slots tue" id="tu12" name="tue" data-info="Tuesday 12PM-1PM">Available</label>
                    <label class="slots wed" id="we12" name="wed" data-info="Wednesday 12PM-1PM">Available</label>
                    <label class="slots thu" id="th12" name="thu" data-info="Thursday 12PM-1PM">Available</label>
                    <label class="slots fri" id="fr12" name="fri" data-info="Friday 12PM-1PM">Available</label>
                    <label class="slots sat" id="sa12" name="sat" data-info="Saturday 12PM-1PM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">1PM-2PM</label>
                    <label class="slots mon" id="mo1" name="mon" data-info="Monday 1PM-2PM">Available</label>
                    <label class="slots tue" id="tu1" name="tue" data-info="Tuesday 1PM-2PM">Available</label>
                    <label class="slots wed" id="we1" name="wed" data-info="Wednesday 1PM-2PM">Available</label>
                    <label class="slots thu" id="th1" name="thu" data-info="Thursday 1PM-2PM">Available</label>
                    <label class="slots fri" id="fr1" name="fri" data-info="Friday 1PM-2PM">Available</label>
                    <label class="slots sat" id="sa1" name="sat" data-info="Saturday 1PM-2PM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">2PM-3PM</label>
                    <label class="slots mon" id="mo2" name="mon" data-info="Monday 2PM-3PM">Available</label>
                    <label class="slots tue" id="tu2" name="tue" data-info="Tuesday 2PM-3PM">Available</label>
                    <label class="slots wed" id="we2" name="wed" data-info="Wednesday 2PM-3PM">Available</label>
                    <label class="slots thu" id="th2" name="thu" data-info="Thursday 2PM-3PM">Available</label>
                    <label class="slots fri" id="fr2" name="fri" data-info="Friday 2PM-3PM">Available</label>
                    <label class="slots sat" id="sa2" name="sat" data-info="Saturday 2PM-3PM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">3PM-4PM</label>
                    <label class="slots mon" id="mo3" name="mon" data-info="Monday 3PM-4PM">Available</label>
                    <label class="slots tue" id="tu3" name="tue" data-info="Tuesday 3PM-4PM">Available</label>
                    <label class="slots wed" id="we3" name="wed" data-info="Wednesday 3PM-4PM">Available</label>
                    <label class="slots thu" id="th3" name="thu" data-info="Thursday 3PM-4PM">Available</label>
                    <label class="slots fri" id="fr3" name="fri" data-info="Friday 3PM-4PM">Available</label>
                    <label class="slots sat" id="sa3" name="sat" data-info="Saturday 3PM-4PM">Available</label>
                </div>
                <div class="calendarCon">
                    <label class="time">4PM-5PM</label>
                    <label class="slots mon" id="mo4" name="mon" data-info="Monday 4PM-5PM">Available</label>
                    <label class="slots tue" id="tu4" name="tue" data-info="Tuesday 4PM-5PM">Available</label>
                    <label class="slots wed" id="we4" name="wed" data-info="Wednesday 4PM-5PM">Available</label>
                    <label class="slots thu" id="th4" name="thu" data-info="Thursday 4PM-5PM">Available</label>
                    <label class="slots fri" id="fr4" name="fri" data-info="Friday 4PM-5PM">Available</label>
                    <label class="slots sat" id="sa4" name="sat" data-info="Saturday 4PM-5PM">Available</label>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="mouth">
            <h2 id="topMouthLabel">Top Mouth</h2>
                <div class="topMouth">
                    <div class="topLeftMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t7" data-info="top left lateral incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t6" data-info="top left canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t5" data-info="top left first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t4" data-info="top left second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t3" data-info="top left first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t2" data-info="top left second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t1" data-info="top left third molar"/>
                    </div>
                    <div class="topMiddleMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t8" data-info="top left central incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t9" data-info="top right central incisor"/>
                    </div>
                    <div class="topRightMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t10" data-info="top right lateral incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t11" data-info="top right canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t12" data-info="top right first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t13" data-info="top right second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t14" data-info="top right first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t15" data-info="top right second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t16" data-info="top right third molar"/>
                    </div>
                </div>
                <div class="bottomMouth">
                    <div class="bottomLeftMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t7" data-info="bottom left third molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t6" data-info="bottom left second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t5" data-info="bottom left first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t4" data-info="bottom left second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t3" data-info="bottom left first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t2" data-info="bottom left canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t1" data-info="bottom left lateral incisor"/>
                    </div>
                    <div class="bottomMiddleMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t8" data-info="bottom left central incisor"/>
                        <img src="css/img/tooth.png" class="tooth" id="t9" data-info="bottom right central incisor"/>
                    </div>
                    <div class="bottomRightMouth">
                        <img src="css/img/tooth.png" class="tooth" id="t10" data-info="bottom right third molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t11" data-info="bottom right second molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t12" data-info="bottom right first molar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t13" data-info="bottom right second premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t14" data-info="bottom right first premolar"/>
                        <img src="css/img/tooth.png" class="tooth" id="t15" data-info="bottom right canine"/>
                        <img src="css/img/tooth.png" class="tooth" id="t16" data-info="bottom right lateral incisor"/>
                    </div>
                </div>
            <h2 id="bottomMouthLabel">Bottom Mouth</h2>
        </div>
        <div class="description">
            <h2>Customer's Description</h2>
            <form action="">
                <div class="desCon">
                    <div class="desWrapper">
                        <label>First Name</label>
                        <input class="inputField" type="text" id="fName" required>
                        <label>Last Name</label>
                        <input class="inputField" type="text" id="lName" required>
                    </div>
                    <div class="desWrapper">
                        <label>Middle Name</label>
                        <input class="inputField" type="text" id="mName" required>
                        <label>Date & Time</label>
                        <input class="inputField" type="text" id="dateTime" readonly required>
                    </div>
                    <div>
                        <label>Tooth/Teeth Position</label>
                        <input class="inputField" type="text" id="position" readonly required><i class="fa-solid fa-x"></i>
                    </div>
                    <label>Service</label>
                    <div class="services">
                        <div class="servicesWrapper">
                            <input type="checkbox" id="general" value="General"/>
                            <a href="">General</a>
                            <input type="checkbox" id="cosmetic" value="Cosmetic"/>
                            <a href="">Cosmetic</a>
                            <input type="checkbox" id="pediatric" value="Pediatric"/>
                            <a href="">Pediatric</a>
                        </div>
                        <div class="servicesWrapper">
                            <input type="checkbox" id="orthodontics" value="Orthodontics"/>
                            <a href="">Orthodontics</a>
                            <input type="checkbox" id="endodontics" value="Endodontics"/>
                            <a href="">Endodontics</a>
                            <input type="checkbox" id="periodontics" value="Periodontics"/>
                            <a href="">Periodontics</a>
                        </div>
                        <div class="servicesWrapper">
                            <input type="checkbox" id="oral" value="Oral"/>
                            <a href="">Oral</a>
                            <input type="checkbox" id="prosthodontics" value="Prosthodontics"/>
                            <a href="">Prosthodontics</a>
                            <input type="checkbox" id="other" value="Other"/>
                            <a href="">Other</a>
                        </div>
                    </div>
                <div class="btnCon">
                    <button type="submit" class="desBtn" id="cancelBtn" style="display:none">Cancel</button>
                    <button type="submit" class="desBtn" id="confirmBtn" style="display:none">Confirm</button>
                    <label for="cancelBtn" class="desLbl" id="cancelLbl">Cancel</label>
                    <label for="confirmBtn" class="desLbl" id="confirmLbl">Confirm</label>
                </div>
                </div>
            </form>
        </div>
    </section>
    <script src="js/nav.js"></script>
    <script src="js/appointment.js"></script>
</body>
</html>