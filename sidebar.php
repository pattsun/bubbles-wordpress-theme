	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ): ?>
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
	<?php endif; ?>
