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
            <h3 class="page-header"><i class="fa fa-minus"></i> Deduction List</h3>
           <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-minus"></i>Deduction List</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
			 <h4 style="color:#000000" class="panel-title">Add new Deduction</h4>
                <p><a class="btn btn-success" href="" title="Bootstrap 3 themes generator"><span class="fa fa-plus-square"></span> Add New</a></p>
                
              </header>
              <div class="table-responsive">
                <table width="101%" class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th><i class=""></i> Description</th>
                      <th><i class=""></i> Amount</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pagibig</td>
                      <td>150.00</td>
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
                    <tr>
                      <td>2</td>
                      <td>PhilHealth</td>
                      <td>1,500.00</td>
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
                    <tr>
                      <td>3</td>
                      <td>SSS</td>
                      <td>100.00</td>
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
