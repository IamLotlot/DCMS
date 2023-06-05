<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	<link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/creators.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Creators Page</title>
</head>
<body onload="onStart()">
<?php
    include 'nav.php';
?>
    <section>
        <div class="profileCon">
            <img src="css/img/zotomayor2.jpg">
            <div class="nameCon">
                <label class="name">Danielle Zotomayor</label>
                <label class="email">@gmail.com</label>
            </div>
            <div class="socMed">
                <i class="fa-brands fa-square-facebook" onclick="zotomayorFB()"></i>
                <i class="fa-brands fa-square-instagram" onclick="zotomayorIG()"></i>
                <i class="fa-brands fa-square-twitter" onclick="zotomayorTW()"></i>
            </div>
        </div>
        <div class="profileCon">
            <img src="css/img/navea2.jpg">
            <div class="nameCon">
                <label class="name">Jose Carlos Navea</label>
                <label class="email">jcnavea3@gmail.com</label>
            </div>
            <div class="socMed">
                <i class="fa-brands fa-square-facebook" onclick="naveaFB()"></i>
                <i class="fa-brands fa-square-instagram" onclick="naveaIG()"></i>
                <i class="fa-brands fa-square-twitter" onclick="naveaTW()"></i>
            </div>
        </div>
        <div class="profileCon">
            <img src="css/img/valenzuela2.jpg">
            <div class="nameCon">
                <label class="name">Ricky Valenzuela</label>
                <label class="email">@gmail.com</label>
            </div>
            <div class="socMed">
                <i class="fa-brands fa-square-facebook" onclick="valenzuelaFB()"></i>
                <i class="fa-brands fa-square-instagram" onclick="valenzuelaIG()"></i>
                <i class="fa-brands fa-square-twitter" onclick="valenzuelaTW()"></i>
            </div>
        </div>
    </section>
    <script src="js/nav.js"></script>
    <script src="js/creators.js"></script>
</body>
</html>