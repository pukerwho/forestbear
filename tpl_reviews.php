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
				  <div class="review">
				  	<div class="review__cat">
			  			<?php if(rwmb_meta( 'meta-review-cat' ) === 'create'): ?>
							  <div class="review__cat-name create">Создание сайта</div>
							  <div class="review__cat-order">
					  			<i class="fas fa-thumbs-up i-create"></i>
					  		</div>
							<?php elseif (rwmb_meta( 'meta-review-cat' ) === 'seo'): ?>
							  <div class="review__cat-name seo">SEO-продвижение</div>
							  <div class="review__cat-order">
					  			<i class="fas fa-thumbs-up i-seo"></i>
					  		</div>
							<?php else: ?>
							  <div class="review__cat-name smm">SMM-продвижение</div>
							  <div class="review__cat-order">
					  			<i class="fas fa-thumbs-up i-smm"></i>
					  		</div>
							<?php endif; ?>
				  	</div>
				  	<div class="user">
				  		<div class="user__avatar">
				  			<?php 
									rwmb_the_value( 'meta-review-avatar', array( 'size' => 'thumbnail' )  );
								?>
							</div>
							<div class="user-info">
								<div class="user__name">
					  			<?php echo rwmb_meta( 'meta-review-name' ) ?>
					  		</div>
					  		<div class="user__who">
					  			<?php echo rwmb_meta( 'meta-review-who' ) ?>
					  		</div>
							</div>
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