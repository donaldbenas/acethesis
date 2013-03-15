<form>
<fieldset>
  <table class="table table-hover table-striped table-bordered">
  <thead>
	<tr>
		<th>COMPANY NAME</th>
		<th>REPRESENTATIVE ID</th>
		<th>REPRESENTATIVE NAME</th>
		<th>MOBILE #</th>
		<th>TELEPHONE #</th>
		<th>EMAIL</th>
		<th width="200px"><a class="btn" href="<?php echo base_url()."manage/suppliers/add" ?>"><i class="icon-plus"></i> Add New</a></th>
    </tr>
    <?php foreach($suppliers as $rows){ ?>
    <tr>
		<td><?php foreach($company as $row) if($row->id==$rows->fld_productCompanyID) echo $row->fld_name; ?></td>
		<td><?php echo $rows->fld_representativeID ?></td>
		<td><?php echo $rows->fld_representativeName ?></td>
		<td><?php echo $rows->fld_mobile ?></td>
		<td><?php echo $rows->fld_telephone ?></td>
		<td><?php echo $rows->fld_email ?></td>
		<td>	
		 <a class="btn btn-primary" href="<?php echo base_url()."manage/suppliers/edit/".$rows->id ?>"><i class="icon-pencil icon-white"></i> Edit</a>
		 <a class="btn btn-danger" href="#myModal" role="button" data-toggle="modal" onclick="erase('<?php echo $rows->id  ?>','<?php echo $rows->fld_representativeName  ?>')"><i class="icon-trash icon-white"></i> Delete</a>
		</td>
    </tr>
    <?php  } ?>
  </thead>
</table>
</fieldset>
</form>
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
	function erase(id,name,lname){
		$('#modal-body-text').html("Do you wish to delete supplier <b>"+name+"</b> and all data related to it?");
		$('#modal-footer-delete').attr("href","<?php echo base_url()."manage/customers/delete/" ?>"+id);
	}
</script>
 
