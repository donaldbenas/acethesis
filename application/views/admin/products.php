<table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>SUPPLIER</th>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>CODE</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."product/add" ?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
    <?php foreach($products as $rows){ ?>
    <tr>
		<td>
			<?php 
			foreach($suppliers as $sup){ 
				if($rows->fld_supplierID == $sup->id)
					echo $sup->fld_companyName;
			}
			?>
		</td>
		<td><?php echo $rows->fld_name ?></td>
		<td><?php echo substr($rows->fld_description,0,30).(strlen($rows->fld_description) > 30 ? " [...]" : "") ?></td>
		<td><?php echo $rows->fld_code ?></td>
		<td>PHP <?php echo $rows->fld_price ?></td>
		<td><?php echo $rows->fld_amount ?> PCS</td>
		<td>		
		 <a class="btn btn-primary" href="<?php echo base_url()."product/edit/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="<?php echo base_url()."product/delete/".$rows->id ?>"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php } ?>
  </thead>
</table>
