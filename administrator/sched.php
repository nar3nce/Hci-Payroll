<?php include("restriction.php");?>
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
            <h3 class="page-header"><i class="icon_calendar"></i> Schedule List</h3>
           <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_calendar"></i>Schedule List</li>
            </ol>
          </div>
     </div>
   </div>
   <!-- page start-->
   <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h4 style="color:#000000" class="panel-title">Add new Schedule</h4>
        <p><a class="btn btn-success" href="#add" data-toggle="modal"><span class="fa fa-plus-square"></span> Add New</a></p>

      </header>
      <div class="table-responsive">
        <table width="101%" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th><i class=""></i> Time_in</th>
              <th><i class=""></i> Time_out</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody> 
<!-- ############################################## responsive table design -->

              <?php
	         include('../conn.php');
		     $sql = "select * from schedules";
	         $query = $conn->query($sql);
			 while($row = $query->fetch_array()) {
			   ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo date('h:i A', strtotime($row['time_in'])); ?></td>
              <td><?php echo date('h:i A', strtotime($row['time_out'])); ?></td>
              <td>
               <div class="btn-group">
                <a class="btn btn-primary" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="fa fa-pencil-square-o"></span> Edit</a>
                <ul class="dropdown-menu">
                  <li><a href="#modal<?php echo $row['id']; ?>" data-toggle="modal" >Update</a></li>
                  <li><a href="#del<?php echo $row['id']; ?>" data-toggle="modal" >Delete</a></li>
                </ul>
              </div>
            </td>
          </tr>
<?php 
		          include('sched_modal.php');  
		     }
  ?>
<!-- ################################################### end -->
       
        </tbody>
      </table>
    </div>
	
	<!-- add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add new Schedule</h4>
      </div>
      <div class="modal-body">

       <!-- ############## -->
       
       <form id="form1" name="form3" method="post" action="sched_script.php">
        <div class="form-group">
         <label for="exampleInputEmail1"></label>
         <input type="hidden" name="id" value=""class="form-control" id="exampleInputEmail1" placeholder="">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Time_in</label>
         <input type="time" name="in"  value="" class="form-control" id="exampleInputEmail1" placeholder="time_in" required>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Time_out</label>
         <input type="time" name="out" value="" class="form-control" id="exampleInputPassword1" placeholder="time_out" required>
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
