"use strict"
window.onload = pageLoad;

var currIndex = 0;

function pageLoad() {
	document.getElementById("BackgroundImgId").addEventListener("click", changeImage);
}


function changeImage() {
	var imgElem = document.getElementById("BackgroundImgId");  
	var imageArray = ["StartingStandoff.jpg", "NaturalChess.jpg", "PawnQueen.jpg"];

	imgElem.setAttribute("src", imageArray[currIndex]);

	currIndex = (currIndex + 1) % imageArray.length;
}

setInterval(changeImage, 5000);