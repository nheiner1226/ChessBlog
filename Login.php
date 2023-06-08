<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="Chess.css" />

</head>



<body>

	<!-- Navigation Tabs -->
	<h4>Navigation Tabs</h4>

	<nav class = "Navigation">
		<a href = "About.html">About</a>
		<a href = "ChessHome.html">Home</a>
		<a href = "FunFacts.html">Fun Facts</a>
		<select name = "contentOptions" id = "contentId" onchange="switchLinks()">
			<option value = "default" selected disabled hidden>Content Creation</option>
			<option value = "CreateBlog.php">Blog Entry</option>
			<option value = "PictureUpload.php">Picture Upload</option>
			<option value = "GameUpload.php">Game Upload</option>
		</select>
		<a href = "Login.html">Login</a>
		<a href = "Register.html">Register</a>
	</nav>


	<div class = "BannerImg">
		<!-- Background Picture  -->
		<img src="StartingStandoff.jpg" id="BackgroundImgId" alt="Starting Position">
	</div>


	<?php

		# Connect to mySQL database
		$mySQL = mysqli_connect("127.0.0.1", "root", "", "chess");

		# If connection error
		if (mysqli_connect_errno()) exit("Error - could not connect to mySQL");

		# Retrieve elements from db
		if ((isset($_POST["username"])) && (!empty($_POST["username"])) &&
			(isset($_POST["password"])) && (!empty($_POST["password"]))
			)

			{
				# Prevent HTML Injection
				$HTMLusername = htmlspecialchars($_POST["username"]);
				$HTMLpassword = htmlspecialchars($_POST["password"]);

				# Prevent SQL Injection
				$SQLusername = mysqli_real_escape_string($mySQL, $_POST["username"]);
				$SQLpassword = mysqli_real_escape_string($mySQL, $_POST["password"]);

			}


			# Construct query
			$query = "INSERT INTO login(Username, Password) VALUES 
			('$SQLusername', '$SQLpassword')";


			# Execute query
			$result = mysqli_query($mySQL, $query);

			# If result object is not returned, print an error statement and exit the program
			if(! $result) {
				print("Error - query could not be executed");
				$error = mysqli_error($mySQL);
				print "<p> . $error . </p>";
				exit;
			}


			# Confirmation Message
			else {
				echo "Thank you for logging in!";
			}

	?>


	<!-- Bottom Section -->
	<!-- Contacts -->
	<h4>Contact Information</h4>
	
	<nav class = "Contacts">
		<a href = "">Linkedin</a>
		<a href = "">GitHub</a>
		<a href = "">Personal Website</a>
		<a href = "">Personal Social Media Site</a>
		<a href = "">History Site</a>
	</nav>

	<script type="text/javascript" src="ChangeImage.js" ></script>
	<script type="text/javascript" src="SwitchLinks.js" ></script>

</body>


</html>