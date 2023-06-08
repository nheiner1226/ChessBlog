"use strict"
window.onload = pageLoad;

function passChecker () {

	var password = document.getElementById("PasswordId");
	var strength = document.getElementById("passStrength");
	var pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{2,}/;

	// Check strength
	if (password.length < 15) {
    	strength.textContent = "Password is too weak. Please enter a password that contains at least 15 characters.";
    } else {
    	strength.textContent = "Password strength is good";
    }

}