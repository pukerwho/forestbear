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
			<div class="row">
				<?php 
				  $custom_query = new WP_Query( array( 'post_type' => 'reviews' ) );
				  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				  <div class="review">
				  	<div class="review__cat">
				  		<div class="review__cat-name"><?php echo rwmb_meta( 'meta-review-cat' ); ?></div>
				  		<div class="review__cat-order"><i class="fas fa-thumbs-up"></i></div>
				  	</div>
				  	<div class="user">
				  		<div class="user__avatar"><?php echo rwmb_meta( 'meta-review-avatar' ) ?></div>
				  		<div class="user__name"><?php echo rwmb_meta( 'meta-review-name' ) ?></div>
				  		<div class="user__who"><?php echo rwmb_meta( 'meta-review-who' ) ?></div>
				  	</div>
				  	<div class="review__content">
				  		<?php the_content(); ?>	
				  	</div>
				  	<div class="review__video">
				  		<?php echo rwmb_meta( 'meta-review-video' ) ?>
				  	</div>
				  </div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>