<?php
require_once('phpscripts/config.php');
// confirm_logged_in();
$tbl = "tbl_user";
$users = getAll($tbl);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Delete User</title>
   <!-- <link rel="stylesheet" href="css/main.css"> -->
 	<link rel="stylesheet" href="../css/reset.css">
 	<link rel="stylesheet" href="../css/main.css">
   	<link rel="stylesheet" href="css/main.css">
 </head>
 <body>

 <header class="topBar" >
 	<div class="logOutBtn">
 		<a href="../index.php?logout=true" class="logout-link">Logout</a>
 		<a href="admin_index.php" class=" logout-link">Home</a>
 	</div>
 </header>

 <div class="mainBody">
 	<div class="middle">
  <h2 class="delPage">Ready to fire some employees?</h2>
  <div class="list">
  <?php
  while($row = mysqli_fetch_array($users)){
    echo "<h3>{$row['user_fname']} </h3> <a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Remove</a><br><br><br>";
  }

   ?>
 </div>
 </div>
 </div>
</body>
</html>
