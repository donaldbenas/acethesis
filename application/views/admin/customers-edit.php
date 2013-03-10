<legend>Add Regular Customer</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."manage/customers/save/".$customers[0]->id ?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Firstname</label>
    <div class="controls">
      <input type="text" name="firstname" placeholder="Customer Firstname" value="<?php echo $customers[0]->fld_firstname ?>">
      <input type="text" name="status" value="regular" style="display:none">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Middlename</label>
    <div class="controls">
      <input type="text" name="middlename" placeholder="Customer Middlename"  value="<?php echo $customers[0]->fld_middlename ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Lastname</label>
    <div class="controls">
      <input type="text" name="lastname" placeholder="Customer Lastname" value="<?php echo $customers[0]->fld_lastname ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
      <textarea type="text" name="address" row="3" style="height:80px" placeholder="Customer Current Address"><?php echo $customers[0]->fld_address ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mobile</label>
    <div class="controls">
      <input type="text" name="mobile" placeholder="Customer Mobile #" value="<?php echo $customers[0]->fld_mobile ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Telephone</label>
    <div class="controls">
      <input type="text" name="telephone" placeholder="Customer Telephon #" value="<?php echo $customers[0]->fld_telephone ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Email</label>
    <div class="controls">
      <input type="text" name="email" placeholder="Customer Email" value="<?php echo $customers[0]->fld_email ?>">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
      <a class="btn" href="<?php echo base_url()."manage/customers" ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
