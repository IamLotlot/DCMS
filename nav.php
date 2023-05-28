<?php
include "db_conn.php";
?>
<nav>
    <ul class="ulImg">
        <li><img src="css/img/logo1.png" id="logo"></li>
        <a for="logo" id="logoText">DCMS</a>
    </ul>
    <ul class="ulLeft">
        <li id="homNav" title="Go to home page" ><a href="home.php">Home</a></li>
        <li id="appNav" title="Go to appointment page"><a href="appointment.php">Appointment</a></li>
        <li id="creNav" title="Go to creators page"><a href="#">Creators</a></li>
    </ul>
    <ul class="ulRight">
        <li id="regNav" title="Go to register page"><a href="register.php">Register</a></li>
        <li id="inNav" title="Go to login page"><a href="login.php">Login</a></li>
        <li><i class="fa-solid fa-user" id="userIcon"></i><a href="profile.php" title="Go to your profile" id="onlineUser" name="onlineUser"></a><li>
        <li id="outNav" title="Logout your account"><a href="home.php">| Logout</a></li>
    </ul>
</nav>