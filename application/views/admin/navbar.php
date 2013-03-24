<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
	<div class="container-fluid">
	  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="brand" href="<?php echo base_url()."home" ?>" >Administrator</a>
	  <div class="nav-collapse collapse">
		<ul class="nav">
		  <li class="dropdown <?php echo ($active == "transact" ? "active" : "") ?>">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."transact/ordinary/list" ?>">Ordinary Customer</a></li>
			  <li><a href="<?php echo base_url()."transact/regular" ?>">Regular Customer</a></li>
			  
			</ul>
		  </li>
		  <?php if($previledge=="owner"){ ?>
		  <li class="dropdown <?php echo ($active == "report" ? "active" : "") ?>">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."report/daily" ?>">Daily Sale</a></li>
			  <li><a href="<?php echo base_url()."report/stock" ?>">Stock Inventory</a></li>
			</ul>
		  </li>
		  <?php } ?>
		  <li class="dropdown <?php echo ($active == "manage" ? "active" : "") ?>">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Management <b class="caret"></b></a>
			<ul class="dropdown-menu">				
			  <?php if($previledge=="owner"){ ?>
			  <li><a href="<?php echo base_url()."manage/users" ?>">Users</a></li>
			  <?php } ?>
			  <li><a href="<?php echo base_url()."manage/customers" ?>">Customers</a></li>
			  <li><a href="<?php echo base_url()."manage/suppliers" ?>">Suppliers</a></li>
			</ul>
		  </li>
		  <li <?php echo "class=".($active == "product" ? "\"active\"" : "") ?>>
			<a href="<?php echo base_url()."product" ?>">Products</a>
		  </li>
		  <li <?php echo "class=".($active == "about" ? "\"active\"" : "") ?>>
			<a href="<?php echo base_url()."about" ?>">About</a>
		  </li>
		</ul>
		<ul class="nav">
		  <li>
			<a href="<?php echo base_url()."logout" ?>" id="logout">Logout</a>
		  </li>
		</ul>
		<ul class="nav pull-right">
		  <li>
			<a href="<?php echo base_url()."logout" ?>" id="logout"><?php echo date("Y-m-d"); ?></a>
		  </li>
		</ul>
	  </div>
	</div>
  </div>
</div>
<?php  if(!empty($breadcrumbs)){ ?>
<ul class="breadcrumb container-fluid">
  <?php foreach($breadcrumbs as $rows){ 
	if($rows['href']!=""){
  ?>
  <li><a href="<?php echo $rows['href'] ?>"><?php echo $rows['label'] ?></a> <span class="divider"><i class="icon-play"></i></span></li>
  <?php }else{ ?>
  <li class="active"><?php echo $rows['label'] ?> </li>
  <?php }
  } ?>
</ul>
<?php } ?>
<div class="container-fluid">
