function onStart(){
    
    var username = localStorage.getItem('onlineUser');
    document.getElementById("onlineUser").innerHTML = username;

    //var home = document.getElementById("homNav");
    var app = document.getElementById("appNav");
    var creators = document.getElementById("creNav");
    var register = document.getElementById("regNav");
    var login = document.getElementById("inNav");
    var userIcon = document.getElementById("userIcon");
    var logout = document.getElementById("outNav");
    
    if (username) {

        if (username=="admin") {
          app.style.display = "none";
          creators.style.display = "none";
  
          //accounts.style.display = "inline-block";
  
          register.style.display = "none";
          login.style.display = "none";
          userIcon.style.display = "inline-block";
          logout.style.display = "inline-block";
  
        } else {
          app.style.display = "inline-block";
          creators.style.display = "inline-block";
  
          //accounts.style.display = "none";
  
          register.style.display = "none";
          login.style.display = "none";
          userIcon.style.display = "inline-block";
          logout.style.display = "inline-block";
        }
      } else {
        //accounts.style.display = "none";
  
        register.style.display = "inline-block";
        login.style.display = "inline-block";
        userIcon.style.display = "none";
        logout.style.display = "none";
      }
}