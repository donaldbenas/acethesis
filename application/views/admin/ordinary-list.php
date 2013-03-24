<div class="row-fluid">
	<div class="pull-left span4">
		<legend>Transaction List</legend>
		<table class="table table-hover table-striped table-bordered">
		  <thead>
			<tr>
				<th>INVOICE #</th>
				<th>Status</th>
				<th width="200px"><a class="btn" id="add-new" href="<?php echo base_url()."transact/ordinary" ?>" onclick="return false"><i class="icon-plus"></i> New Transaction</a></th>
			</tr>
		  </thead>
			<?php 
			$subtotal=0;
			$count = 0;
			if(!empty($invoices)){ 
				foreach($invoices as $rows){ ?>
			<tr>
				<td><?php echo $rows->fld_code ?></td>
				<td><?php echo $rows->fld_status ?></td>
				<td>		
				 <a class="btn btn-primary" id="edit-me<?php echo $count?>" href="<?php echo base_url()."transact/ordinary/edit/".$rows->fld_invoiceID ?>" onclick="return false"><i class="icon-pencil icon-white"></i> Edit</a>
				 <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
				</td>
			</tr>
			<?php $count++;}
			} ?>
			<tr>
				<td colspan=3><button type="button" class="btn btn-warning" onclick="location.reload(true)"><i class="icon-refresh icon-white"></i> Update Transaction List</button></td>
			</tr>
		</table>
	</div>
	<div class="pull-right span8">
		<iframe id='frame' src="" width="100%" frameborder=0 allowtransparency="true" onload='javascript:resizeIframe(this);'>
		</iframe>
	</div>
</div>
<script>
	$('#add-new').click(function(){
		var src = $(this).attr('href');
		$('#frame').removeAttr('src');
		$('#frame').attr('src',src);
	});
	for(i=0;i<<?php echo $count ?>;i++){
		$('#edit-me'+i).click(function(){
			var href = $(this).attr('href');
			$('#frame').removeAttr('src');
			$('#frame').attr('src',href);
		});
	}
	var myFrame = $('frame');
	myFrame.load(function() {
		myFrame.contents().find('#publish').click(function() {
		  myFrame.load(function() {
			location.reload();
		  });

		});
	});
</script>
