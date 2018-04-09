<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to this review App!</title>
  <!-- <link rel="stylesheet" href="css/main.css"> -->
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>

<header class="topBar" >
	<div class="logOutBtn">
		<a href="../index.php?logout=true" class="logout-link">Logout</a>
		<a href="admin_createuser.php">Create User</a>
	</div>
</header>

<div class="adminBody">
	<div class="middle">

	<h2 class="timeMsg">
		<?php
			date_default_timezone_set('America/Toronto');
			$Hour = date('G');

			if ( $Hour >= 5 && $Hour <= 11 ) {
	    echo "Good Morning";
		} else if ( $Hour >= 12 && $Hour <= 18 ) {
	    echo "Good Afternoon";
		} else if ( $Hour >= 19 || $Hour <= 4 ) {
	    echo "Good Night";
	}
	?>

	<?php echo $_SESSION['user_name'];  ?>
</h2>
<br>
	<h4 class="TimeStamp">Last successful login: <?php echo $_SESSION['user_last']; ?></h4>

<div class="deBtns">
	<a href="admin_edituser.php">Edit User</a>
	<a href="admin_deleteuser.php">Delete Users</a>
	<a href="admin_addmovie.php">Add/Edit/Delete Movie</a>
</div>

</div>
</div>

</body>
</html>
