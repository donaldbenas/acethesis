<table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>NAME</th>
		<th>DUE DATE</th>
		<th>INVOICE #</th>
		<th>OR #</th>
		<th>A-PAID</th>
		<th>T-PRICE</th>
		<th>R-BALANCE</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."transact/regular/new" ?>"><i class="icon-plus"></i> Add Customer</a></th>
	</tr>
  </thead>
	<?php 
	$subtotal=0;
	if(!empty($invoices)) 
		foreach($invoices as $rows){ ?>
	<tr>
		<td><?php echo $rows->fld_lastname.", ".$rows->fld_firstname ?></td>
		<td><?php echo $rows->fld_dueDate ?></td>
		<td><?php echo $rows->fld_code ?></td>
		<td><?php echo $rows->fld_orNumber ?></td>
		<td>PHP <?php echo $rows->fld_paid ?></td>
		<td>PHP <?php echo $rows->fld_price ?></td>
		<td>PHP <?php echo number_format(($rows->fld_price-$rows->fld_paid), 2, '.', ''); ?></td>
		<td>		
		 <a class="btn btn-primary" href="<?php echo base_url()."transact/regular/edit/".$rows->fld_invoiceID ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>
