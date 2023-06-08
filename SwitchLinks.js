"use strict"
window.onload

// Event Handler
// Function called by onchange attribute from html page
function switchLinks () {
	var dropdown = document.getElementById("contentId");
	var selection = dropdown.options[dropdown.selectedIndex].value;
	window.location.href = selection;
}