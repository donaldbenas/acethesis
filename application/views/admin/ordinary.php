<style>
@media screen and (min-width: 980px) {
	body { padding-top: 0px; }
}
</style>
<form class="form-horizontal" method="post" action="<?php echo base_url()."transact/ordinary/save" ?>">
  <fieldset>
	  <div>
		  <legend>Transaction Details</legend>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">Invoice ID:</label>
			<div class="controls">
			  <input type="text" id="id" readonly name="invoiceID" placeholder="invoice number" value="<?php echo date("Y")."-".date("m")."-".sprintf('%06d',$invoices['0']->id); ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">OR Number</label>
			<div class="controls">
			  <input type="text" name="ornumber" id="ornum" readonly placeholder="OR Number" value="<?php if(!empty($invoiceReceipts[0]->fld_orNumber)) echo $invoiceReceipts[0]->fld_orNumber; else echo sprintf('%08d',$invoices['0']->id); ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">Amount Paid</label>
			<div class="controls">
			  <input type="text" name="paid" placeholder="Amount Paid" value="<?php echo $invoiceReceipts[0]->fld_paid ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID"></label>
			<div class="controls">
			  <a class="btn" onclick="javascript: parent.location.reload();"><i class="icon-backward"></i> Close</a>
			  <button type="submit" class="btn btn-success" id="publish" href="<?php echo base_url()."transact/ordinary/save" ?>"><i class="icon-plus icon-white"></i> Save</button>
			  <button type="button" class="btn btn-primary"  onclick="printDiv('printableArea')" <?php if($invoiceReceipts[0]->fld_paid=="") echo "disabled" ?>><i class="icon-print icon-white"></i> Print</button>
			</div>
		  </div>
	  </div>
	  <br>
	  <div>
	  <legend>Transaction Items</legend>
	  <table class="table table-hover table-striped table-bordered">
	  <thead>
		<tr>
			<th>QTY</th>
			<th>ITEM</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>TOTAL</th>
			<th width="200px"><a  href="#mymodal" role="button" class="btn" data-toggle="modal" onclick="javascript: submitpage('<?php echo base_url()."transact/ordinary/invoice/add/".$this->uri->segment(4)."/0/0"; ?>')"><i class="icon-plus"></i> Add Item</a></th>
		</tr>
	  </thead>
		<?php 
		$subtotal=0;
		if(!empty($invoiceItems)) 
			foreach($invoiceItems as $rows){ ?>
		<tr>
			<td><?php echo $rows->fld_productQuantity ?></td>
			<td><?php echo $rows->fld_productName ?></td>
			<td><?php echo substr($rows->fld_productDescription,0,30).(strlen($rows->fld_productDescription) > 30 ? " [...]" : "") ?></td>
			<td>PHP <?php echo $rows->fld_productPrice ?></td>
			<td>PHP <?php $total = $rows->fld_productQuantity*$rows->fld_productPrice; echo number_format(($total), 2, '.', ''); ?></td>
			<td>		
			 <a class="btn btn-primary" href="#mymodal" role="button" data-toggle="modal" onclick="javascript: submitpage('<?php echo base_url()."transact/ordinary/invoice/edit/".$this->uri->segment(4)."/".$rows->fld_productCompanyID."/".$rows->fld_productID."/".$rows->fld_productName."/".$rows->id ?>')"><i class="icon-pencil icon-white"></i> Edit</a>
			 <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
			</td>
		</tr>
		<?php 
			$subtotal = $subtotal + $total;
		} ?>
		<tr class="info">
			<td colspan="4"><span class="pull-right"><b>Subtotal</b></span></td>
			<td><b>PHP <?php echo number_format($subtotal, 2, '.', ''); ?></b></td>
			<td></td>
		</tr>
		<tr class="warning">
			<td colspan="4"><span class="pull-right"><?php if(($invoiceReceipts[0]->fld_paid -$subtotal)>=0) echo "<b>Change</b>"; else echo "<b>Remaining Balance</b>";?></span></td>
			<td><b>PHP <?php if(!empty($invoiceReceipts[0]->fld_paid)) echo number_format(ABS($invoiceReceipts[0]->fld_paid -$subtotal), 2, '.', ''); else echo "0.00"; ?></b></td>
			<td></td>
		</tr>
	</table>
	</div>
	<input type="hidden" value="<?php echo number_format($subtotal, 2, '.', ''); ?>" name="price">
	<input type="hidden" value="ordinary" name="type">
	<input type="hidden" value="<?php echo $this->uri->segment(4); ?>" name="id" id="invoiceID">
  </fieldset> 
</form>
<div id="mymodal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Item Product</h3>
  </div>
  <div class="modal-body">
    <p><iframe id="frame" class="frame-invoice" width="100%" scrolling="no" frameborder=0 ALLOWTRANSPARENCY="true" src=""></iframe></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true" id="close-product">Close</button>
    <button class="btn btn-primary" id="submit-product">Save changes</button>
  </div>
</div>
 <script>
	$('form').submit(function(){
		if($('input[name=paid]').val()!=""&&!isNaN($('input[name=paid]').val())){	
			return true;
		}else{
			$('#error-paid').remove();
			if($('input[name=paid]').val()==""){
				$('input[name=paid]').after("&nbsp;&nbsp;&nbsp;<span id=\"error-paid\" class=\"help-inline red\"style=\"display:none\">Required amount paid!</span>");
				$('#error-paid').fadeIn();
			}
			$('#isnan').remove();
			if(isNaN($('input[name=paid]').val())){
				$('input[name=paid]').after("&nbsp;&nbsp;&nbsp;<span id=\"isnan\" class=\"help-inline red\"style=\"display:none\">Required numeric input!</span>");
				$('#isnan').fadeIn();
			}
			return false;
		}
	});
	$('#submit-product').click(function(){		
		$("#frame").contents().find("#myform").submit();
	}); 
	$('#mymodal').bind('hide', function () {
			location.reload(true);
	});
	function submitpage(html){
		$('#frame').attr('src',html);
	}	
	function printDiv(divName) {
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		document.body.innerHTML = originalContents;
	}		
 </script>
<div id="printableArea" style="display:none">
	<style>
		@media print{	
			body{
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  -webkit-print-color-adjust:exact;
			  font-size: 10px;
			}
			label{
			  margin-bottom: 10px;
			}
			table {
				border:solid 1px #C5C5C5 !important;
			}
			th, td {
				border:solid 1px #C5C5C5 !important;
			}
			th{
				background-color: #ACDDFD !important;
				color:#999;
			}
			#subtotal{
				text-align:	right;
			}
			#sales{
				text-align:right;
			}
			h3, p{
				margin:0px;
			}
		}
	</style>
	<h3 id="sales">Sales Receipt</h3>
	<p id="sales"><b>Date:</b> <span><?php echo date("F d, Y")?></span></p>
	<p id="sales"><b>Receipt No.:</b> <span><?php if(!empty($invoiceReceipts[0]->fld_orNumber)) echo $invoiceReceipts[0]->fld_orNumber; else echo sprintf('%08d',$invoices['0']->id); ?></span></p>
	<br>
	<p><b>Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ____________________________________________________________</p>
	<p><b>Address</b>&nbsp;&nbsp;&nbsp;: ____________________________________________________________</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ____________________________________________________________</p>
	<br>
	<table class="table table-hover table-bordered table-condensed" id="print-table">
		<thead>
			<tr>
				<th>Code</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$subtotal=0;
		if(!empty($invoiceItems)){ 
			foreach($invoiceItems as $rows){ ?>
			<tr>
				<td><?php echo $rows->fld_productCode ?></td>
				<td><?php echo $rows->fld_productName ?></td>
				<td><?php echo $rows->fld_productQuantity ?></td>
				<td>PHP <?php echo number_format($rows->fld_productPrice,2,'.','') ?></td>
				<td>PHP <?php echo number_format(($rows->fld_productPrice*$rows->fld_productQuantity),2,'.','') ?></td>
			</tr>
		<?php 
			$subtotal = $subtotal + $total;
		}
		} 
		if(count($invoiceItems)<=15){
		for($i=0;$i<(15-count($invoiceItems));$i++){
		?>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		<?php 
		}
		}
		?>
			<tr>
				<td colspan="4" id="subtotal"><b>Subtotal</b></td>
				<td><b>PHP <?php echo number_format($subtotal,2,'.','')?></b></td>
			</tr>
		</tbody>
	</table>
	<br>
	<p>If you have any questions about us thie invoice # <?php echo date("Y")."-".date("m")."-".sprintf('%06d',$invoices['0']->id); ?>! Please Contaact 451-9864.</p>
	<p><i>Thank You For Your Business!</i></p>
</div>
