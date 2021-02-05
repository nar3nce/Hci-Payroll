<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  
  <!-- Bootstrap CSS -->
  <?php include "css.php"; ?>
  

  <style type="text/css">
<!--
.style1 {
	color: #000000;
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
            <h3 class="page-header"><i class="fa fa-group"></i> Employee List</h3>
           <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-group"></i>Employee List</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
			 <h4 style="color:#000000" class="panel-title">Add new Employee </h4>
                <p><a class="btn btn-success" href="" title="Bootstrap 3 themes generator"><span class="fa fa-plus-square"></span> Add New</a></p>
                
              </header>
              <div class="table-responsive">
                <table width="101%" class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th><i class="icon_profile"></i> Full Name</th>
                      <th><i class="fa fa-list"></i> Position</th>
                      <th><i class="icon_calendar"></i> Schedule</th>
                      <th><i class="fa fa-clock-o"></i> Date Created</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  //display code
				  
				  include '../conn.php';
				  $narence = "";
                   $sql = "SELECT *, employees.id AS emp_id FROM employees LEFT JOIN position ON position.id = employees.position_id LEFT JOIN schedules ON schedules.id = schedule_id";
                   $query = $conn->query($sql);
				   
                   if($query->num_rows > 0){
                      while($row = $query->fetch_array()) {
					    $id = $row['emp_id'];
						$fname = $row['firstname'];
						$lname = $row['lastname'];	
						$desc  = $row['description'];	
						$time_in = $row['time_in'];
						$time_out = $row['time_out'];
						$date  = $row['created_on'];
						$narence .= ' 
						 <tr>
                      <td>'.$id.'</td>
                      <td>'.$fname.' '.$lname.'</td>
                      <td>'.$desc.'</td>
                      <td>'.$time_in.' - '.$time_out.' </td>
                      <td>'.$date.'</td>
                      <td>
					  <div class="btn-group">
						  <a class="btn btn-primary" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="fa fa-pencil-square-o"></span> Edit</a>
                          <ul class="dropdown-menu">
                            <li><a href="" title="Bootstrap 3 themes generator">Update</a></li>
                            <li><a href="" title="Bootstrap 3 themes generator">Delete</a></li>
                          </ul>
                      </div>
					  </td>
                    </tr>
						
						';
					  }
				   }
				   
				   echo $narence;
				   ?>
                 
                  </tbody>
                </table>
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
