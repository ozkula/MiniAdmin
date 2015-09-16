<div class="panel panel-default">
  <div class="panel-body">
	<!--  -->
	<h4>Edit Articles</h4>
    <!-- Content Data -->
		<form role="form" action="<?php echo base_url(); ?>articles/edit_true" method="post">
		<input type="hidden" name="articles_id" value="<?php echo $show_post_data[0]['idarticles']; ?>">
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
						<button type="submit" class="btn btn-info btn-sm">Save</button>
					</form>	    		
	<!--  -->
  </div>
</div>