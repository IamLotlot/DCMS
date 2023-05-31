function onStart(){
    
    var username = localStorage.getItem('onlineUser');
    document.getElementById("onlineUser").innerHTML = username;

    //var home = document.getElementById("homNav");
    var app = document.getElementById("appNav");
    var creators = document.getElementById("creNav");
    var sign = document.getElementById("signNav");
    var userIcon = document.getElementById("userIcon");
    var logout = document.getElementById("outNav");
    
    if (username) {

        if (username=="admin") {
          app.style.display = "none";
          creators.style.display = "none";
  
          //accounts.style.display = "inline-block";
  
          sign.style.display = "none";
          userIcon.style.display = "inline-block";
          logout.style.display = "inline-block";
  
        } else {
          app.style.display = "inline-block";
          creators.style.display = "inline-block";
  
          //accounts.style.display = "none";
  
          sign.style.display = "none";
          userIcon.style.display = "inline-block";
          logout.style.display = "inline-block";
        }
      } else {
        //accounts.style.display = "none";
  
        sign.style.display = "inline-block";
        userIcon.style.display = "none";
        logout.style.display = "none";
      }
}