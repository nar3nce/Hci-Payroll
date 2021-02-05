<!-- delete -->
<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
	  <form id="form1" name="form2" method="post" action="deduction_script.php?id=<?php echo $row['id'];?>">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <input type="submit" name="delete" value="Delete" class="btn btn-warning" required>;
	  </form>
      </div>
    </div>
  </div>
</div>

<!-- edit -->
<div class="modal fade" id="modal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Upadate Schedule</h4>
      </div>
      <div class="modal-body">

       <!-- bodyyyyyyyyyyyy -->
       
       <form id="form1" name="form1" method="post" action="deduction_script.php?id=<?php echo $row['id'];?>">
        <div class="form-group">
         <label for="exampleInputEmail1"></label>
         <input type="hidden" name="id" value="<?php echo $row['id'];?>"class="form-control" id="exampleInputEmail1" placeholder="">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Description</label>
         <input type="text" name="desc"  value="<?php echo $row['deduction_name']; ?>" class="form-control" pattern ="[A-Za-z]{5,}" title="(no spaces, numbers or special characters. more than 5 characters)"  required>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Amount</label>
         <input type="number" name="amount" value="<?php echo $row['amount'];?>" class="form-control" id="exampleInputPassword1" min="150" max="3000" required>
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