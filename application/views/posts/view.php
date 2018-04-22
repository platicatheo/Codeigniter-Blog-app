<h2><?= $post['title']; ?></h2>
<small class="post_date">Posted on: <?php echo $post['created_at']; ?></small>
<img class="post_thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="post-img">
<p><?php echo $post['body']; ?></p>
<hr>

<a class="btn btn-secondary pull-left" href="<?php echo base_url(); ?>posts/edit/<?= $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger" name="">
</form>
