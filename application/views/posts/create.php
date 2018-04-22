<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="tet" class="form-control" placeholder="Add Title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea class="form-control" id="editor1" placeholder="Add Body" name="body"></textarea>
  </div>
  <div class="form-group">
  	<label>Category</label>
  	<select name="category_id" class="form-control">
  		<?php foreach($categories as $category): ?>
  				<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  		<?php endforeach; ?>
  	</select>
  </div>
  <div class="form-group">
    <label>Uload Image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>