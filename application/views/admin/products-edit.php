<legend>Edit Product Item</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."product/save/".$products[0]->id ?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Supplier</label>
    <div class="controls">
		<select name="supplierID">
		<?php 
		foreach($company as $rows){ 
			if($rows->id == $products[0]->fld_productCompanyID){
		?>
			<option value="<?php echo $rows->id ?>" selected><?php echo $rows->fld_name ?></option>
		<?php }else{
		?>
			<option value="<?php echo $rows->id ?>"><?php echo $rows->fld_name ?></option>
		<?php 
			}
		} 
		?>
		</select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Name</label>
    <div class="controls">
      <input type="text" name="name" placeholder="Product Name" value="<?php echo $products[0]->fld_name ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Description</label>
    <div class="controls">
      <textarea type="text" name="description" row="3" style="height:80px" placeholder="Product Description"><?php echo $products[0]->fld_description ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Code</label>
    <div class="controls">
      <input type="text" name="code" placeholder="Product Code" value="<?php echo $products[0]->fld_code ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Price</label>
    <div class="controls">
      <input type="text" name="price" placeholder="Product Price" value="<?php echo $products[0]->fld_price ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Quantity</label>
    <div class="controls">
      <input type="text" name="amount" placeholder="Product Amount" value="<?php echo $products[0]->fld_amount ?>">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Save</button>
      <a class="btn" href="<?php echo base_url()."product" ?>"><i class="icon-backward"></i> Back</a>
    </div>
  </div>
</form>
