<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Display Blog Post</title>
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
		<select class="formContainer" name = "contentOptions" id = "contentId" onchange="switchLinks()">
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

		# If database cannot be accessed
		if (mysqli_connect_errno()) exit("Error - could not connect to MySQL");


		# Construct select query
		$query = "SELECT Author_Name, Date, Count, Topic, Submission_Area FROM blogentries ORDER BY Author_Name DESC LIMIT 1";

		# Execute query
		$result = mysqli_query($mySQL, $query);

		# If result object not returned
		if(! $result) {
			print("Error - select query could not be executed");
			$error = mysqli_error($mySQL);
			print "<p> . $error . </p>";
			exit;
		}


		# Display content
		while($row = mysqli_fetch_assoc($result)) {
	    echo "Author Name: {$row['Author_Name']} <br> ".
	       	"Entry Date: {$row['Date']} <br> ".
	      	"Count: {$row['Count']} <br> ".
	    	"Topic: {$row['Topic']} <br> ".
	    	"Post Content: {$row['Submission_Area']} <br> ".
	     	"--------------------------------<br>";
   			}

   		echo "Fetched data successfully\n";
   
   		mysqli_close($mySQL);


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