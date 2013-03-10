<legend>Add Regular Customer</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."manage/customers/save"?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Firstname</label>
    <div class="controls">
      <input type="text" name="firstname" placeholder="Customer Firstname">
      <input type="text" name="status" value="regular" style="display:none">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Middlename</label>
    <div class="controls">
      <input type="text" name="middlename" placeholder="Customer Middlename">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Lastname</label>
    <div class="controls">
      <input type="text" name="lastname" placeholder="Customer Lastname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
      <textarea type="text" name="address" row="3" style="height:80px" placeholder="Customer Current Address"></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mobile</label>
    <div class="controls">
      <input type="text" name="mobile" placeholder="Customer Mobile #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Amount</label>
    <div class="controls">
      <input type="text" name="telephone" placeholder="Customer Telephon #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Email</label>
    <div class="controls">
      <input type="text" name="email" placeholder="Customer Email">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
      <a class="btn" href="<?php echo base_url()."manage/customers" ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
