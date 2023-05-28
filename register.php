<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Register Page</title>
</head>
<body onload="onStart()">
<?php
    include 'nav.php';
?>
    <form action="">
        <section>
            <div class="divCol" id="imgCol">
                <label id="profileLabel">Profile Picture</label>
                <input type="file" id="profile" style="display:none;">
                <label for="profile" id="inputImg">+</label>
            </div>
            <div class="divCol" id="desCol">
                <label id="desLabel">Personal Description</label>
                <div class="desCon">
                    <div class="desWrap">
                        <label for="fullname">Fullname</label>
                        <input type="text" id="fullname">
                        <label for="address">Address</label>
                        <input type="text" id="address">
                        <label for="email">Email</label>
                        <input type="email" id="email">
                        <label for="contact">Contact</label>
                        <input type="email" id="contact">
                    </div>
                    <div class="desWrap">
                        <label for="age">Age</label>
                        <input type="text" id="age">
                        <label for="sex">Sex</label>
                        <input type="text" id="sex">
                        <label for="sex">Sex</label>
                        <input type="text" id="sex">
                    </div>
                </div>
                <div class="desCon">
                </div>
            </div>
            <div class="divCol" id="fileCol">
                
            </div>
        </section>
    </form>
    <script src="js/nav.js"></script>
    <script src="js/register.js"></script>
</body>
</html>