<!DOCTYPE html>
<html lang="EN">

<head>

	<title>Upload Image</title>
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
	<h1>Content Hub - Upload Image</h1>

	<div class = "BannerImg">
		<!-- Background Picture  -->
		<img src="StartingStandoff.jpg" id="BackgroundImgId" alt="Starting Position">
	</div>


	<h2>Upload AI Picture</h2>

		<form class="formContainer" id="pictureFormId" name="pictureForm" action="UploadImageSQL.php" method="POST">

			<label for="nameId">Uploader's Name: </label>
			<input type="text" id="nameId" name="name" placeholder="Name"/> <br/>

			<label for="entryId">Upload Date: </label>
			<input type="text" id="uploaddateId" name="uploaddate" placeholder="UploadDate"/> <br/>

			<label for="countId">Model Name: </label>
			<input type="text" id="modelId" name="model" placeholder="Model"/> <br/>

			<label for="topicId">Image Name: </label>
			<input type="text" id="imageId" name="image" placeholder="Image"/> <br/>

			<input type="file" id="imagefileId" name="imagefile" placeholder="ImageFile">
			<button onclick="UploadImage()">Upload Image</button>

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