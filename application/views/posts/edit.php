<h2><?= $title; ?></h2>

<?php 
// echo '<pre>'; print_r($post); echo '</pre>';
echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?= $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="tet" class="form-control" placeholder="Add Title" name="title" value="<?= $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" id="editor1" placeholder="Add Body" name="body"><?= $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
          <option <?php if ($post['category_id'] == $category['id']) {echo 'selected';} ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>