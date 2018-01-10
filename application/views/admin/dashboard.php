<h1 class="text-center">This is dashboard for administrator for this page</h1>

<h3>If you ended up on this page we appologize for inconvenience. Plese click on LX-photography and you will be redirected to correct pages of LX Photography</h3>

<br><br>

<h3>If you need to log in in to admin area of LX photography but you forgot Password or Username please contact person that created this page. You should Know who that is.</h3>
<br><br><hr><br>
<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">

			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>
