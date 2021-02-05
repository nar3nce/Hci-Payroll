<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	
	$in=$_POST['in'];
	$out=$_POST['out'];
	
   	$sql = "update schedules set time_in = '$in' , time_out = '$out' where id = '$id' ";
	$conn->query($sql);
	header('location:sched.php');
}

function delete()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	$sql = "delete from schedules where id = '$id' ";
	$conn->query($sql);
	header('location:sched.php');
}

function add()
{
	
	include('../conn.php');
	$in = $_POST['in'];
	$out = $_POST['out'];
	$sql = "INSERT INTO `schedules` (`id`, `time_in`, `time_out`) VALUES (NULL, '$in', '$out') ";
	$conn->query($sql);
	header('location:sched.php');
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