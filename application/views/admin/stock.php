<form class="form-inline" method="post" action="<?php base_url()."report/stock" ?>">
<input type="hidden" name="update" value="false">
  <label>Sort By:  </label>
  <select name="supplierID">
	<option value="0" <?php if(!empty($supplierID)) echo "selected" ?>>Supplier Names</option>
	<?php 
	if(!empty($suppliers)){
		foreach($suppliers as $rows){
			if($supplierID == $rows->fld_name){
	?>
	<option value="<?php echo $rows->fld_name ?>" selected><?php echo $rows->fld_name ?></option>
	<?php 	}else{?>
	<option value="<?php echo $rows->fld_name ?>" ><?php echo $rows->fld_name ?></option>
	<?php 
			}
		}
	}
	?>
  </select>
  <select name="productID">
	<option value="0" <?php if(!empty($productID)) echo "selected" ?>>Product Names</option>
	<?php 
	if(!empty($products)){
		foreach($products as $rows){
			if($productID == $rows->fld_name){
	?>
	<option value="<?php echo $rows->fld_name ?>" selected><?php echo $rows->fld_name ?></option>
	<?php 	}else{?>
	<option value="<?php echo $rows->fld_name ?>" ><?php echo $rows->fld_name ?></option>
	<?php 
			}
		}
	}
	?>
  </select>
  <input type="text" name="date" style="width:170px;text-align:center;cursor:pointer" readonly class="inputDate" id="prependedInput" value="<?php if(!empty($date)) echo $date; else echo date('Y-m-d'); ?>" placeholder="Date Range">
  <button type="submit" class="btn"><i class="icon-filter"></i> Filter</button>
  <div class="btn-group pull-right">
    <button type="button" id="prependedInput"  onclick="javascript: $('#pdf').submit();" class="btn btn-primary"><i class="icon-download-alt icon-white"></i> Download</button>
    <button type="button" id="prependedInput"  onclick="javascript: $('#updatestock').submit();" class="btn btn-primary"  <?php if($update){ echo "disabled"; }?>><i class="icon-refresh icon-white"></i> Update Stock</button>
  </div>
  
</form>
<form class="form-inline" method="post" id="pdf" style="display:none" action="<?php echo base_url()."report/dompdf" ?>">
  <label>Sort By:  </label>
  <select name="type">
	<option value="0" <?php if(!empty($type)) if($type=='0') echo "selected" ?>>Customer Types</option>
	<option value="ordinary" <?php if(!empty($type)) if($type=='ordinary') echo "selected" ?>>Ordinary Customer</option>
	<option value="regular" <?php if(!empty($type)) if($type=='regular') echo "selected" ?>>Regular Customer</option>
  </select>
  <select name="status">
	<option value="0" <?php if(!empty($status)) if($status=='0') echo "selected" ?>>Customer Status</option>
	<option value="paid" <?php if(!empty($status)) if($status=='paid') echo "selected" ?>>Paid Customer</option>
	<option value="unpaid" <?php if(!empty($status)) if($status=='unpaid') echo "selected" ?>>Unpaid Customer</option>
  </select>
	<input type="text" name="date" style="width:170px;text-align:center" readonly class="inputDate" id="prependedInput" value="<?php if(!empty($before)&&!empty($after) ) echo $before." ~ ".$after; else echo date('Y-m-d')." ~ ".date("Y-m-d"); ?>" placeholder="Date Range">
  <button type="submit" class="btn"><i class="icon-filter"></i> Filter</button>
  <a href="<?php echo base_url()."report/dompdf" ?>" class="btn pull-right">Download PDF</a>
</form>
<form method="post" action="<?php echo base_url()."report/stock" ?>" id="updatestock">
<input type="hidden" name="update" value="true">
<input type="hidden" name="productID" value="<?php echo $productID  ?>">
<input type="hidden" name="supplierID" value="<?php echo $supplierID  ?>">
<table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>SUPPLIER NAME</th>
		<th>PRODUCT NAME</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th>SOLD</th>
		<th>STOCK-ON-HAND</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if(!empty($stocks)){
		foreach($stocks as $rows){
	?>
	<tr>
		<td><?php echo $rows['company'] ?><input type="hidden" name="company[]" value="<?php echo $rows['company'] ?>"></td>
		<td><?php echo $rows['name'] ?><input type="hidden" name="id[]" value="<?php echo $rows['id'] ?>"><input type="hidden" name="name[]" value="<?php echo $rows['name'] ?>"></td>
		<td><?php echo $rows['description'] ?><input type="hidden" name="description[]" value="<?php echo $rows['description'] ?>"></td>
		<td><?php echo $rows['price'] ?><input type="hidden" name="price[]" value="<?php echo $rows['price'] ?>"></td>
		<td><?php echo $rows['quantity'] ?> PCS<input type="hidden" name="quantity[]" value="<?php echo $rows['quantity'] ?>"></td>
		<td><?php echo $rows['sold'] ?> PCS<input type="hidden" name="sold[]" value="<?php echo $rows['sold'] ?>"></td>
		<td><?php echo ($rows['quantity']-$rows['sold']) ?> PCS <input type="hidden" name="amount[]" value="<?php echo ($rows['quantity']-$rows['sold']) ?>"></td>
    </tr>
    <?php 
		}
	}	
    ?>
  </tbody>
</table>
</form>
<script>	
$('.inputDate').DatePicker({
	format:'Y-m-d',
	date: $('.inputDate').val(),
	current: $('.inputDate').val(),
	starts: 1,
	position: 'bottom',
	onBeforeShow: function(){
		$('.inputDate').DatePickerSetDate($('.inputDate').val(), true);
	},
	onChange: function(formated, dates){
		$('.inputDate').val(formated);
		if ($('#closeOnSelect input').attr('checked')) {
			$('.inputDate').DatePickerHide();
		}
	}
});
$('input[name=date]').css('cursor','pointer');
</script>
