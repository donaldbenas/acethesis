<form class="form-inline" method="post">
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
	<input type="text" name="date" style="width:170px;text-align:center;cursor:pointer" readonly class="inputDate" id="prependedInput" value="<?php if(!empty($before)&&!empty($after) ) echo $before." ~ ".$after; else echo date('Y-m-d')." ~ ".date("Y-m-d"); ?>" placeholder="Date Range">
  <button type="submit" class="btn"><i class="icon-filter"></i> Filter</button>
  <div class="input-prepend  pull-right">
    <span class="add-on">Download</span>
    <button type="button" id="prependedInput"  onclick="javascript: $('#pdf').submit();" class="btn btn-primary"><i class="icon-file icon-white"></i> PDF</button>
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
<table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>INVOICE ID</th>
		<th>CUSTOMER TYPE</th>
		<th>DATE CREATED</th>
		<th>DUE DATE</th>
		<th>A-PAID</th>
		<th>T-PRICE</th>
		<th>R-BALANCE</th>
    </tr>
  </thead>
  <tbody>
	<?php 
	if(!empty($customers)){
		$apaid=0;	$tprice=0; $rbal=0;
		foreach($customers as $rows){
			$paid=0; $price=0; $balance=0;
    ?>
	<tr>
		<td><?php echo $rows->fld_code ?></td>
		<td><?php echo ucwords($rows->fld_stat)." Customer" ?></td>
		<td><?php echo $rows->fld_dateCreated ?></td>
		<td><?php echo $rows->fld_dueDate ?></td>
		<td>PHP <?php if(!empty($rows->fld_paid)){ $paid = $rows->fld_paid; echo $paid;} ?></td>
		<td>PHP <?php if(!empty($rows->fld_price)){ $price = $rows->fld_price; echo $price;} ?></td>
		<td>PHP <?php if(!empty($rows->fld_price)&&!empty($rows->fld_paid)){ $balance = number_format(($rows->fld_price-$rows->fld_paid),2,'.',''); echo $balance;} ?></td>
	</tr>
	<?php 
		$apaid = $paid + $apaid;
		$tprice = $price + $tprice;
		$rbal = $balance + $rbal;
		}
	}
	?>
	<tr class="info">
		<td colspan="4"><b><span class="pull-right">Subtotal</span></b></td>
		<td><b>PHP <?php if(!empty($apaid)) echo number_format($apaid,2,'.',''); else echo "0.00"; ?></b></td>
		<td><b>PHP <?php if(!empty($tprice)) echo number_format($tprice,2,'.',''); else echo "0.00"; ?></b></td>
		<td><b>PHP <?php if(!empty($rbal)) echo number_format($rbal,2,'.',''); else echo "0.00"; ?></b></td>
	</tr>
  </tbody>
</table>
<script>	
$('.inputDate').DatePicker({
	format:'Y-m-d',
	date: $('.inputDate').val(),
	current: $('.inputDate').val(),
	calendars: 2,
	starts: 1,
	mode: 'range',
	position: 'bottom',
	onBeforeShow: function(){
		$('.inputDate').DatePickerSetDate($('.inputDate').val(), true);
	},
	onChange: function(formated, dates){
		var datval= formated.join(' ~ ')
		$('.inputDate').val(datval);
	}
});
$('input[name=date]').css('cursor','pointer');
</script>
