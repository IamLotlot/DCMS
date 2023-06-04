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
        <!-- Admin Navs -->
        <li id="accNav" title="Go to accounts page"><a href="#">Accounts</a></li>
        <li id="logNav" title="Go to logs page"><a href="#">Logs</a></li>
    </ul>
    <ul class="ulRight">
        <li id="signNav" title="Go to account page"><a href="sign.php">Account</a></li>
        <li><i class="fa-solid fa-user" id="userIcon"></i><a href="profile.php" title="Go to your profile" id="onlineUser" name="onlineUser"></a></li>
        <li id="outNav" title="Logout your account"><i class="fa-solid fa-arrow-right-to-bracket" id="logoutIcon"></i><a href="home.php" id="logoutBtn" style="display:none">Logout</a></li>
    </ul>
</nav>