"use strict"
window.onload = pageLoad;


function pageLoad () {
    colorChange();
}


function colorChange (element, color) {
    var header = document.getElementById("headerId1");
    var header = document.getElementById("headerId2");
    var header = document.getElementById("headerId3");
    var header = document.getElementById("headerId4");
    var header = document.getElementById("headerId5");
    var header = document.getElementById("headerId6");
    var startColor = "black";
    var endColor = "green";

    if (color === startColor) {
        element.style.color = endColor;
    }

    else {
        element.style.color = startColor;
    }

}
