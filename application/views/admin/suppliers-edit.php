<legend>Add Supplier</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."manage/suppliers/save/".$suppliers[0]->id ?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Company</label>
    <div class="controls">
      <input type="text" name="name" value="<?php echo $suppliers[0]->fld_companyName ?>" placeholder="Supplier Company Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Representative</label>
    <div class="controls">
	  <input type="text" name="representative" value="<?php echo $suppliers[0]->fld_representativeName ?>" placeholder="Supplier Representative Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Representative ID</label>
    <div class="controls">
      <input type="text" name="repID" value="<?php echo $suppliers[0]->fld_representativeID ?>" placeholder="Supplier Representative ID #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Address</label>
    <div class="controls">
      <textarea type="text" name="address" row="3" style="height:80px" placeholder="Supplier Address"><?php echo $suppliers[0]->fld_address ?></textarea>
   </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mobile</label>
    <div class="controls">
      <input type="text" name="mobile" value="<?php echo $suppliers[0]->fld_mobile ?>" placeholder="Supplier Mobile #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Telephone</label>
    <div class="controls">
      <input type="text" name="telephone" value="<?php echo $suppliers[0]->fld_telephone ?>" placeholder="Supplier Telephone #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Email</label>
    <div class="controls">
      <input type="text" name="email" value="<?php echo $suppliers[0]->fld_email ?>" placeholder="Company Email">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
      <a class="btn" href="<?php echo base_url()."manage/suppliers" ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
