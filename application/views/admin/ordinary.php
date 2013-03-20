<form class="form-horizontal" method="post" action="<?php echo base_url()."transact/ordinary/save" ?>">
  <fieldset>
	  <div>
		  <legend>Invoice Details</legend>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">Invoice ID:</label>
			<div class="controls">
			  <input type="text" id="id" readonly name="invoiceID" placeholder="invoice number" value="<?php echo date("Y")."-".date("m")."-".sprintf('%06d',$invoices['0']->id); ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">Amount Paid</label>
			<div class="controls">
			  <input type="text" name="paid" placeholder="Amount Paid" value="<?php echo $invoiceReceipts[0]->fld_paid ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID">OR Number</label>
			<div class="controls">
			  <input type="text" name="ornumber" id="ornum" placeholder="OR Number" value="<?php echo $invoiceReceipts[0]->fld_orNumber ?>">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="invoiceID"></label>
			<div class="controls">
			  <button type="submit" class="btn btn-success" id="ornum" href="<?php echo base_url()."transact/ordinary/save" ?>"><i class="icon-plus icon-white"></i> Save</button>
			  <a class="btn" href="<?php echo base_url()."transact/ordinary/list" ?>"><i class="icon-backward"></i> Back</a>
			</div>
		  </div>
	  </div>
	  <br>
	  <div>
	  <legend>Invoice Items</legend>
	  <table class="table table-hover table-striped table-bordered">
	  <thead>
		<tr>
			<th>QTY</th>
			<th>ITEM</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
			<th>TOTAL</th>
			<th width="200px"><a class="btn" href="<?php echo base_url()."transact/ordinary/invoice/add/".$this->uri->segment(4) ?>"><i class="icon-plus"></i> Add Item</a></th>
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
			 <a class="btn btn-primary" href="<?php echo base_url()."transact/ordinary/invoice/edit/".$this->uri->segment(4)."/".$rows->fld_productCompanyID."/".$rows->fld_productID."/".$rows->fld_productName."/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
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
	</table>
	</div>
	<input type="hidden" value="<?php echo number_format($subtotal, 2, '.', ''); ?>" name="price">
	<input type="hidden" value="ordinary" name="type">
	<input type="hidden" value="<?php echo $this->uri->segment(4); ?>" name="id">
  </fieldset> 
</form>
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
 </script>
