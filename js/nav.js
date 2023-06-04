function onStart(){
    
    var username = localStorage.getItem('onlineUser');
    document.getElementById("onlineUser").innerHTML = username;

    //var home = document.getElementById("homNav");
    var app = document.getElementById("appNav");
    var creators = document.getElementById("creNav");
    var sign = document.getElementById("signNav");
    var userIcon = document.getElementById("userIcon");
    // var logout = document.getElementById("outNav");
    var logoutIcon = document.getElementById("logoutIcon");
    
    if (username) {

        if (username=="admin") {
          app.style.display = "none";
          creators.style.display = "none";
  
          sign.style.display = "none";
          userIcon.style.display = "flex";
          // logout.style.display = "none";
          logoutIcon.style.display = "flex";
  
        } else {
          app.style.display = "flex";
          creators.style.display = "flex";
  
          sign.style.display = "none";
          userIcon.style.display = "flex";
          // logout.style.display = "none";
          logoutIcon.style.display = "flex";
        }
      } else {
  
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
    location.reload();
    sign.style.display = "flex";
    logoutIcon.style.display = "none";
    onlineUser.style.display = "none";
    logout.style.display = "none";
  }
});