<!-- delete -->
<div class="modal fade" id="del<?php echo $row['emp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">

        Confirm delete? 

      </div>
      <div class="modal-footer">
       <form id="form1" name="form2" method="post" action="deduction_script.php?id=<?php echo $row['emp_id'];?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="delete" value="Delete" class="btn btn-warning" required>;
      </form>
    </div>
  </div>
</div>
</div>

<!-- edit -->
<div class="modal fade" id="modal<?php echo $row['emp_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Upadate Salary</h4>
      </div>
      <div class="modal-body">

       <!-- bodyyyyyyyyyyyy -->
       
       <form id="form1" name="form1" method="post" action="salary_script.php?id=<?php echo $row['emp_id'];?>">
        <div class="form-group">
         <label for="exampleInputEmail1">Select Deductions</label>
         <select name="deductions[]" multiple class="form-control">
		 <?php
          $s = "SELECT * FROM deductions";
          $q = $conn->query($s);
          while($row = $q->fetch_assoc()){
          ?>
		  <option value="<?php echo $row['amount']; ?>"><?php echo $row['deduction_name']; ?> - &#8369;<?php echo $row['amount']; ?></option>
		  <?php
          }
          ?>		  
          </select>
       
      </div>
     <input type="submit" name="update" value="Save Changes" class="btn btn-primary">
   </form>
   
   <!-- bodyyyyyyyyyyyy///// -->
 </div>
 <div class="modal-footer">
  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
</div>
</div>
</div>
</div>


<!-- java script to display total using id="#sam_ple" -->
<script src="../js/jquery.mini.js"></script>