"use strict"

window.onload


function textButtonChange(event) {

	// Ignore default action; submitting the page
	event.preventDefault();

	var viewButton = document.getElementById("eyeboxId");

	// Text on Button
	if (viewButton.textContent === "View") {
		viewButton.textContent = "Hide";
	}

	else {
		viewButton.textContent = "View";
	}
	
}