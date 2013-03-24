<html>
<head>
	<meta charset="utf-8">
	<title>Store Billing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<style>
	@media screen{		
		table {
		  max-width: 100%;
		  background-color: transparent;
		  border-collapse: collapse;
		  border-spacing: 0;
		}

		.table {
		  width: 100%;
		  margin-bottom: 20px;
		}

		.table th,
		.table td {
		  padding: 8px;
		  line-height: 20px;
		  text-align: left;
		  vertical-align: top;
		  border-top: 1px solid #dddddd;
		}

		.table th {
		  font-weight: bold;
		}

		.table thead th {
		  vertical-align: bottom;
		}

		.table caption + thead tr:first-child th,
		.table caption + thead tr:first-child td,
		.table colgroup + thead tr:first-child th,
		.table colgroup + thead tr:first-child td,
		.table thead:first-child tr:first-child th,
		.table thead:first-child tr:first-child td {
		  border-top: 0;
		}

		.table tbody + tbody {
		  border-top: 2px solid #dddddd;
		}

		.table .table {
		  background-color: #ffffff;
		}

		.table-condensed th,
		.table-condensed td {
		  padding: 4px 5px;
		}

		.table-bordered {
		  border: 1px solid #dddddd;
		  border-collapse: separate;
		  *border-collapse: collapse;
		  border-left: 0;
		  -webkit-border-radius: 4px;
			 -moz-border-radius: 4px;
				  border-radius: 4px;
		}

		.table-bordered th,
		.table-bordered td {
		  border-left: 1px solid #dddddd;
		}

		.table-bordered caption + thead tr:first-child th,
		.table-bordered caption + tbody tr:first-child th,
		.table-bordered caption + tbody tr:first-child td,
		.table-bordered colgroup + thead tr:first-child th,
		.table-bordered colgroup + tbody tr:first-child th,
		.table-bordered colgroup + tbody tr:first-child td,
		.table-bordered thead:first-child tr:first-child th,
		.table-bordered tbody:first-child tr:first-child th,
		.table-bordered tbody:first-child tr:first-child td {
		  border-top: 0;
		}

		.table-bordered thead:first-child tr:first-child > th:first-child,
		.table-bordered tbody:first-child tr:first-child > td:first-child {
		  -webkit-border-top-left-radius: 4px;
				  border-top-left-radius: 4px;
		  -moz-border-radius-topleft: 4px;
		}

		.table-bordered thead:first-child tr:first-child > th:last-child,
		.table-bordered tbody:first-child tr:first-child > td:last-child {
		  -webkit-border-top-right-radius: 4px;
				  border-top-right-radius: 4px;
		  -moz-border-radius-topright: 4px;
		}

		.table-bordered thead:last-child tr:last-child > th:first-child,
		.table-bordered tbody:last-child tr:last-child > td:first-child,
		.table-bordered tfoot:last-child tr:last-child > td:first-child {
		  -webkit-border-bottom-left-radius: 4px;
				  border-bottom-left-radius: 4px;
		  -moz-border-radius-bottomleft: 4px;
		}

		.table-bordered thead:last-child tr:last-child > th:last-child,
		.table-bordered tbody:last-child tr:last-child > td:last-child,
		.table-bordered tfoot:last-child tr:last-child > td:last-child {
		  -webkit-border-bottom-right-radius: 4px;
				  border-bottom-right-radius: 4px;
		  -moz-border-radius-bottomright: 4px;
		}

		.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
		  -webkit-border-bottom-left-radius: 0;
				  border-bottom-left-radius: 0;
		  -moz-border-radius-bottomleft: 0;
		}

		.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
		  -webkit-border-bottom-right-radius: 0;
				  border-bottom-right-radius: 0;
		  -moz-border-radius-bottomright: 0;
		}

		.table-bordered caption + thead tr:first-child th:first-child,
		.table-bordered caption + tbody tr:first-child td:first-child,
		.table-bordered colgroup + thead tr:first-child th:first-child,
		.table-bordered colgroup + tbody tr:first-child td:first-child {
		  -webkit-border-top-left-radius: 4px;
				  border-top-left-radius: 4px;
		  -moz-border-radius-topleft: 4px;
		}

		.table-bordered caption + thead tr:first-child th:last-child,
		.table-bordered caption + tbody tr:first-child td:last-child,
		.table-bordered colgroup + thead tr:first-child th:last-child,
		.table-bordered colgroup + tbody tr:first-child td:last-child {
		  -webkit-border-top-right-radius: 4px;
				  border-top-right-radius: 4px;
		  -moz-border-radius-topright: 4px;
		}

		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
		  background-color: #f9f9f9;
		}

		.table-hover tbody tr:hover td,
		.table-hover tbody tr:hover th {
		  background-color: #f5f5f5;
		}

		table td[class*="span"],
		table th[class*="span"],
		.row-fluid table td[class*="span"],
		.row-fluid table th[class*="span"] {
		  display: table-cell;
		  float: none;
		  margin-left: 0;
		}

		.table td.span1,
		.table th.span1 {
		  float: none;
		  width: 44px;
		  margin-left: 0;
		}

		.table td.span2,
		.table th.span2 {
		  float: none;
		  width: 124px;
		  margin-left: 0;
		}

		.table td.span3,
		.table th.span3 {
		  float: none;
		  width: 204px;
		  margin-left: 0;
		}

		.table td.span4,
		.table th.span4 {
		  float: none;
		  width: 284px;
		  margin-left: 0;
		}

		.table td.span5,
		.table th.span5 {
		  float: none;
		  width: 364px;
		  margin-left: 0;
		}

		.table td.span6,
		.table th.span6 {
		  float: none;
		  width: 444px;
		  margin-left: 0;
		}

		.table td.span7,
		.table th.span7 {
		  float: none;
		  width: 524px;
		  margin-left: 0;
		}

		.table td.span8,
		.table th.span8 {
		  float: none;
		  width: 604px;
		  margin-left: 0;
		}

		.table td.span9,
		.table th.span9 {
		  float: none;
		  width: 684px;
		  margin-left: 0;
		}

		.table td.span10,
		.table th.span10 {
		  float: none;
		  width: 764px;
		  margin-left: 0;
		}

		.table td.span11,
		.table th.span11 {
		  float: none;
		  width: 844px;
		  margin-left: 0;
		}

		.table td.span12,
		.table th.span12 {
		  float: none;
		  width: 924px;
		  margin-left: 0;
		}

		.table tbody tr.success td {
		  background-color: #dff0d8;
		}

		.table tbody tr.error td {
		  background-color: #f2dede;
		}

		.table tbody tr.warning td {
		  background-color: #fcf8e3;
		}

		.table tbody tr.info td {
		  background-color: #d9edf7;
		}

		.table-hover tbody tr.success:hover td {
		  background-color: #d0e9c6;
		}

		.table-hover tbody tr.error:hover td {
		  background-color: #ebcccc;
		}

		.table-hover tbody tr.warning:hover td {
		  background-color: #faf2cc;
		}

		.table-hover tbody tr.info:hover td {
		  background-color: #c4e3f3;
		}
		.pull-right{
		  float: right;
		}
		body{
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  font-size: 8px;
		}
		label{
		  margin-bottom: 10px;
		}

	}	
	</style>
</head>
<body>
<label><h2>Stock Inventory Reports</h2></label>
<label>Supplier: <?php if($supplierID=='0') echo "All customer type"; else echo ucwords($supplierID)." Customers"; ?></label><br>
<label>Date: <?php if(!empty($date)) echo $date; else echo date('Y-m-d'); ?></label><br><br>
<table class="table table-hover table-striped table-bordered">
  <thead style="border-bottom:1px solid #ddd;background-color:#ddd">	
	<tr>
		<th>SUPPLIER NAME</th>
		<th>PRODUCT NAME</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th>SOLD</th>
		<th>STOCK-ON-HAND</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if(!empty($stocks)){
		foreach($stocks as $rows){
	?>
	<tr>
		<td><?php echo $rows->fld_supplier ?></td>
		<td><?php echo $rows->fld_product ?><input type="hidden" name="product[]" value="<?php echo $rows->fld_product ?>"></td>
		<td><?php echo $rows->fld_description ?></td>
		<td><?php echo $rows->fld_price ?></td>
		<td><?php echo $rows->fld_quantity ?> PCS</td>
		<td><?php echo $rows->fld_sold ?> PCS</td>
		<td><?php echo ($rows->fld_quantity-$rows->fld_sold) ?> PCS<input type="hidden" name="amount[]" value="<?php echo ($rows->fld_quantity-$rows->fld_sold) ?>"></td>
    </tr>
    <?php 
		}
	}	
    ?>
  </tbody>
</table>
</body>
</html>
