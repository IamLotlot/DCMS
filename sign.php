<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="icon" href="img">
	  <link rel="icon" type="image/x-icon" href="css/img/logo1.png">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/sign.css">
    <script src="https://kit.fontawesome.com/8ef5e4d9da.js"></script>
    <title>DCMS | Account Page</title>
  </head>
  <body onload="onStart()">
  <?php
    include 'nav.php';
  ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" class="sign-in-form" method="post" enctype="multipart/form-data">
            <h2 class="title" id="loginLabel">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="usernameL" name="usernameL" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="passwordL" name="passwordL" placeholder="Password" />
            </div>
            <input type="submit" class="btn solid" id="signIn" name="signIn" value="Sign in" />
            <!-- <p class="social-text">OR</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
          <form action="register.php" class="sign-up-form" method="post" enctype="multipart/form-data">
            <h2 class="title" id="registerLabel">Register</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="usernameR" name="usernameR" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="emailR" name="emailR" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="passwordR" name="passwordR" placeholder="Password" />
            </div>
            <input type="submit" class="btn" id="signUp" name="signUp" value="Sign up" />
            <!-- <p class="social-text">OR</p> -->
            <!-- <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div> -->
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Want to Create an Account?</h3>
            <p>
              Register to fully access our website!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Register
            </button>
          </div>
          <img src="css/img/tooth-login.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an Account?</h3>
            <p>
              Login to get started.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="css/img/tooth-register.png" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/nav.js"></script>
    <script src="js/sign.js"></script>
  </body>
</html>
