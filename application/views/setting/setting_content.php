<div class="panel panel-default">
  <div class="panel-body">
    <ul class="nav nav-tabs">
	  <li role="presentation" class="active"><a href="#keyword" aria-controls="keyword" role="tab" data-toggle="tab">Keyword</a></li>
	  <li role="presentation"><a href="#tandd" aria-controls="tandd" role="tab" data-toggle="tab">Title & Desciption</a></li>
	</ul>
	  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="keyword">
    	<br>
    		<form action="<?php echo base_url(); ?>setting/save_metakey" method="post">
    			<div class="form-group">
    				<b>Meta Key</b>
    				<input type="text" class="form-control" name="keyword" placeholder="Meta Keyword" value="<?php echo $metakey[0]['val1']; ?>">
    			</div>
    			<div class="form-group">
    				<b>Meta Description</b>
    				<input type="text" class="form-control" name="description" placeholder="Meta Description" value="<?php echo $metakey[0]['val2'];  ?>">
    			</div>
    			<div class="form-group">
    				<input type="hidden" name="idmeta" value="1">
    				<button type="submit" class="btn btn-primary">Save</button>
    			</div>
    		</form>
    </div>
    <div role="tabpanel" class="tab-pane" id="tandd">
    	<br>
    		<form action="<?php echo base_url(); ?>setting/save_titledesc" method="post">
    			<div class="form-group">
    				<b>Website Name</b>
    				<input type="text" class="form-control" name="titleweb" placeholder="Title Web" value="<?php echo $titldesc[0]['val1']; ?>">
    			</div>
    			<div class="form-group">
    				<b>Website Description</b>
    				<input type="text" class="form-control" name="descriptionweb" placeholder="Description Web" value="<?php echo $titldesc[0]['val2']; ?>">
    			</div>
    			<div class="form-group">
    				<input type="hidden" name="idtitledesc" value="2">
    				<button type="submit" class="btn btn-primary">Save</button>
    			</div>
    		</form>
    </div>
  </div>

  </div>
</div>