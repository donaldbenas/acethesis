<table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>SUPPLIER</th>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>CODE</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."product/add" ?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
    <?php foreach($products as $rows){ ?>
    <tr>
		<td>
			<?php 
			foreach($company as $row){
				if($row->id == $rows->fld_productCompanyID)
					echo $row->fld_name ;
			}
			?>
		</td>
		<td><?php echo $rows->fld_name ?></td>
		<td><?php echo substr($rows->fld_description,0,30).(strlen($rows->fld_description) > 30 ? " [...]" : "") ?></td>
		<td><?php echo $rows->fld_code ?></td>
		<td>PHP <?php echo $rows->fld_price ?></td>
		<td><?php echo $rows->fld_amount ?> PCS</td>
		<td>		
		 <a class="btn btn-primary" href="<?php echo base_url()."product/edit/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="#myModal" role="button" data-toggle="modal" onclick="erase('<?php echo $rows->id  ?>','<?php echo $rows->fld_name  ?>')"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php } ?>
  </thead>
</table>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation for Delete</h3>
  </div>
  <div class="modal-body">
    <p id="modal-body-text"></p>
  </div>
  <div class="modal-footer">
    <a class="btn btn-danger" id="modal-footer-delete"><i class="icon-ok icon-white"></i> Yes</a>
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-white"></i> No</button>
  </div>
</div>
<script>
	function erase(id,name){
		$('#modal-body-text').html("Do you wish to delete product <b>"+name+"</b> and all data related to it?");
		$('#modal-footer-delete').attr("href","<?php echo base_url()."product/delete/" ?>"+id);
	}
</script>
