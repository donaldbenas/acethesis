<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Store Billing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php echo base_url()."css/bootstrap.min.css"; ?>" rel="stylesheet">
	<link href="<?php echo base_url()."css/bootstrap-responsive.min.css"; ?>" rel="stylesheet">
	<link href="<?php echo base_url()."css/jquery-ui-1.10.0.custom.min.css"; ?>" rel="stylesheet">
	<link href="<?php echo base_url()."css/datepicker.css"; ?>" rel="stylesheet">
	<link href="<?php echo base_url()."css/admin.css"; ?>" rel="stylesheet">
	<script src="<?php echo base_url()."js/jquery-1.9.0.js"; ?>"></script>
	<script src="<?php echo base_url()."js/jquery-ui-1.10.0.custom.min.js"; ?>"></script>
	<script src="<?php echo base_url()."js/bootstrap.min.js"; ?>"></script>
	<?php if(!empty($datepicker)&&$datepicker=="true"){?>
	<script src="<?php echo base_url()."js/datepicker.jquery.js"; ?>"></script>
	<script src="<?php echo base_url()."js/datepicker.js"; ?>"></script>
	<?php } ?>
	<style>
	@media screen and (min-width: 980px) {
		body { padding-top: 60px; }
	}
	.frame-list{
		min-height: 750px;
	}
	.frame-invoice{
		min-height: 450px;
	}
	</style>
	<script language="javascript" type="text/javascript">
	  function resizeIframe(obj) {
		obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	  }
	</script>
</head>
<body>
