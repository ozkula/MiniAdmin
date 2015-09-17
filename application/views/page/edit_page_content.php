<div class="panel panel-default">
  <div class="panel-body">
  <div class="container">
	<!--  -->
	<h4>Edit Page</h4>
    <!-- Content Data -->
		<form role="form" action="<?php echo base_url(); ?>page/edit_true" method="post">
		<input type="hidden" name="page_id" value="<?php echo $show_page_data[0]['idpage']; ?>">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		    			<div class="input-group">
		    				<label>Title</label>
							<input type="text" class="form-control" name="title" size="100%" placeholder="Title" value="<?php echo $show_page_data[0]['title']; ?>">
						</div>
						<div class="input-group">
		    				<label>Content</label>
							<textarea class="form-control" style="width: 100%;" name="content"><?php echo $show_page_data[0]['content']; ?></textarea>
						</div>
						<br>
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	<!--  -->
	</div>
  </div>
</div>