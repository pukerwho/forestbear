<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>

<div class="tpl_reviews">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<div class="bg-white">
		<div class="container py-5">
			<div class="reviews">
				<?php 
				  $custom_query = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1 ) );
				  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				  	<?php get_template_part( 'blocks/reviews', 'default' ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>