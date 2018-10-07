<?php
/*
Template Name: Правила
*/
?>

<?php get_header(); ?>
<div class="tpl_about">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<div class="bg-white py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					Мы всегда используем новые технологие, если уверены, что они помогут нам эффективнее работать.
					Нас мотивирует отлично сделанная работа, которую не стыдно поместить в <a href="/portfolio">Портфолио</a>. 
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>