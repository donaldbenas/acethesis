<form>
<fieldset>
  <table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>COMPANY NAME</th>
		<th>REPRESENTATIVE ID</th>
		<th>REPRESENTATIVE NAME</th>
		<th>MOBILE #</th>
		<th>TELEPHONE #</th>
		<th>EMAIL</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."manage/suppliers/add" ?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
    <?php foreach($suppliers as $rows){ ?>
    <tr>
		<td><?php echo $rows->fld_companyName ?></td>
		<td><?php echo $rows->fld_representativeID ?></td>
		<td><?php echo $rows->fld_representativeName ?></td>
		<td><?php echo $rows->fld_mobile ?></td>
		<td><?php echo $rows->fld_telephone ?></td>
		<td><?php echo $rows->fld_email ?></td>
		<td>	
		 <a class="btn btn-primary" href="<?php echo base_url()."manage/suppliers/edit/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="<?php echo base_url()."manage/suppliers/delete/".$rows->id ?>"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php  } ?>
  </thead>
</table>
</fieldset>
</form>
 
