<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Create Blog Post</title>
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
		<select class = "dropdown" name = "contentOptions" id = "contentId" onchange="switchLinks()">
			<option value = "default" selected disabled hidden>Content Creation</option>
			<option value = "CreateBlog.php">Blog Entry</option>
			<option value = "PictureUpload.php">Picture Upload</option>
			<option value = "GameUpload.php">Game Upload</option>
		</select>
		<a href = "Login.html">Login</a>
		<a href = "Register.html">Register</a>
	</nav>


	<!-- Top Section -->
	<h1>Content Hub - Create Blog</h1>

	<div class = "BannerImg">
		<!-- Background Picture  -->
		<img src="StartingStandoff.jpg" id="BackgroundImgId" alt="Starting Position">
	</div>


	<!-- Middle Section -->
	<h2>Create Blog Post</h2>

		<form class="formContainer" id="entryFormId" name="entryForm" action="CreateBlogSQL.php" method="POST">

			<label for="nameId">Author's Name: </label>
			<input type="text" id="nameId" name="name" placeholder="Name"/> <br/>

			<label for="entryId">Entry Date: </label>
			<input type="text" id="dateId" name="date" placeholder="Date"/> <br/>

			<label for="countId">Word Count: </label>
			<input type="text" id="countId" name="count" placeholder="Count"/> <br/>

			<label for="topicId">Topic: </label>
			<input type="text" id="topicId" name="topic" placeholder="Topic"/> <br/>

			<label for="submissionareaId">Submission Area: </label>
			<textarea id="submissionareaId" name="submissionarea" placeholder="Enter your text here." rows="4" cols="50"></textarea> <br/>

			<input type="submit" id="submitID" value="Submit"/>

		</form>


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