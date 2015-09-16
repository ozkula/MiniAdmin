<div class="row push-to-center">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<blockquote>
		<?php echo $error; ?>
	</blockquote>
		<form method="post" action="<?php echo base_url(); ?>login/check_login">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder="Username" id="username" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>
			<div class="form-group">
			  	<p class="text-right"><button type="submit" class="btn btn-md btn-success">Login</button></p>
			</div>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>