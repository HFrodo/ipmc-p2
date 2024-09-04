<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<style>
		body{
			background-image: url("people-collage-design.jpg");
			background-size: cover;
			background-repeat: repeat;
			margin: 0;
			padding: 0;
			font-family: Arial sans-serif;
			animation: moveBackground 10s linear infinite;
		}

		ul li{
			display: inline-block;
			position: vertical;
		}

		@keyframes moveBackground{
			0%{
				background-position: 0% 100%;
			}
			100%{
				background-position: 100% 0%;
			}
		}

		.overlay{
			background-color: rgba(255, 0, 0, 0.3);		
		}
		
		.contentbox{
			text-align: center;
			padding-top: 260px;
		}

		.formbox{
			background-color: white;
			margin-left: 500px;
			margin-right: 500px;
			height: 320px;
		}

		header {
			padding: 10px;
			list-style-type: none;
			position: absolute;
			top: 8px;
			right: 16px;
			
		}

		.nav{
			/* list-style-type: none; */
			/* display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
			padding: 0;
			list-style-type: none; */
		}
		.profileul{
			/* list-style-type: none; */
		}
		.forumsul{
			/* list-style-type: none; */
		}
		.formul{
			/* list-style-type: none; */
		}
		.register-icon{
			width: 2%;
			height: auto;
			padding-top: 1px;
			padding-bottom: 5px;
		}
		.register-icon img {
		width: 100%;
		height: 12px;
		display: block;
		}
	</style>

	<div class = "overlay">
	<header>
		<div class = "toggle-icon" id = "toggle-icon">
			<nav>
				<li><a href="#">Home</a></li>
				<li>
					<a href="#">Profile</a>
					<ul class = "profileul">
						<li><a href="#">Profile Page</a></li>
						<li><a href="#">Newsfeed</a></li>
						<li><a href="#">Post Versions</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Forums</a>
					<ul class = forumsul>
						<li><a href="#">Main Links</a></li>
						<li><a href="#">BuddyPress</a></li>
						<li><a href="#">Corporate</a></li>
						<li><a href="#">Forums</a></li>
					</ul>
				</li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</nav>
	</header>
	<div class = "contentbox">
		<h2>Welcome to the Biggest Social Network in the World</h2>
		<p>We are the best and biggest social network with 5 billion active users all around the world. Share your thoughts,
		<br>write blog posts, show your favourite music via Shopify, earn badges and much more!</p>
		<br>
		<br>
		<input type = "button" value = "Register Now!">
		<div class = "formbox">
			<section>
				<button type = "button" class = "login-icon"><i class="fa fa-power-off" aria-hidden="true"></i></button>
				<button type = "button" class = "register-icon"><img src = "Screenshot 2024-07-27 095018.png" alt = "register"></button>
			</section>
			<section>
				<h3><strong>Register to Olympus</strong></h3>
			</section>
				<form action="index.php" method="get">
					<ul class = "formul">
						<li><input type = "text" name = "firstname" placeholder = "First Name" required></li>
						<br>
						<li><input type = "text" name = "lastname" placeholder = "Last Name" required></li>
						<br>
						<li><input type = "email" name = "email" placeholder = "Your Email" required></li>
						<br>
						<li><input type = "password" name = "password" size = "20" placeholder = "Your Password" required></li>
						<br>
						<li><input type = "date" name = "date" placeholder = "Your Birthday"></li>
						<br>
						<li><select name = "gender"><option value = "" disabled selected> Your gender<option value = "Male">Male</option><option value = "Female">Female</option></select></li>
						<br><br>
						<label><input type = "checkbox" name = "terms" required> I accept the <a href = "terms-and-conditions" target = "_blank">Terms and Conditions</label>
						<br><br>
						<button type = "submit">Complete Registration!</button>
					</ul>
				</form>
	</div>
</body>	
</html>	
	<?php
	/*
	echo "<pre>";
	var_dump($_GET);
	//function to connect to database= mysqli_connect(server name, username, password, database name);
	$server_name = "localhost";
	$username = "root";
	$pwd = "";
	$dbname = "medical";

	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];

	$sql = "INSERT INTO users(firstname, lastname)
	values ('$firstname', '$lastname')";

	$connection = mysqli_connect($server_name, $username, $pwd, $dbname);
	// if($connection){
	// 	echo "connection is okay";
	// }
	// else{
	// 	echo "no connection";
	// }

	mysqli_query($connection, $sql);
	?> 
	*/

