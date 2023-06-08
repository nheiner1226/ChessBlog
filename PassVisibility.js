"use strict"

window.onload


function passVisibility(event) {

	// Ignore default action; submitting the page
	event.preventDefault();

	var password = document.getElementById("PasswordId");

	// Password Visibility
	if (password.type === "text") {
		password.type = "password";
	}

	else {
		password.type = "text";
	}

}
