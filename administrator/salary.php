<?php include("restriction.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	
	<!-- Bootstrap CSS -->
	<?php include "css.php"; ?>
	<style type="text/css">
		<!--
.style3 {
	color: #FF0000;
	font-weight: bold;
	font-size: 16px;
}
.style8 {
	color: #009900;
	font-weight: bold;
}
		-->
	</style>
</head>

<body>

	<!-- container section start -->
	<section id="container" class="">

		<!-- include header -->
		<?php include "header.php"; ?>

		<!-- include nav bar --> 
		<?php include "navbar.php"; ?>

		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">&#8369; Salary Management</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
							<li></i>&#8369; Salary Management</li>
						</ol>
					</div>
				</div>
				<!-- page start-->
				<div class="col-lg-12">
					<section class="panel">
						<div class="table-responsive">
							<table width="101%" class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Full Name</th>
										<th>position</th>
										<th>Salary</th>
										<th>Total Deductions</th>
										<th>Total Pay</th>
										<th><i class="icon_cogs"></i> Action</th>
									</tr>
								</thead>
								<tbody> 
									<!-- ############################################## responsive table design -->

									<?php
									include('../conn.php');
									$sql = "SELECT *, employees.id AS emp_id FROM employees LEFT JOIN position ON position.id = employees.position_id LEFT JOIN deductions ON deductions.id = deduction_id";
									$query = $conn->query($sql);
									while($row = $query->fetch_array()) {
										?>
										<tr>
											<td><?php echo $row['emp_id']; ?></td>
											<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
											<td><?php echo $row['description']; ?></td>
											<td>&#8369; <?php echo $row['rate']; ?></td>
											<td><span class="style3">- &#8369;<?php echo $row['total_deduction'];  ?></span></td>
											<td><span class="style8">&#8369; <?php echo($row['rate'] - $row['total_deduction']); ?></span> </td>			  
											<td>
												<div class="btn-group">
													<a class="btn btn-primary" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="fa fa-pencil-square-o"></span> Manage</a>
													<ul class="dropdown-menu">
														<li><a href="#modal<?php echo $row['emp_id']; ?>" data-toggle="modal" >Update</a></li>
														<li><a href="#del<?php echo $row['emp_id']; ?>" data-toggle="modal" >Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<?php 
										include('salary_modal.php');  
									}
									?>
									<!-- ################################################### end -->
									
								</tbody>
							</table>
						</div>
						
						<!-- add -->
						<div class="modal fade" id="a" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Add new Employee</h4>
									</div>
									<div class="modal-body">

										<!-- ############## -->
										
										<form id="form1" name="form3" method="post" action="employee_script.php">
											<div class="form-group">
												<label for="exampleInputEmail1"></label>
												<input type="hidden" name="id" value=""class="form-control" id="exampleInputEmail1" placeholder="">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Description</label>
												<input type="text" name="desc"  value="" class="form-control" id="exampleInputEmail1" placeholder="programmer" required>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Salary</label>
												<input type="text" name="rate" value="" class="form-control" id="exampleInputPassword1" placeholder="50000" required>
											</div>
											<input type="submit" name="add" value="Add" class="btn btn-primary">
										</form>
										
										<!-- bodyyyyyyyyyyyy///// -->
									</div>
									<div class="modal-footer">
										<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
									</div>
								</div>
							</div>
						</div>
						
					</section>
				</div>

				<!-- page end-->
			</section>
		</section>
		<!--main content end-->



	</section>

	<!--include the java scripts -->
	<?php include "scripts.php"; ?>
</body>

</html>
