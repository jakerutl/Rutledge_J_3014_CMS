<?php


function sendPassword($username, $password, $email, $url){
$to = $email;
$subj = "Login Password";
$msg = "Username: " .$username. "\n\nPassword: " .$password. "\n\nEmail: " .$email. "\n\nLogin Page: " .$url;
mail($to,$subj,$msg);
}

function createUser($fname, $username, $password, $email, $fail, $lvllist){
  include('connect.php');
  $userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$username}','{$password}','{$email}',NULL,'no',NULL,'{$fail}','{$lvllist}','{$new}')";
  // echo $userstring;
  $userquery = mysqli_query($link, $userstring);
  if($userquery) {
    return true;
  }else{
    return false;
  }
  mysqli_close($link);
}


function editUser($fname, $username, $password, $email, $id) {
  include('connect.php');

  $updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_name='{$username}', user_pass='{$password}', user_email='{$email}' WHERE user_id='{$id}'";
  $updatequery = mysqli_query($link, $updatestring);
  // echo $updatequery;

if($updatequery){
  redirect_to("admin_index.php");
}else{
  $message = "Guess you got canned...";
  return $message;
}

  mysqli_close($link);



}

function deleteUser($id){
  include('connect.php');
  $delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
  $delquery = mysqli_query($link, $delstring);
  if($delquery){
    redirect_to("../admin_deleteuser.php");
  }else{
    $message = "Bye Bye...";
    return $message;
  }
mysqli_close($link);
}



 ?>
