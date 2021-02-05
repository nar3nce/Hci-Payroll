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
            <h3 class="page-header"><i class="fa fa-table"></i> Attendance List</h3>
           <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-table"></i>Attendance List</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="col-lg-12">
            <section class="panel">
            
              </header>
              <div class="table-responsive">
                <table width="101%" class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th><i class=""></i> Name</th>
                      <th><i class=""></i> Work Schedule</th>
                      <th><i class=""></i> Time-in</th>
					  <th><i class=""></i> Time-out</th>
                      <th><i class=""></i> Date</th>
					  <th><i class=""></i> Report</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Narence Valencia</td>
					  <td>07:00 AM - 04:00 PM</td>
                      <td>11:56 PM</td>
                      <td>12:00 AM</td>
					  <td>Oct 17, 2018</td>
                      <td><a class="btn btn-success" href="#" title="Bootstrap 3 themes generator"><span class="fa fa-thumbs-up"></span> On-Time</a></td>                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Janelle Martinez</td>
					  <td>08:00 AM - 05:00 PM</td>
                      <td>9:56 PM</td>
                      <td>3:00 AM</td>
					  <td>nov 17, 2018</td>
					  <td><a class="btn btn-success" href="#" title="Bootstrap 3 themes generator"><span class="fa fa-thumbs-up"></span> On-Time</a></td>
					  </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Jhazz Zapanta</td>
					  <td>09:00 AM - 06:00 PM</td>
                      <td>11:32 PM</td>
                      <td>6:00 AM</td>
					  <td>dec 17, 2018</td>
					  <td><a class="btn btn-danger" href="" title="Bootstrap 3 themes generator"><span class="fa fa-thumbs-down"></span> Late</a></td>
                    </tr>
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
