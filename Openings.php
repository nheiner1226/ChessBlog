<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Openings</title>
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


		# Construct the base query
		$query = "SELECT Creator_Name, Opening_Name, Creation_Date, Color FROM openings WHERE 1=1";

		# Check if the name parameter is set and not empty
		if (isset($_POST["creatorname"]) && !empty($_POST["creatorname"])) {
			# Prevent HTML Injection
			$HTMLName = htmlspecialchars($_POST["creatorname"]);

			# Prevent SQL Injection
			$SQLName = mysqli_real_escape_string($mySQL, $_POST["creatorname"]);

			# Add name condition to the query
			$query .= " AND Creator_Name = '$SQLName'";
		} else {
			# If the name parameter is not provided, include all names in the results
			$query .= " AND Creator_Name IS NOT NULL";
		}

		# Check if the category parameter is set and not empty
		if (isset($_POST["openingname"]) && !empty($_POST["openingname"])) {
			# Prevent HTML Injection
			$HTMLCategory = htmlspecialchars($_POST["openingname"]);

			# Prevent SQL Injection
			$SQLCategory = mysqli_real_escape_string($mySQL, $_POST["openingname"]);

			# Add category condition to the query
			$query .= " AND Opening_Name = '$SQLCategory'";
		} else {
			# If the category parameter is not provided, include all categories in the results
			$query .= " AND Opening_Name IS NOT NULL";
		}

				# Check if the name parameter is set and not empty
		if (isset($_POST["creationdate"]) && !empty($_POST["creationdate"])) {
			# Prevent HTML Injection
			$HTMLName = htmlspecialchars($_POST["creationdate"]);

			# Prevent SQL Injection
			$SQLName = mysqli_real_escape_string($mySQL, $_POST["creationdate"]);

			# Add name condition to the query
			$query .= " AND Creation_Date = '$SQLName'";
		} else {
			# If the name parameter is not provided, include all names in the results
			$query .= " AND Creation_Date IS NOT NULL";
		}

		# Check if the category parameter is set and not empty
		if (isset($_POST["color"]) && !empty($_POST["color"])) {
			# Prevent HTML Injection
			$HTMLCategory = htmlspecialchars($_POST["color"]);

			# Prevent SQL Injection
			$SQLCategory = mysqli_real_escape_string($mySQL, $_POST["color"]);

			# Add category condition to the query
			$query .= " AND Color = '$SQLCategory'";
		} else {
			# If the category parameter is not provided, include all categories in the results
			$query .= " AND Color IS NOT NULL";
		}


		#Execute query 
		$result = mysqli_query($mySQL, $query);

		# If result object is not returned, then print an error and exit the PHP program
		if(! $result) {
			print("Error - select query could not be executed");
			$error = mysqli_error($mySQL);
			print "<p> . $error . </p>";
			exit;
		}


		# Display data
		while($row = mysqli_fetch_assoc($result)) {
	    	echo "Creator Name: {$row['Creator_Name']} <br> ".
	    		"Opening Name: {$row['Opening_Name']} <br> ".
	        	"Creation Date: {$row['Creation_Date']} <br> ".
	        	"Color: {$row['Color']} <br> ".
	         	"--------------------------------<br>";
   			}

   		echo "Fetched data successfully\n";
   
   		mysqli_close($mySQL);

   	?>


</body>

</html>