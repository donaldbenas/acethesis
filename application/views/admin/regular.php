<form class="form-horizontal">
  <legend>Invoice Details</legend>
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input type="text" id="name" placeholder="name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="invoice">Invoice ID</label>
    <div class="controls">
      <input type="password" id="inID" placeholder="invoiceID">
    </div>
  </div>
 <form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="due">Due In</label>
    <div class="controls">
      <input type="text" id="due" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="status">Status</label>
    <div class="controls">
    <select><option>Paid</option> <option>Unpaid</option></select>
    </div>
  </div>
   <div class="control-group">
		<label class="control-label" for="invoiceID">OR Num:</label>
		<div class="controls">
		  <input type="text" id="ornum" placeholder="orNum">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="invoiceID"></label>
		<div class="controls">
		  <a class="btn btn-success" id="ornum"><i class="icon-plus icon-white"></i> Save</a>
		</div>
	  </div>
  </fieldset>
  <br>
  <legend>Invoice Items</legend>
  <table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>QTY</th>
		<th>ITEM</th>
		<th>DESCRIPTION</th>
		<th>PRICE</th>
		<th>TOTAL</th>
		<th width="200px"><a class="btn" href="#"><i class="icon-plus"></i> Add New Items</a></th>
    </tr>
    <tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>		
		 <a class="btn btn-primary" href="#"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
  </thead>
</table>
</form>
 

 
