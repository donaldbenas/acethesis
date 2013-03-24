<style>
.modal-body {
    min-height: 980px;
    height: 850px;
}
</style>
<div class="row-fluid">
	<div class="pull-left span4">
		<legend>Transaction List</legend>
		<table class="table table-hover table-striped table-bordered">
		  <thead>
			<tr>
				<th>INVOICE #</th>
				<th>PRICE</th>
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
				<td>PHP <?php echo $rows->fld_price ?></td>
				<td>		
				 <a class="btn btn-primary" id="edit-me<?php echo $count?>" href="<?php echo base_url()."transact/ordinary/edit/".$rows->fld_invoiceID ?>" onclick="return false"><i class="icon-pencil icon-white"></i> Edit</a>
				 <a class="btn btn-danger" href="#myModal" role="button" data-toggle="modal" onclick="erase('<?php echo $rows->fld_invoiceID  ?>','<?php echo $rows->fld_code  ?>')"><i class="icon-trash icon-white"></i> Delete</a>
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
		<iframe id="frame" class="frame-list" src="" width="100%" frameborder=0 allowtransparency="true" onload='javascript:resizeIframe(this);'>
		</iframe>
	</div>
</div>
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
	function erase(id,name){
		$('#modal-body-text').html("Do you wish to delete invoie # <b>"+name+"</b> and all data related to it?");
		$('#modal-footer-delete').attr("href","<?php echo base_url()."transact/ordinary/delete/" ?>"+id);
	}
</script>
