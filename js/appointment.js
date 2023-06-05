// Hide the section if no one is online
var username = localStorage.getItem('onlineUser');
var second = document.getElementById("secondSec");

if (username) {

  // If admin is online
  if (username=="admin") {

    second.style.display = "none";

  // If user is online
  } else {

    second.style.display = "flex";
  }
// If no one is online
} else {

  second.style.display = "none";
}

// Gets the value of the day chosen when clicked
var slots = document.getElementsByClassName("slots");

for (var i = 0; i < slots.length; i++) {
  
  slots[i].addEventListener("click", getDay);
}

function getDay(event) {

    var dataInfo = event.target.getAttribute("data-info1");
    document.getElementById("dateTime").value = dataInfo;
    location.href = "#topMouthLabel";
}

// Gets the value of the tooth when clicked
var tooth = document.getElementsByClassName("tooth");
var clearIcon = document.getElementById("clearIcon");

for (var i = 0; i < tooth.length; i++) {
    tooth[i].addEventListener("click", getTooth);
}

function getTooth(event) {

    var dataInfo = event.target.getAttribute("data-info1");
    var position = document.getElementById("position").value;
    document.getElementById("position").value = position + "(" + dataInfo + ")";
    clearIcon.style.visibility = "visible";
}

// Gets the current week and update it every minute
function getCurrentDay() {

    var currentDate = new Date();
  
    var day = currentDate.getDate();
    var dayIndex = currentDate.getDay();
    var month = currentDate.getMonth();
    var year = currentDate.getFullYear();

    var monthIndex = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    var month = monthIndex[month];
  
    var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  
    var week = daysOfWeek[dayIndex];

    document.getElementById("month").innerText = month;
    document.getElementById("day").innerText = day+",";
    document.getElementById("year").innerText = year;
    
    sessionStorage.setItem('month', month);
    sessionStorage.setItem('day', day);
    sessionStorage.setItem('year', year);
    sessionStorage.setItem('week', week);

    // console.log(month+" "+day+", "+year+" ("+week+")");
    // var week = "Tuesday";
  
    var mon = document.getElementById("monLabel");
    var tue = document.getElementById("tueLabel");
    var wed = document.getElementById("wedLabel");
    var thu = document.getElementById("thuLabel");
    var fri = document.getElementById("friLabel");
    var sat = document.getElementById("satLabel");

    // var mon1 = document.getElementById("mo9");

    var monSet = document.querySelectorAll("[name='mon']");
    var tueSet = document.querySelectorAll("[name='mon'], [name='tue']");
    var wedSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed']");
    var thuSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu']");
    var friSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu'], [name='fri']");
    var satSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu'], [name='fri'], [name='sat']");

    if (week === 'Monday') {
        mon.style.backgroundColor = "#46244a";
        mon.style.color = "#F0ECE6";

        for (var i = 0; i < monSet.length; i++) {
            monSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Tuesday') {
        tue.style.backgroundColor = "#46244a";
        tue.style.color = "#F0ECE6";

        for (var i = 0; i < tueSet.length; i++) {
            tueSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Wednesday') {
        wed.style.backgroundColor = "#46244a";
        wed.style.color = "#F0ECE6";

        for (var i = 0; i < wedSet.length; i++) {
            wedSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Thursday') {
        thu.style.backgroundColor = "#46244a";
        thu.style.color = "#F0ECE6";

        for (var i = 0; i < thuSet.length; i++) {
            thuSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Friday') {
        fri.style.backgroundColor = "#46244a";
        fri.style.color = "#F0ECE6";

        for (var i = 0; i < friSet.length; i++) {
            friSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Saturday') {
        sat.style.backgroundColor = "#46244a";
        sat.style.color = "#F0ECE6";

        for (var i = 0; i < satSet.length; i++) {
            satSet[i].style.visibility = 'hidden';
        }

    } else if (week === 'Sunday') {
        mon.style.backgroundColor = "#C147E9";
        tue.style.backgroundColor = "#C147E9";
        wed.style.backgroundColor = "#C147E9";
        thu.style.backgroundColor = "#C147E9";
        fri.style.backgroundColor = "#C147E9";
        sat.style.backgroundColor = "#C147E9";
    }
  }
  
  getCurrentDay();
  
  // setInterval(getCurrentDay, 60000);

function setWeek(){
  
  var mon = document.getElementById("monLabel");
  var tue = document.getElementById("tueLabel");
  var wed = document.getElementById("wedLabel");
  var thu = document.getElementById("thuLabel");
  var fri = document.getElementById("friLabel");
  var sat = document.getElementById("satLabel");
  
  mon.style.backgroundColor = "#C147E9";
  tue.style.backgroundColor = "#C147E9";
  wed.style.backgroundColor = "#C147E9";
  thu.style.backgroundColor = "#C147E9";
  fri.style.backgroundColor = "#C147E9";
  sat.style.backgroundColor = "#C147E9";
}

function nextReserves(){
  var we3 = document.getElementById("we3");
  
  we3.style.backgroundColor = "#810CA8";
  we3.style.color = "#F0ECE6";
  we3.style.cursor = "default";
  we3.innerText = "Reserved";
}

function lastReserves(){
  var sa11 = document.getElementById("sa11");
  
  sa11.style.backgroundColor = "#810CA8";
  sa11.style.color = "#F0ECE6";
  sa11.style.cursor = "default";
  sa11.innerText = "Reserved";
}

// Left and right icon function when clicked
var leftIcon = document.getElementById("leftIcon");
var rightIcon = document.getElementById("rightIcon");
var lastLeftIcon = document.getElementById("lastLeftIcon");
var lastRightIcon = document.getElementById("lastRightIcon");

var weekLabel = document.getElementById("weekLabel");
var weekID = document.getElementById("weekID");

var slots = document.querySelectorAll('.slots');

lastLeftIcon.addEventListener("click", function() {

  slots.forEach(function(slot) {

    weekLabel.innerText = "Next Week"
    weekID.value = "";

    slot.style.backgroundColor = "#F0ECE6";
    slot.style.color = "#3B3141";
    slot.style.cursor = "pointer";

    lastLeftIcon.style.display = "none";
    lastLeftIcon.style.visibility = "hidden";
    leftIcon.style.display = "flex";
    leftIcon.style.visibility = "visible";
    rightIcon.style.visibility = "hidden";
    lastRightIcon.style.visibility = "visible";

    slot.style.visibility = "visible";
    
    slot.innerText = "Available";

    nextReserves();
    setWeek();
  });
});

leftIcon.addEventListener("click", function() {

  slots.forEach(function(slot) {

    weekLabel.innerText = "This Week"
    weekID.value = "";

    slot.style.backgroundColor = "#F0ECE6";
    slot.style.color = "#3B3141";
    slot.style.cursor = "pointer";

    lastLeftIcon.style.display = "none";
    lastLeftIcon.style.visibility = "hidden";
    leftIcon.style.visibility = "hidden";
    rightIcon.style.display = "flex";
    rightIcon.style.visibility = "visible";
    lastRightIcon.style.display = "none";
    lastRightIcon.style.visibility = "hidden";

    slot.style.visibility = "visible";
    
    slot.innerText = "Available";

    reservedDates();
    getCurrentDay();
  });
});

rightIcon.addEventListener("click", function() {

  slots.forEach(function(slot) {

    weekLabel.innerText = "Next Week"
    weekID.value = "";

    slot.style.backgroundColor = "#F0ECE6";
    slot.style.color = "#3B3141";
    slot.style.cursor = "pointer";

    lastLeftIcon.style.visibility = "hidden";
    leftIcon.style.visibility = "visible";
    rightIcon.style.display = "none";
    rightIcon.style.visibility = "hidden";
    lastRightIcon.style.display = "flex";
    lastRightIcon.style.visibility = "visible";

    slot.style.visibility = "visible";

    slot.innerText = "Available";

    nextReserves();
    setWeek();
  });
});

lastRightIcon.addEventListener("click", function() {

  slots.forEach(function(slot) {

    weekLabel.innerText = "Last Week"
    weekID.value = "";

    slot.style.backgroundColor = "#F0ECE6";
    slot.style.color = "#3B3141";
    slot.style.cursor = "pointer";

    lastLeftIcon.style.display = "flex";
    lastLeftIcon.style.visibility = "visible";
    leftIcon.style.display = "none";
    leftIcon.style.visibility = "hidden";
    rightIcon.style.visibility = "hidden";
    lastRightIcon.style.visibility = "hidden";

    slot.style.visibility = "visible";
    
    slot.innerText = "Available";

    lastReserves();
    setWeek();
  });
});


// Checkbox others function
const gen = document.getElementById("general");
const cos = document.getElementById("cosmetic");
const ped = document.getElementById("pediatric");
const ort = document.getElementById("orthodontics");
const end = document.getElementById("endodontics");
const per = document.getElementById("periodontics");
const ora = document.getElementById("oral");
const pro = document.getElementById("prosthodontics");

const oth = document.getElementById("other");

var checkbox = document.querySelectorAll("#general, #cosmetic, #pediatric, #orthodontics, #endodontics, #periodontics, #oral, #prosthodontics, #other");

oth.addEventListener("change", function() {

  if (gen.checked || cos.checked || ped.checked || ort.checked || end.checked || per.checked || ora.checked || pro.checked) {
    
    oth.disabled = true;

  } else if (oth.checked) {
    
    gen.disabled = true;
    cos.disabled = true;
    ped.disabled = true;
    ort.disabled = true;
    end.disabled = true;
    per.disabled = true;
    ora.disabled = true;
    pro.disabled = true;
    
  } else {

    gen.disabled = false;
    cos.disabled = false;
    ped.disabled = false;
    ort.disabled = false;
    end.disabled = false;
    per.disabled = false;
    ora.disabled = false;
    pro.disabled = false;
  }
});

// Hide clear icon when clicked and clear the input
var clearIcon = document.getElementById("clearIcon");
var position = document.getElementById("position");

clearIcon.addEventListener('click', () => {
  clearIcon.style.visibility = 'hidden';
  position.value = "";
});

// Getting the id content of the selected slots and storing it in a session
var slots = document.querySelectorAll('.slots');

slots.forEach(function(slot) {
  slot.addEventListener('click', function(event) {
    
    var value = event.target.getAttribute('data-info2');

   document.getElementById("dateID").value = value;
  });
});

// Retrieve the dataIDs and change the properties of the slots
function reservedDates(){

  var inputs = document.getElementsByClassName("reservedDate");

  for (let i = 0; i < inputs.length; i++) {

    var input = inputs[i];
    
    var value = input.value;

    var labelId = value;
    var label = document.getElementById(labelId);

    if (label) {
      label.addEventListener('click', function(event){
      event.preventDefault();
      });
      label.style.backgroundColor = "#810CA8";
      label.style.color = "#F0ECE6";
      label.style.cursor = "default";
      label.innerText = "Reserved";
      // label.style.visibility = "hidden";
    }
    
  }
}

// Removes the data entered
var cancel = document.getElementById("cancelBtn");

var fName = document.getElementById("fName");
var lName = document.getElementById("lName");
var mName = document.getElementById("mName");
var dateTime = document.getElementById("dateTime");
var clearIcon = document.getElementById("clearIcon");
var position = document.getElementById("position");
var checkboxes = document.querySelectorAll(".checkboxes");

cancel.addEventListener('click', () => {
  var result = confirm("Are you sure you want to remove the current appointment?");

  if (result) {
    cancelApp();
  }
});

function cancelApp() {
    clearIcon.style.visibility = 'hidden';
    fName.value = "";
    lName.value = "";
    mName.value = "";
    dateTime.value = "";
    position.value = "";

    localStorage.removeItem('dataID');
    
    sessionStorage.removeItem('service');
    sessionStorage.removeItem('month');
    sessionStorage.removeItem('day');
    sessionStorage.removeItem('year');
    sessionStorage.removeItem('week');
  
    checkboxes.forEach(function(checkbox) {
  
    checkbox.checked = false;
    checkbox.removeAttribute('disabled');
  });
}

// Show a confirmation if it will submit the form or not
function confirmSubmit(event) {
  
  event.preventDefault();

  var result = confirm("Are you sure you want to create an appointment?");

  if (result) {
    // var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    // var values = [];
  
    // checkboxes.forEach(function(checkbox) {
    // values.push(checkbox.value);
    // });

    // sessionStorage.setItem('service', values);

    getCurrentDay();

    document.getElementById("desForm").submit();
  }
}

// Applies the corresponding color
function setColors() {
  var pending = document.getElementsByClassName("Pending");
  var accepted = document.getElementsByClassName("Accepted");
  var denied = document.getElementsByClassName("Denied");

  for (var i = 0; i <pending.length; i++){
      pending[i].style.color = "#F0ECE6";
  }
  
  for (var i = 0; i <accepted.length; i++){
      accepted[i].style.color = "#72EF36";
  }
  
  for (var i = 0; i <denied.length; i++){
      denied[i].style.color = "#ff1717";
  }
}