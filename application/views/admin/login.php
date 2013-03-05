<style type="text/css">
  body {
	padding-top: 40px;
	padding-bottom: 40px;
	background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAADCAYAAACuyE5IAAAAKklEQVQIW2PkZ+U/wwACjAzGDP8ZzoLZSHxGsAKYJBaakZ+N/z82nTCDAE5oEQXMxXfXAAAAAElFTkSuQmCC) repeat;
  }

  .form-signin {
	max-width: 450px;
	padding: 19px 29px 29px;
	display:block;
	margin: 0 auto;
    color:#8E8E8E;
  }
  .form-signin-heading{
	width: 450px;
	font-family: 'Fjalla One'sans-serif;
	text-shadow: 1px 0px #000000;
  }
  .form-signin-heading .or{
	font-size: 13px;	
	vertical-align: middle;
	margin-left: 22%;
  }
  .form-signin-heading .login{
	float: left;
  }
  .form-signin-heading .signup{
	float: right;
	cursor: pointer;
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
	margin-bottom: 10px;
  }
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
	font-size: 16px;
	height: 18px;
	padding: 9px 10px;
	margin-bottom: 12px;	
	width: 393px;
  }
  .input-prepend span.add-on{
	height: 18px;
	padding: 9px;
  }
  #login{
	width: 450px;
  }
  #myModalLabel{
	  padding: 10px 0px;
  }
  #signup-head{
	  color:#0084C4;
	  font-size:30px;
	  text-shadow: 1px 0px #949CFE;
  }
  #signup-body .control-group{
	  margin-bottom: 10px;
  }
  #signup-body input[type=text], #signup-body input[type=password]{
	  padding-left: 10px;
  }
  @font-face {
	  font-family: 'Fjalla One';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Fjalla One'), local('FjallaOne-Regular'), url('font/login.woff') format('woff');
  }
</style>
<script>
$(window).ready(function(){
	var w = $(window);
	var f = $('.form-signin');
	f.css({
		'position':'absolute',
		'top':Math.abs(((w.height() - f.outerHeight()) / 2) + w.scrollTop()),
		'left':Math.abs(((w.width() - f.outerWidth()) / 2) + w.scrollLeft())
	});
	var user="";
	var pass="";
	$('input[name=username]').keyup(function(){
		user = $(this).val();
		$(this).validate();
	});
	$('input[name=password]').keyup(function(){
		pass = $(this).val();
		$(this).validate();
	});
	$.fn.validate = function(){
		if((user!="")&&(pass!="")){
			$("#login").fadeIn("slow");
		}else{
			$("#login").fadeOut("slow");
		}
	}
	var npass="";
	var rpass="";
	$('input[name=newpassword]').keyup(function(){
		npass = $(this).val();
		$(this).validateSignup();
	});
	$('input[name=repeatpassword]').keyup(function(){
		rpass = $(this).val();
		$(this).validateSignup();
	});
	$.fn.validateSignup = function(){
		if(npass===rpass){
			$("#signup-submit").removeAttr("disabled") ;
			$('input[name=repeatpassword]').removeAttr("style");
			$('input[name=newpassword]').removeAttr("style");
		}else{
			$("#signup-submit").attr("disabled","");
			$('input[name=repeatpassword]').css("border","1px solid #FF8A8A");
			$('input[name=newpassword]').css("border","1px solid #FF8A8A");
		}
	}
});

</script>
<form class="form-signin" method="post" action="<?php echo base_url()."login" ?>">
	<h2 class="form-signin-heading"><span class="login">LOGIN HERE</span><span class="or">-OR-</span><a href="#myModal" role="button" class="pull-right" data-toggle="modal"><span class="signup">SIGNUP</span></a></h2>
	<div class="input-prepend">
	  <span class="add-on"><i class="iconic-user"></i></span>
	  <input type="text" id="appendedInput" name="username" placeholder="Username">
	</div>
	<div class="input-prepend">
	  <span class="add-on"><i class="iconic-key"></i></span>
	  <input type="password" id="appendedInput" name="password" placeholder="Password">
	</div>	
	<?php if($successMessage!=""){ ?><blockquote><small><font style="color:#00CA33"><?php echo $successMessage ?></font></small></blockquote>
	<?php }elseif($errorMessage==""){ ?><blockquote><small>You must input username and password to enable submit!</small></blockquote>
	<?php }else{ ?><blockquote><small><font style="color:#FF6C6C"><?php echo $errorMessage ?></font></small></blockquote> <?php } ?>
	<input type="submit" class="btn btn-primary btn-large" type="Login" id="login" name="login" style="display:none">
</form>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" class="form-signin-heading"><span id="signup-head">~ SIGNUP HERE</span></h3>
  </div>
  <div class="modal-body">
	<div class="span5">
		<form class="form-horizontal" method="post" action="<?php echo base_url()."login/signup"?>">
			<fieldset id="signup-body">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Username</label>
					<div class="controls">
					  <input type="text"  name="username" placeholder="Username" value="<?php if($username!="") echo $username; ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Password</label>
					<div class="controls">
					  <input type="password" name="newpassword" placeholder="Password" value="<?php if($password!="") echo $password; ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Repeat Password</label>
					<div class="controls">
					  <input type="password" name="repeatpassword" placeholder="Repeat Password" value="<?php if($password!="") echo $password; ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">User Type</label>
					<div class="controls">
					  <select name="type">
						<option value="client">Client</option>
						<option value="manager">Manager</option>
					  </select>
					</div>
				</div>
				<hr>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Administrator Key</label>
					<div class="controls">
					  <input type="password" name="key" placeholder="Key">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail"></label>
					<div class="controls">
					  <input type="submit" class="btn btn-primary" placeholder="Key" id="signup-submit">
					</div>
				</div>
			</fieldset>
		</form>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
        
