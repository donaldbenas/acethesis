<form>
<fieldset>
  <table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Mobile #</th>
		<th>Telephone #</th>
		<th>Email</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."manage/customers/add"?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
	<?php foreach($customers as $rows) { ?>
    <tr>
		<td><?php echo $rows->fld_firstname ?></td>
		<td><?php echo $rows->fld_middlename ?></td>	
		<td><?php echo $rows->fld_lastname ?></td>	
		<td><?php echo $rows->fld_mobile ?></td>
		<td><?php echo $rows->fld_telephone ?></td>
		<td><?php echo $rows->fld_email ?></td>
		<td>	
		 <a class="btn btn-primary" href="<?php echo base_url()."manage/customers/edit/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="<?php echo base_url()."manage/customers/edit/".$rows->id ?>"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php } ?>
  </thead>
</table>
</fieldset>
</form>
