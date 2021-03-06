<legend>Add User</legend>
<form class="form-horizontal" method="post" action="<?php echo base_url()."manage/users/save"?>">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
      <input type="text" name="username" placeholder="User Username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Password</label>
    <div class="controls">
	  <input type="password" name="password" placeholder="User Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Repeat Password</label>
    <div class="controls">
	  <input type="password" name="passwordr" placeholder="User Repeat Password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Type</label>
    <div class="controls">
      <select name="type">
		<option value="employee">Employee</option>
		<option value="owner">Owner</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Firstname</label>
    <div class="controls">
      <input type="text" name="firstname" placeholder="User Firstname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Middlename</label>
    <div class="controls">
      <input type="text" name="middlename" placeholder="User Middlename">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Lastname</label>
    <div class="controls">
      <input type="text" name="lastname" placeholder="User Lastname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Address</label>
    <div class="controls">
      <textarea type="text" name="address" row="3" style="height:80px" placeholder="User Address"></textarea>
   </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Mobile</label>
    <div class="controls">
      <input type="text" name="mobile" placeholder="User Mobile #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Telephone</label>
    <div class="controls">
      <input type="text" name="telephone" placeholder="User Telephone #">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Email</label>
    <div class="controls">
      <input type="email" name="email" placeholder="User Email">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success"><i class="icon-download-alt icon-white"></i> Submit</button>
      <a class="btn" href="<?php echo base_url()."manage/users" ?>"><i class="icon-backward"></i> Back</a>
   </div>
  </div>
</form>
