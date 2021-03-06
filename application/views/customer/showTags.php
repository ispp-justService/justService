 <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('tags_manage')?></h3>
	<hr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-centered">
	   <ul class="nav nav-tabs">
	      <li class="active"><a href="#tab-myTags" data-toggle="tab"><?php echo lang('tags_my_tags') ?></a></li>
	      <li><a href="#tab-editTags" data-toggle="tab"><?php echo lang('tags_edit_tags') ?></a></li>
	   </ul>
	   <div class="tab-content">
		<div class="tab-pane active" id="tab-myTags">
			<ul class="ulDivideColumn">
			<?php foreach($customerTags as $tag): ?>
				<li><?php echo $tag->name ?></li>
			<?php endforeach; ?>
			</ul> 
		</div>
		<div class="tab-pane" id="tab-editTags">
			<?php echo form_open('customer/sendEditTags'); ?>
				<ul class="ulDivideColumn">
				<?php foreach($tags as $tag):
					echo '<li>';
					echo form_label($tag->name, $tag->tag_id);
					echo form_checkbox($tag->tag_id, $tag->tag_id, $tag->checked);
					echo '</li>';
				      endforeach; 
				?> 
				</ul>
				<button type="submit" class="btn buttonBlack pull-right"><?php echo lang('tags_send')?></button>
			<?php echo form_close(); ?>	
		</div>
	   </div>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
 </div> <!-- /container -->

