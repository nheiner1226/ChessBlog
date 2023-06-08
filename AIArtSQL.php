<!DOCTYPE html>
<html lang="EN">

<head>

	<title>AI Art Selection</title>
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

		# If database cannot be accessed
		if (mysqli_connect_errno()) exit("Error - could not connect to MySQL");

		# Retrieve elements from the form
		# Verify presence of values in variabl
		if ((isset($_POST["name"])) && (!empty($_POST["name"])) && 
			(isset($_POST["uploaddate"])) && (!empty($_POST["uploaddate"])) && 
			(isset($_POST["model"])) && (!empty($_POST["model"])) &&
			(isset($_POST["image"])) && (!empty($_POST["image"]))
			)

			{

				# Prevent HTML Injection
				$HTMLname = htmlspecialchars($_POST["name"]);
				$HTMLupload = htmlspecialchars($_POST["uploaddate"]);
				$HTMLmodel = htmlspecialchars($_POST["model"]);
				$HTMLimage = htmlspecialchars($_POST["image"]);

				# Prevent SQL Injection
				$SQLname = mysqli_real_escape_string($mySQL, $_POST["name"]);
				$SQLupload = mysqli_real_escape_string($mySQL, $_POST["uploaddate"]);
				$SQLmodel = mysqli_real_escape_string($mySQL, $_POST["model"]);
				$SQLimage = mysqli_real_escape_string($mySQL, $_POST["image"]);

			}


			# Construct query with specific conditions
			$query = "SELECT * FROM uploadimage WHERE 1=1";

			if (!empty($SQLname)) {
				$query .= " AND Name = '$SQLname'";
			}

			if (!empty($SQLupload)) {
				$query .= " AND Upload_Date = '$SQLupload'";
			}

			if (!empty($SQLmodel)) {
				$query .= " AND Model = '$SQLmodel'";
			}

			if (!empty($SQLimage)) {
				$query .= " AND Image = '$SQLimage'";
			}

			$query .= " ORDER BY Upload_Date DESC LIMIT 1";


			# Execute query
			$result = mysqli_query($mySQL, $query);

			# If result object is not returned, print an error statement and exit the program
			if(! $result) {
				print("Error - query could not be executed");
				$error = mysqli_error($mySQL);
				print "<p> . $error . </p>";
				exit;
			}

			while($row = mysqli_fetch_assoc($result)) {
	    	echo "Uploader's Name: {$row['name']} <br> ".
	        	"Upload Date: {$row['uploaddate']} <br> ".
	        	"Model Name: {$row['model']} <br> ".
	        	"Image Name: {$row['image']} <br> ".
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