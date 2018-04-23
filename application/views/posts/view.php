<h2><?= $post['title']; ?></h2>
<small class="post_date">Posted on: <?php echo $post['created_at']; ?></small>
<img class="post_thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="post-img">
<p><?php echo $post['body']; ?></p>
<hr>

<?php
 if( $this->session->userdata('user_id') == $post['user_id'] ) : ?>
<a class="btn btn-secondary float-left" href="<?php echo base_url(); ?>posts/edit/<?= $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger" name="">
</form>
<hr>
<?php endif; ?>

<h3>Comments</h3>
<?php if($comments) :
				foreach($comments as $comment) : ?>
				<div class="well">
					<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
				</div>

<?php
				endforeach;
		  else : ?>
		  	No comments to display.
<?php 
			endif;
?>
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
