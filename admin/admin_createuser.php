<?php
require_once('phpscripts/config.php');
confirm_logged_in();


  if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);//add other coloumns to match below and also match the order in localhost
    $password = trim($_POST['password']);
    $password_rand = rand(1000,5000);
    $password_hashed = password_hash($password_rand, PASSWORD_DEFAULT);
    $url = $_SERVER['HTTP_HOST']."/admin/admin_login.php";
    $email = trim($_POST['email']);
    $fail = trim($_POST['fail']);
    $lvllist = ($_POST['lvllist']);
    if(empty($lvllist)){
      $message = "Please select a user level.";
    }else{
      $result = createUser($fname, $username, $password_hashed, $email, $fail, $lvllist); //this must line up with database, thats why we didn't use the homework one
      if($result){
        if(!empty($email)){
          $recieve = sendPassword($username, $password_rand, $email, $url);

        }
        redirect_to('admin_index.php');
      }else{
        $message = "Please fill out form correctly";
      }
    }
  }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Create User</title>
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

  <div class="adminBody">
  	<div class="middle">
<h2 class="createUser">Create User</h2>

<div class="panel" >
<?php  if(!empty($message)){echo $message;} ?>
<form class="editForm" action="admin_createuser.php" method="post">
  <label class="editLabels">First Name:</label>
  <input class="editInput" type="text" name="fname" value=""><br><br>
  <label class="editLabels">Username:</label>
  <input class="editInput" type="text" name="username" value=""><br><br>
  <label class="editLabels">Password:</label>
  <input class="editInput"type="text" name="password" value=""><br><br>
  <label class="editLabels">Email:</label>
  <input class="editInput" type="text" name="email" value=""><br><br>
  <select class="lvl" name="lvllist">
      <option value="">Select User Level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
  </select><br><br>
  <button class="btn" type="submit" name="submit" value="Create User">Create User</button>
  <h4 class="random">Random password will be <br>sent to you via email</h4>
</form>
</div>
</div>
</div>

</body>
</html>
