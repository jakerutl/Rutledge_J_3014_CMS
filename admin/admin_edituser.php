<?php
require_once('phpscripts/config.php');
// confirm_logged_in();
$id = $_SESSION['user_id'];
$tbl = "tbl_user";
$col = "user_id";
$popForm = getSingle($tbl, $col, $id);
$info = mysqli_fetch_array($popForm);
// echo $info;

  if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);//add other coloumns to match below and also match the order in localhost
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
      $result = editUser($fname, $username, $password, $email, $id); //this must line up with database, thats why we didn't use the homework one
      $message = $result;
  }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Create User</title>
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

<h2 class="editPage">Edit User</h2>

<div class="editDiv">
<?php  if(!empty($message)){echo $message;} ?>
<form class="editForm" action="admin_edituser.php" method="post">
  <label class="editLabels">First Name:</label>
  <input class="editInput" type="text" name="fname" value="<?php echo $info['user_fname']; ?>"><br><br>
  <label class="editLabels">Username:</label>
  <input class="editInput" type="text" name="username" value="<?php echo $info['user_name']; ?>"><br><br>
  <label class="editLabels">Password:</label>
  <input class="editInput" type="text" name="password" value="<?php echo $info['user_pass']; ?>"><br><br>
  <label class="editLabels">Email:</label>
  <input class="editInput" type="text" name="email" value="<?php echo $info['user_email']; ?>"><br><br>
  <input id="saveUser" type="submit" name="submit" value="Save User">
</form>
</div>



</div>
</div>
</body>
</html>
