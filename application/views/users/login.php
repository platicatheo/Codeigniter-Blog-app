<?php
echo form_open(); ?>
	<div class="row">
		<div class="col-md-4 offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus></input>
			</div>
			<div class="form-group">
				<input type="text" name="password" class="form-control" placeholder="Enter Password" required autofocus></input>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>

<?php echo form_close(); ?>