<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="bb_page">
	<div class="bb_page_title">
		<div class="text-center font-title font-size-xl bb_page_title_text">
			<?php the_title(); ?>
		</div>
	</div>
	<div class="container mt-5 mb-5">
		<div class="bb_page_content">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>