<h2><?= $title; ?></h2>
<?php foreach($posts as $post) : ?>

	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post_thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="post-img">
		</div>
		<div class="col-md-9">
			<small class="post_date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small>
			<p><?php echo word_limiter($post['body'], 50); ?></p>
			<a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
		</div>
	</div>
	<br><br><br>

<?php endforeach; ?>

<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>