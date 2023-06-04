// Gets the value of the day chosen when clicked
var slots = document.getElementsByClassName("slots");

for (var i = 0; i < slots.length; i++) {
    slots[i].addEventListener("click", getDay);
}

function getDay(event) {

    var dataInfo = event.target.getAttribute("data-info");
    document.getElementById("dateTime").value = dataInfo;
    location.href = "#topMouthLabel";
}

// Gets the value of the tooth when clicked
var tooth = document.getElementsByClassName("tooth");

for (var i = 0; i < tooth.length; i++) {
    tooth[i].addEventListener("click", getTooth);
}

function getTooth(event) {

    var dataInfo = event.target.getAttribute("data-info");
    var position = document.getElementById("position").value;
    document.getElementById("position").value = position + "(" + dataInfo + ")";
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

    
    var mon1 = document.getElementById("mo9");

    var monSet = document.querySelectorAll("[name='mon']");
    var tueSet = document.querySelectorAll("[name='mon'], [name='tue']");
    var wedSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed']");
    var thuSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu']");
    var friSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu'], [name='fri']");
    var satSet = document.querySelectorAll("[name='mon'], [name='tue'], [name='wed'], [name='thu'], [name='fri'], [name='sat']");

    if (week === 'Monday') {
        mon.style.backgroundColor = "#72EF36";

    } else if (week === 'Tuesday') {
        tue.style.backgroundColor = "#72EF36";

        for (var i = 0; i < monSet.length; i++) {
            monSet[i].style.visibility = 'hidden';
          }

    } else if (week === 'Wednesday') {
        wed.style.backgroundColor = "#72EF36";

        for (var i = 0; i < tueSet.length; i++) {
            tueSet[i].style.visibility = 'hidden';
          }

    } else if (week === 'Thursday') {
        thu.style.backgroundColor = "#72EF36";

        for (var i = 0; i < wedSet.length; i++) {
            wedSet[i].style.visibility = 'hidden';
          }

    } else if (week === 'Friday') {
        fri.style.backgroundColor = "#72EF36";

        for (var i = 0; i < thuSet.length; i++) {
            thuSet[i].style.visibility = 'hidden';
          }

    } else if (week === 'Saturday') {
        sat.style.backgroundColor = "#72EF36";

        for (var i = 0; i < friSet.length; i++) {
            friSet[i].style.visibility = 'hidden';
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
  
  setInterval(getCurrentDay, 60000);

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

oth.addEventListener("change", function() {

  if (oth.checked) {
    
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