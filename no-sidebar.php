<?php get_header(); ?>

<div class="row dynamic">
	<div class="grid12">
		<?php if (is_page() || is_single()) { ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<article class="row dynamic page">
					<h2 class="title"><?php the_title(); ?></h2>
					<?php if(!is_page()){ ?>
						<p class="date"><?php the_date(); ?></p>
					<?php } ?>
					<?php if( has_post_thumbnail() ) { ?>
						<div class="eyecatch"><?php the_post_thumbnail('post-thumbnail','class=img-round'); ?></div>
					<?php } ?>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>

		<?php }else{ ?>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<article class="row dynamic post">
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="date"><?php the_date(); ?></p>
						<?php if( has_post_thumbnail() ) { ?>
								<div class="eyecatch"><?php the_post_thumbnail('post-thumbnail','class=img-round'); ?></div>
						<?php } ?>
						<p class="content"><?php the_content(); ?></p>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<p>not found.</p>
			<?php endif; ?>

		<?php } ?>
		
	</div>
</div>

<?php get_footer(); ?>