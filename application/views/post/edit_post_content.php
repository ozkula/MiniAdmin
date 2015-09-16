<div class="panel panel-default">
  <div class="panel-body">
	<!--  -->
	<h4>Edit Posting</h4>
    <!-- Content Data -->
		<form role="form" action="<?php echo base_url(); ?>post/edit_true" method="post">
		<input type="hidden" name="post_id" value="<?php echo $show_post_data[0]['idpost']; ?>">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		    			<div class="input-group">
		    				<label>Title</label>
							<input type="text" class="form-control" name="title" size="100%" placeholder="Title" value="<?php echo $show_post_data[0]['title']; ?>">
						</div>
						<div class="input-group">
		    				<label>Content</label>
							<textarea class="form-control" style="width: 100%;" name="content"><?php echo $show_post_data[0]['content']; ?></textarea>
						</div>
						<br>
						<div class="form-group">
						  <label>Select Category</label>
						  <select class="form-control" name="category">
							  <?php for ($i=0; $i <count($show_category) ; $i++) { ?>
							  	<option value = "<?php echo $show_category[$i]['idcategory']; ?>" <?php if ($show_post_data[0]["category_id"] == $show_category[$i]["idcategory"]):?> selected="selected" <?php endif; ?>><?php echo $show_category[$i]['category_name']; ?></option>
							  <?php } ?>
						  </select>
						</div>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	<!--  -->
  </div>
</div>