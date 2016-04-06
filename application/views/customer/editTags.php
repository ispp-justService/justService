<?php echo form_open('customer/sendEditTags'); ?>
	<?php foreach($tags as $tag): ?>
		<p>
			<?php echo form_label($tag->name, $tag->tag_id);
				  echo form_checkbox($tag->tag_id, $tag->tag_id, $tag->checked); ?>
		</p>
	<?php 

	endforeach; 

	echo form_submit('submit', 'Send');
	?> 
	
</form>

