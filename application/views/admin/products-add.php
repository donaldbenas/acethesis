<legend>Add Product Item</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."product/save"?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Supplier</label>
    <div class="controls">
		<select name="supplierID">
		<?php 
		foreach($company as $rows){ 
		?>
					<option value="<?php echo $rows->id ?>"><?php echo $rows->fld_name ?></option>
		<?php 
		} 
		?>
		</select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Name</label>
    <div class="controls">
      <input type="text" name="name" placeholder="Product Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Description</label>
    <div class="controls">
      <textarea type="text" name="description" row="3" style="height:80px" placeholder="Product Description"></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Code</label>
    <div class="controls">
      <input type="text" name="code" placeholder="Product Code">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Price</label>
    <div class="controls">
      <input type="text" name="price" placeholder="Product Price">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Amount</label>
    <div class="controls">
      <input type="text" name="amount" placeholder="Product Amount">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
      <a class="btn" href="<?php echo base_url()."product" ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
