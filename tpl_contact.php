<?php
/*
Template Name: Контакты
*/
?>


<?php get_header(); ?>

<div class="tpl_contact">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<div class="bg-white">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="text-large text-dark font-weight-bold text-center">Вы уже читали <a href="/faq">наш FAQ</a>? Ознакомились с <a href="/rules">нашими правилами</a>?</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<hr style="background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHZpZXdCb3g9IjAgMCAxMTkgNiI%2BPHBhdGggZD0iTTExOSAzLjhjLTYwIDIuNS0zMy41LTctMTE5IDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzNjYjM3MCIgc3Ryb2tlLXdpZHRoPSIyIi8%2BPC9zdmc%2B) center/5em 100% repeat-x; height: 0.3em; margin: 3em 0; border: 0;">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<?php echo do_shortcode('[contact-form-7 id="114" title="Контакты"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>