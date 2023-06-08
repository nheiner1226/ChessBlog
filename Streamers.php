<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Streamers</title>
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
		$query = "SELECT Channel_Name, Real_Name, Sub_Count, Birth_Date FROM streamers WHERE 1=1";

		# Check if the name parameter is set and not empty
		if (isset($_POST["channelname"]) && !empty($_POST["channelname"])) {
			# Prevent HTML Injection
			$HTMLName = htmlspecialchars($_POST["channelname"]);

			# Prevent SQL Injection
			$SQLName = mysqli_real_escape_string($mySQL, $_POST["channelname"]);

			# Add name condition to the query
			$query .= " AND Channel_Name = '$SQLName'";
		} else {
			# If the name parameter is not provided, include all names in the results
			$query .= " AND Channel_Name IS NOT NULL";
		}

		# Check if the category parameter is set and not empty
		if (isset($_POST["realname"]) && !empty($_POST["realname"])) {
			# Prevent HTML Injection
			$HTMLCategory = htmlspecialchars($_POST["realname"]);

			# Prevent SQL Injection
			$SQLCategory = mysqli_real_escape_string($mySQL, $_POST["realname"]);

			# Add category condition to the query
			$query .= " AND Real_Name = '$SQLCategory'";
		} else {
			# If the category parameter is not provided, include all categories in the results
			$query .= " AND Real_Name IS NOT NULL";
		}

				# Check if the name parameter is set and not empty
		if (isset($_POST["count"]) && !empty($_POST["count"])) {
			# Prevent HTML Injection
			$HTMLName = htmlspecialchars($_POST["count"]);

			# Prevent SQL Injection
			$SQLName = mysqli_real_escape_string($mySQL, $_POST["count"]);

			# Add name condition to the query
			$query .= " AND Sub_Count = '$SQLName'";
		} else {
			# If the name parameter is not provided, include all names in the results
			$query .= " AND Sub_Count IS NOT NULL";
		}

		# Check if the category parameter is set and not empty
		if (isset($_POST["date"]) && !empty($_POST["date"])) {
			# Prevent HTML Injection
			$HTMLCategory = htmlspecialchars($_POST["date"]);

			# Prevent SQL Injection
			$SQLCategory = mysqli_real_escape_string($mySQL, $_POST["date"]);

			# Add category condition to the query
			$query .= " AND Birth_Date = '$SQLCategory'";
		} else {
			# If the category parameter is not provided, include all categories in the results
			$query .= " AND Birth_Date IS NOT NULL";
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
	    	echo "Channel Name: {$row['Channel_Name']} <br> ".
	        	"Real Name: {$row['Real_Name']} <br> ".
	        	"Subscriber Count: {$row['Sub_Count']} <br> ".
	        	"Date of Birth: {$row['Birth_Date']} <br> ".
	         	"--------------------------------<br>";
   			}

   		echo "Fetched data successfully\n";
   
   		mysqli_close($mySQL);

	?>


</body>

</html>