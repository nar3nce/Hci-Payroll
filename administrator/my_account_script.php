<?php
session_start();
include '../conn.php';

if(isset($_POST['update_profile'])) {
  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $password = $_POST['password'];
  
  $sql = " UPDATE `accounts` SET `username` = '$uname', `password` = '$password', `firstname` = '$fname', `lastname` = '$lname' WHERE `accounts`.`id` = '$id'";
  $conn->query($sql);
  
 $newname = $id.'_'.$fname.'_'.$lname.'.jpg';
 if( move_uploaded_file( $_FILES['file']['tmp_name'], "profile_pic/$newname")){echo "success";} else {echo "error";}
 
  header('location:my_account.php');
}


?>