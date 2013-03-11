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
		 <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php } ?>
  </thead>
</table>
</fieldset>
</form>
