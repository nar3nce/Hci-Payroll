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
       <form id="form1" name="form2" method="post" action="employee_script.php?id=<?php echo $row['emp_id'];?>">
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
        <h4 class="modal-title">Upadate Employee</h4>
      </div>
      <div class="modal-body">

       <!-- bodyyyyyyyyyyyy -->
       
       <form id="form1" name="form1" method="post" action="employee_script.php?id=<?php echo $row['emp_id'];?>">
        <div class="form-group">
         <label for="exampleInputPassword1">Position</label>
         <select class="form-control m-bot15" name="position">
          <?php
          $s = "SELECT * FROM position";
          $q = $conn->query($s);
          while($prow = $q->fetch_assoc()){
            echo "
            <option value='".$prow['id']."'>".$prow['description']."</option>
            ";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
         <label for="exampleInputPassword1">Schedules</label>
         <select class="form-control m-bot15" name="schedule">
           <?php
          $s1 = "SELECT * FROM schedules";
          $q1 = $conn->query($s1);
          while($arow = $q1->fetch_assoc()){
           ?>
                              <option value="<?php echo $arow['id']; ?>"><?php echo date('h:i A', strtotime($arow['time_in'])); ?> - <?php echo date('h:i A', strtotime($row['time_out'])); ?></option>
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