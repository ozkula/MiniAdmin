<?php
	if (!$user_login[0]['status']) {
		redirect('login', 'refresh');
	}
?>
<div class="sidebar-left">
	<ul class="nav nav-stacked nav-boldtext">
		<li><a href=""><h3 class="text-left"><?php echo $username; ?></h3>
			<h4 class="text-right"><?php echo $status; ?></h4></a></li>
		<li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
		<li><a href="<?php echo base_url(); ?>post">Posts</a></li>
		<li><a href="<?php echo base_url(); ?>articles">Articles</a></li>
		<li><a href="<?php echo base_url(); ?>category">Categories</a></li>
		<?php  if ($status != 'user') { ?>
			 <li><a href="<?php echo base_url(); ?>setting">Setting</a></li>
		<?php  } ?>
		<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>
	</ul>
</div>