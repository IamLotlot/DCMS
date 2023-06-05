// Click function for account buttons using i tag
function clickAdd() {

    var result = confirm("Are you sure you want to create a account?");
  
    if(result == true){

      document.getElementById("addBtn").click();
    }
  }
  function clickEdit() {

    var result = confirm("Are you sure you want to edit this account?");
  
    if(result == true){

      document.getElementById("editBtn").click();
    }
  }
  function clickRemove() {

    var result = confirm("Are you sure you want to remove this account?");
  
    if(result == true){

      document.getElementById("removeBtn").click();
    }
  }
  function clickClear() {

    var result = confirm("Are you sure you want to clear the inputs?");
  
    if(result == true){
    
      document.getElementById("username").value = "";
      document.getElementById('password').value = "";
      document.getElementById('email').value = "";
      document.getElementById('fullname').value = ""; 
      document.getElementById('age').value = ""; 
      document.getElementById('sex').value = ""; 
      document.getElementById('address').value = ""; 
      document.getElementById('contact').value = ""; 
      document.getElementById('profilePreview').src = ""; 
    }
  }
  
  // Showing text animation for icons in accounts.php
  var labels = document.querySelectorAll('.fa-solid');
  var contents = document.querySelectorAll('.show-content');
  
  labels.forEach(function(label, index) {

    label.addEventListener('mouseover', function() {

      closeAllContents();
      shows[index].style.opacity = '1';
      shows[index].style.height = 'auto';
    });
  });
  
  function closeAllContents() {

    shows.forEach(function(content) {

      show.style.opacity = '0';
      show.style.height = '0';
    });
  }
  
  // Image shows up when picked from a file element (accounts.php)
  const label = document.getElementById('profileLabel');
  const fileInput = document.getElementById('profileInput');
  const preview = document.getElementById('profilePreview');
  
  label.addEventListener('click', () => {

    fileInput.click();
  });
  
  fileInput.addEventListener('change', () => {

    const file = fileInput.files[0];
  
    if (file) {

      label.textContent = file.name;
      const reader = new FileReader();
      reader.onload = () => {

        preview.src = reader.result;
        label.style.display = 'none';
        preview.style.display = 'block';
      };
      reader.readAsDataURL(file);
    }
  });
  
  // Gets the username's other information and set it into the inputs
  function getUsername(label) {
  
    var inputs = document.getElementsByClassName("inputField");
    for (var i = 0; i < inputs.length; i++) {

      inputs[i].value = "";
    }
  
    var onlineUser = label.innerHTML;
  
    var username = document.getElementById("username").value = onlineUser;
    var email = document.getElementById(onlineUser + "-email").value;
    var password = document.getElementById(onlineUser + "-password").value;
    var fullname = document.getElementById(onlineUser + "-fullname").value;
    var address = document.getElementById(onlineUser + "-address").value;
    var contact = document.getElementById(onlineUser + "-contact").value;
    var age = document.getElementById(onlineUser + "-age").value;
    var sex = document.getElementById(onlineUser + "-sex").value;
    var profile = document.getElementById(onlineUser + "-profilePic").value;
  
    // document.getElementById("username").value = username;
    document.getElementById("email").value = email;
    document.getElementById("password").value = password;
    document.getElementById("fullname").value = fullname;
    document.getElementById("address").value = address;
    document.getElementById("contact").value = contact;
    document.getElementById("age").value = age;
    document.getElementById("sex").value = sex;
    document.getElementById("profilePreview").src = "../DCMS/documents/profile/"+profile;
  
    document.getElementById('profileLabel').style.display = "none";
    document.getElementById('profilePreview').style.display = "block";
  }