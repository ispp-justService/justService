<?php foreach($customerTags as $tag): ?>
	<?php echo $tag->name ?>
<?php endforeach; ?> 

<a href="<?php echo site_url('customer/editTags') ?>">Edit tags</a>

