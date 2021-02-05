<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	
	$position = $_POST['position'];
	$schedule = $_POST['schedule'];;
	
   	$sql = " UPDATE `employees` SET `position_id` = '$position', `schedule_id` = '$schedule' WHERE `employees`.`id` = '$id' ";
	$conn->query($sql);
	header('location:employee.php');
}

function delete()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	$sql = "delete from employees where id = '$id' ";
	$conn->query($sql);
	header('location:employee.php');
}

function add()
{
	
	include('../conn.php');
	$desc = $_POST['desc'];
	$rate= $_POST['rate'];
	$sql = "INSERT INTO `position` (`id`, `description`, `rate`) VALUES (NULL, '$desc', '$rate') ";
	$conn->query($sql);
	header('location:positions.php');
}

if(isset($_POST['update']))
{
edit();
}

if(isset($_POST['delete']))
{
delete();
}

if(isset($_POST['add']))
{
add();
}
?>