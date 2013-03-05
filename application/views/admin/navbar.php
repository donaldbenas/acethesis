<div class="navbar">
  <div class="navbar-inner">
	<div class="container-fluid">
	  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="brand" href="." >Administrator</a>
	  <div class="nav-collapse collapse">
		<ul class="nav">
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."sales/cash" ?>">Cash Rigester</a></li>
			  <li><a href="<?php echo base_url()."sales/daily" ?>">Daily Sales</a></li>
			  <li><a href="<?php echo base_url()."sales/quick" ?>">Quick Stock Count</a></li>
			  <li><a href="<?php echo base_url()."sales/inventory" ?>">Inventory</a></li>
			  
			</ul>
		  </li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."account/receivables" ?>">Recievables</a></li>
			  <li><a href="<?php echo base_url()."account/payables" ?>">Payables</a></li>
			</ul>
		  </li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Management <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."manage/stocks" ?>">Stocks</a></li>
			  <li><a href="<?php echo base_url()."manage/users" ?>">Users</a></li>
			  <li><a href="<?php echo base_url()."manage/customers" ?>">Customers</a></li>
			  <li><a href="<?php echo base_url()."manage/suppliers" ?>">Suppliers</a></li>
			</ul>
		  </li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaction <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo base_url()."transact/purchases" ?>" >Purchases</a></li>
			  <li><a href="<?php echo base_url()."transact/expenses" ?>">Expenses</a></li>
			  <li><a href="<?php echo base_url()."transact/drawings" ?>">Drawings</a></li>
			</ul>
		  </li>
		  <li class="">
			<a href="">About</a>
		  </li>
		</ul>
		<ul class="nav pull-right">
		  <li>
			<a href="<?php echo base_url()."logout" ?>" id="logout">Logout</a>
		  </li>
		</ul>
	  </div>
	</div>
  </div>
</div>
<div class="container-fluid">
