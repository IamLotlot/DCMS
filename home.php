<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Home Page</title>
</head>
<body onload="onStart()">
<?php
    include 'nav.php';
?>
    <section class="heroSection">
        <div class="desCol">
            <div class="desBlob">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#46244A" d="M40.3,-70.2C48.4,-65.2,48.3,-46.5,52.2,-32.5C56,-18.6,63.8,-9.3,66.9,1.8C70,12.9,68.4,25.7,61.2,33.9C54,42,41.1,45.5,30,51.7C18.9,57.8,9.4,66.6,-0.3,67C-9.9,67.5,-19.9,59.6,-28.7,52.1C-37.6,44.6,-45.3,37.6,-51,29C-56.6,20.4,-60.2,10.2,-62.9,-1.5C-65.5,-13.3,-67.2,-26.5,-62.2,-36.3C-57.2,-46,-45.5,-52.3,-34,-55.2C-22.5,-58.2,-11.3,-58,2.4,-62.2C16.1,-66.4,32.3,-75.2,40.3,-70.2Z" transform="translate(100 100)" />
                </svg>
                <!-- <img src="css/svg/blob1.svg" id="blob"> -->
            </div>
            <h1>LSPU</h1>
            <h2>Dental Clinic Management System</h2>
            <div class="iconGroup">
                <i class="fa-solid fa-location-dot" id="googleMap" onclick="googleMap()"></i>
                <i class="fa-brands fa-facebook" id="facebook" onclick="facebook()"></i>
            </div>
        </div>
        <div class="imgCol">
            <img src="css/img/hero-page.png">
            <div class="imgBlob">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#46244a" d="M25.8,-46.1C33.1,-40.5,38.3,-32.8,43.3,-24.8C48.3,-16.7,53.1,-8.4,56.9,2.2C60.6,12.7,63.3,25.4,61.5,39C59.7,52.7,53.5,67.3,42.5,68.9C31.5,70.6,15.8,59.3,-0.2,59.6C-16.2,60,-32.4,72.1,-33.3,64.6C-34.2,57.1,-19.9,30.2,-20.7,16.1C-21.5,2.1,-37.4,1.1,-39.6,-1.2C-41.7,-3.5,-30,-7.1,-28.8,-20.3C-27.5,-33.5,-36.7,-56.5,-33.6,-64.4C-30.6,-72.4,-15.3,-65.5,-3,-60.3C9.3,-55.1,18.6,-51.7,25.8,-46.1Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </section>
    <section class="second">
        <div class="aboutCon">
            <img src="css/img/tooth1.png" id="tooth1">
            <h1>Our History</h1>
            <label>LSPU dentist clinic has been at the school since 1996, it is located inside Laguna State Polytechnic University Santa Cruz Main Campus. Started from scratch like nothing at all, equipment provided by himself, no materials stocks, and the chair used at his clinic before is a monoblock. LSPU dentist clinic has some difficulties like using a logbook to keep track of the customer’s information and when searching for his customer’s information and log it is time consuming.</label>
            
            <img src="css/img/tooth4.png" id="tooth2">
        </div>
    </section>
    <script src="js/nav.js"></script>
    <script src="js/home.js"></script>
</body>
</html>