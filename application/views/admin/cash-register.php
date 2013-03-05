<form class="form form-inline">
<fieldset>
	<label class="control-label" for="inputPassword">Select Item: </label>
	<select class="span4">
		<option></option>
	</select>&nbsp;&nbsp;&nbsp;
	<label class="control-label" for="inputPassword">Quantity: </label>
	<input class="span1" class="span1" type="text">&nbsp;&nbsp;&nbsp;
	<button class="btn"><i class="icon-plus"></i> Add Item</button>
</fieldset>
</form>
<table class="table table-bordered table-hover table-striped">
	<thead>
	<tr>
		<th id="middle" class="btn span">QTY</th>
		<th id="middle" class="btn span">UNIT</th>
		<th id="middle" class="btn span">DESCRIPTION</th>
		<th id="middle" class="btn span">SIZE</th>
		<th id="middle" class="btn span">PRICE</th>
		<th id="middle" class="btn span">AMOUNT</th>
		<th id="middle" width="250px" class="btn span">Action</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td id="middle">QTY</td>
		<td id="middle">UNIT</td>
		<td id="middle">DESCRIPTION</td>
		<td id="middle">SIZE</td>
		<td id="middle">PRICE</td>
		<td id="middle">AMOUNT</td>
		<td id="middle">
			<button class="btn btn-primary btn-small"><i class="icon-edit icon-white"></i> Edit</button>
			<button class="btn btn-primary btn-small"><i class="icon-shopping-cart  icon-white"></i> Credit</button>
			<button class="btn btn-danger btn-small"><i class="icon-remove  icon-white"></i> Remove</button>
		</td>
	</tr>
	</tbody>
	<tfoot>
	<tr>
		<td colspan="7"><button class="btn btn-primary"><i class="icon-tag  icon-white"></i> Cash Out</button></td>
	</tr>
	</tfoot>
</table>
