<form id="myform" class="form-horizontal" method="post" action="<?php echo base_url()."transact/".$this->uri->segment(2)."/invoice/save/".$this->uri->segment(9) ?>">
  <input type="text" name="invoice" value="<?php echo $this->uri->segment(5)?>" style="display:none">
  <input type="text" name="name" value="<?php echo urldecode($this->uri->segment(8))?>" style="display:none" id="productName">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Supplier</label>
    <div class="controls">
		<select name="company" id="comp">
			<option value="0">Choose</option>
		<?php foreach($company as $rows){ 
			if($rows->id == $this->uri->segment(6)){
		?>
			<option value="<?php echo $rows->id ?>" selected><?php echo $rows->fld_name ?></option>
		<?php }else{
		?>
			<option value="<?php echo $rows->id ?>"><?php echo $rows->fld_name ?></option>
		<?php 
			}
		} ?>
		</select>
    </div>
  </div>
  <?php if($this->uri->segment(6)!=""&&$this->uri->segment(6)!="0"){?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Products</label>
    <div class="controls">
		<select name="productID" id="prod">
			<option value="0">Choose</option>
		<?php foreach($product as $rows){ 
			if($rows->id == $this->uri->segment(7)){
			?>
			<option value="<?php echo $rows->id ?>" selected><?php echo $rows->fld_name ?></option>
		<?php }else{
		?>
			<option value="<?php echo $rows->id ?>"><?php echo $rows->fld_name ?></option>
		<?php 
			}
		} ?>
		</select>
    </div>
  </div>
  
  <?php if($this->uri->segment(7)!=""&&$this->uri->segment(8)!=""&&$this->uri->segment(7)!="0"){?>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Quantity</label>
    <div class="controls">
      <input type="text" name="quantity" placeholder="Quantity">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Code</label>
    <div class="controls">
      <input type="text" name="code" placeholder="Product Code" readonly value="<?php echo $details[0]->fld_code ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Description</label>
    <div class="controls">
		<textarea type="text" name="description" row="3" style="height:180px" placeholder="Product Description" readonly><?php echo $details[0]->fld_description ?></textarea>
	</div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Price</label>
    <div class="controls">
      <input type="text" name="price" placeholder="Product Price" readonly value="<?php echo $details[0]->fld_price ?>">
    </div>
  </div>
  <?php } ?>
  <?php } ?>  
  <div class="control-group">
    <div class="controls">
	  <?php if($this->uri->segment(6)!="" && $this->uri->segment(7)!=""&& $this->uri->segment(8)!=""){ ?>
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
	  <?php  } ?>
      <a class="btn" href="<?php echo base_url()."transact/".$this->uri->segment(2)."/edit/".$this->uri->segment(5) ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
<script>
	$('form').submit(function(){
		if( $('input[name=quantity]').val() == 0 || $('input[name=quantity]').val() == "" )
			return false;
		else
			return true;
	});
	$('select[name=company]').change(function(){
		var compID = $(this).val();
		window.open('<?php echo base_url()."transact/".$this->uri->segment(2)."/invoice/edit/".$this->uri->segment(5)."/" ?>'+compID+'/<?php  echo end(explode("/","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")) ?>','_self');
	});
	$('select[name=productID]').change(function(){
		var prodID = $(this).val();
		var prodName = $('select[name=productID] option:selected').text();
		window.open('<?php echo base_url()."transact/".$this->uri->segment(2)."/invoice/edit/".$this->uri->segment(5)."/".$this->uri->segment(6)."/" ?>'+prodID+'/'+prodName+'/<?php  echo end(explode("/","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")) ?>','_self');
	});
</script>
