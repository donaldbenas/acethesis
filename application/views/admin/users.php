<form>
<fieldset>
  <table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>FIRST NAME</th>
		<th>LAST NAME</th>
		<th>USERNAME</th>
		<th>TYPE</th>
		<th>EMAIL</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."manage/users/add" ?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
    <?php  foreach($users as $rows){ ?>
    <tr>
		<td><?php echo $rows->fld_firstname ?></td>
		<td><?php echo $rows->fld_lastname ?></td>
		<td><?php echo $rows->fld_username ?></td>
		<td><?php echo $rows->fld_type ?></td>
		<td><?php echo $rows->fld_email ?></td>
		<td>	
		 <a class="btn btn-primary" href="<?php echo base_url()."manage/users/edit/".$rows->fld_userID ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="#myModal" role="button" data-toggle="modal" onclick="erase('<?php echo $rows->fld_userID  ?>','<?php echo $rows->fld_firstname  ?>','<?php echo $rows->fld_lastname  ?>')"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php } ?>
  </thead>
</table>
</fieldset>
</form>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation for Delete</h3>
  </div>
  <div class="modal-body">
    <p id="modal-body-text"></p>
  </div>
  <div class="modal-footer">
    <a class="btn btn-danger" id="modal-footer-delete"><i class="icon-ok icon-white"></i> Yes</a>
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i> No</button>
  </div>
</div>
<script>
	function erase(id,name,lname){
		$('#modal-body-text').html("Do you wish to delete user <b>"+name+" "+lname+"</b> and all data related to it?");
		$('#modal-footer-delete').attr("href","<?php echo base_url()."manage/users/delete/" ?>"+id);
	}
</script>
