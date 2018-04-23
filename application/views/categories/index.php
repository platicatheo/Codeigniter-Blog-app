<h2><?= $title; ?></h2>

<ul class="list-group">
	<?php foreach($categories as $category)	: ?>
		<li class="list-group-item">
			<a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
			<?php
		  if( $this->session->userdata('user_id') == $category['user_id'] ) : 
				$attributes = array('class' => 'delete_category_form');
		  	echo form_open('categories/delete/'.$category['id'], $attributes);
		  	echo '<input type="submit" class="btn-link text-danger" value="[X]">';
		  	echo form_close();
	  	endif; ?>
		</li>
	<?php endforeach; ?>
</ul>