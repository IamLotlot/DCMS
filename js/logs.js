// Applies the corresponding color; if Cancelled(red), Success(green)
function setColors() {
    var success = document.getElementsByClassName("Success");
    var failed = document.getElementsByClassName("Cancelled");

    for (var i = 0; i <success.length; i++){
        success[i].style.color = "#72EF36";
    }
    
    for (var i = 0; i <failed.length; i++){
        failed[i].style.color = "#ff1717";
    }
    
}