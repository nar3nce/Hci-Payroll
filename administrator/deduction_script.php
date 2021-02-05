<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	
	$desc=$_POST['desc'];
	$amount=$_POST['amount'];
	
   	$sql = "update deductions set deduction_name = '$desc' , amount = '$amount' where id = '$id' ";
	$conn->query($sql);
	header('location:deduction.php');
}

function delete()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	$sql = "delete from deductions where id = '$id' ";
	$conn->query($sql);
	header('location:deduction.php');
}

function add()
{
	
	include('../conn.php');
	$desc = $_POST['desc'];
	$amount = $_POST['amount'];
	$sql = "INSERT INTO `deductions` (`id`, `deduction_name`, `amount`) VALUES (NULL, '$desc', '$amount') ";
	$conn->query($sql);
	header('location:deduction.php');
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