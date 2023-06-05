function onStart(){
    
    var username = localStorage.getItem('onlineUser');
    document.getElementById("onlineUser").innerHTML = username;

    //var home = document.getElementById("homNav");
    var app = document.getElementById("appNav");
    var cre = document.getElementById("creNav");

    var apps = document.getElementById("appsNav");
    var acc = document.getElementById("accNav");
    var log = document.getElementById("logNav");

    var sign = document.getElementById("signNav");
    var userIcon = document.getElementById("userIcon");
    // var logout = document.getElementById("outNav");
    var logoutIcon = document.getElementById("logoutIcon");
    
    if (username) {

        if (username=="admin") {
          app.style.display = "none";
          cre.style.display = "none";

          apps.style.display = "flex";
          acc.style.display = "flex";
          log.style.display = "flex";
  
          sign.style.display = "none";
          userIcon.style.display = "flex";
          // logout.style.display = "none";
          logoutIcon.style.display = "flex";
  
        } else {
          app.style.display = "flex";
          cre.style.display = "flex";

          apps.style.display = "none";
          acc.style.display = "none";
          log.style.display = "none";
  
          sign.style.display = "none";
          userIcon.style.display = "flex";
          // logout.style.display = "none";
          logoutIcon.style.display = "flex";
        }
      } else {
  
        apps.style.display = "none";
        acc.style.display = "none";
        log.style.display = "none";

        sign.style.display = "flex";
        userIcon.style.display = "none";
        // logout.style.display = "none";
        logoutIcon.style.display = "none";
      }
}

////Logout function
var sign = document.getElementById("signNav");
var logoutIcon = document.getElementById("userIcon");
var onlineUser = document.getElementById("onlineUser");
var logout = document.getElementById("outNav");

logout.addEventListener("click", function() {
  var result = confirm("Are you sure you want to logout?");

  // Check the result
  if (result == true) {
    localStorage.removeItem('onlineUser');
    sign.style.display = "flex";
    logoutIcon.style.display = "none";
    onlineUser.style.display = "none";
    logout.style.display = "none";
    window.location.href = "sign.php";
  }
});