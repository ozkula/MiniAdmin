<div class="panel panel-default">
  <div class="panel-body">
	<!-- Input Post -->
	<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#inputCollapse" aria-expanded="false" aria-controls="inputCollapse">
	   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	</button>
	<br>
	<div class="collapse" id="inputCollapse">
	  <div class="well">
	    	<div class="cointainer">
	    			<form role="form" action="<?php echo base_url(); ?>category/add_new" method="post">
		    			<div class="input-group">
		    				<label>Category Name</label>
							<input type="text" class="form-control" name="category_name" size="100%" placeholder="Category">
						</div>
						<br>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	    	</div>
	  </div>
	</div>
	<!--  -->
	<br>
    <!-- Content Data -->
			<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>No</th>
				  	<th>Category Name</th>
				  	<th>Action</th>
				</tr>
		  	</thead>
		  	<tbody>
		  	<?php $no=1; for ($i=0; $i <count($show_category) ; $i++) { ?>
		  		<tr>
		  			<td><?php echo $no ?></td>
				  	<td><?php echo $show_category[$i]['category_name']; ?></td>
				  	<td>
				  	 <a href="<?php echo site_url("category/delete/". $show_category[$i]["idcategory"]); ?>" class="btn btn-default btn-sm glyphicon glyphicon-trash" role="button"></a>
				  	</td>
			  	</tr>
		  	<?php $no++;} ?>
		  	</tbody>
		</table>
	<!--  -->
  </div>
</div>