<?php
	$con = mysqli_connect('localhost','root','','hostelP') ;
	if(isset($_POST['submit'])) {
		global $con ;

		if(isset($_POST['first']))
			$value1 = $_POST['first'] ;
		if(isset($_POST['middle']))
			$value2 = $_POST['middle'] ;
		if(isset($_POST['last']))
			$value3 = $_POST['last'] ;
		if(isset($_POST['dept']))
			$value4 = $_POST['dept'] ;
		if(isset($_POST['username']))
			$value5 = $_POST['username'] ;
		if(isset($_POST['mobile']))
			$value6 = $_POST['mobile'] ;
		if(isset($_POST['year']))
			$value7 = $_POST['year'] ;
		if(isset($_POST['emailid']))
			$value8 = $_POST['emailid'] ;
		if(isset($_POST['pwd']))
			$value9 = $_POST['pwd'] ;
		
		$query = "INSERT INTO USERS VALUES ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9')" ;

		$run = mysqli_query($con,$query) ;
		if(!$run){
			?> <script> alert('Siginup Failed!') ; </script> <?php
		}
		else {
			?> <script> alert('Signup Successful!') ; </script> <?php
		}
						
	}
?>

<!DOCTYPE html>
<head>
	<title> Sign_up </title>

	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="style4.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
</head>

<body>
	<h1> STUDENT SIGNUP </h1>
	<br>	
	<br>
	<div class="login-box">
		<img src="./images/av.png" class="avatar">
		<h2> Application Form </h2>
	<br>
		<form class="sign" method="POST" >
			<p>First Name<input type="text" name="first" required></p>
			<p>Middle Name<input type="text" name="middle" ></p>
			<p>Last Name<input type="text" name="last" ></p>
			<p>Department<input type="text" name="dept" required></p>
		<p>Roll Number<input type="text" name="username" required></p>
		<p>Mobile Number<input type="text" name="mobile" required></p>
			<p>Year<input type="text" name="year" required></p>	
			<p>Email Address<input type="text" name="emailid" ></p>
			<p>Password<input type="text" name="pwd" required></p>
	
			<input type="submit" name="submit" value="Submit Form">
			<a href="index.php" style="color : #00ff00 ;"> Go to Home </a>
		</form>
		
	</div>
</body>



