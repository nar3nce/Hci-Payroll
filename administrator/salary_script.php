<?php

function edit()
{
	include('../conn.php');
    $id=$_GET['id'];
	
	$deductions = $_POST['deductions'];
    $total = array_sum($deductions); 
	$sql = "update employees set total_deduction = '$total' where id = '$id' ";
	$conn->query($sql);
	header('location:salary.php');
	
	
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
	$sql = "INSERT INTO `deductions` (`id`, `description`, `amount`) VALUES (NULL, '$desc', '$amount') ";
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
