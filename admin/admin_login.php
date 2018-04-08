<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
<title>Login Now</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body class="loginBody">

	<!-- <header class="topBar" > -->
	<div class="panel">
		<h1 class="lastLogin"> Login Now!</h1>
		<form action="admin_login.php" method="post">
			<h2 class="error"><?php if(!empty($message)){ echo $message;} ?></h2>
			<div id="partOne">
			<label class="editLabels">Username:</label>
			<input class="editInput"type="text" name="username" value="">
		</div>
		<div id="partTwo">
			<label class="editLabels">Password:</label>
			<input class="editInput" type="password" name="password" value="">
			<!-- <input class="btn" type="submit" name="submit" value="Sign In"> -->
		</div>
			<button class="btn" type="submit" name="submit">Sign In</button>

		</form>
		<a href="../index.php"><h4 id="back">Click here to go back</h4></a>
	</div>


	<!-- <div class="mainBody">
		<div class="middle">
	</div>
	</div> -->


</body>
</html>
