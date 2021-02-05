<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	
	$desc=$_POST['desc'];
	$rate=$_POST['rate'];
	
   	$sql = "update position set description = '$desc' , rate = '$rate' where id = '$id' ";
	$conn->query($sql);
	header('location:positions.php');
}

function delete()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	$sql = "delete from position where id = '$id' ";
	$conn->query($sql);
	header('location:positions.php');
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