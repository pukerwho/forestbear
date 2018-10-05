<?php
/*
Template Name: Цены
*/
?>

<?php get_header(); ?>

<div class="tpl_price">
	<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	<section class="my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-1.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Сайт-визитка
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Пример сайта</a>
							</div>
							<div class="price__number">
								4 000 UAH
							</div>
						</div>
						<div class="price__bottom bg-lightgreen">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-2.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Landing Page
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Пример сайта</a>
							</div>
							<div class="price__number">
								7 000 UAH
							</div>
						</div>
						<div class="price__bottom bg-sky">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-3.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Сайт-каталог
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Пример сайта</a>
							</div>
							<div class="price__number">
								10 000 UAH
							</div>
						</div>
						<div class="price__bottom bg-lightyellow">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-shop.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Интернет-магазин
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Пример сайта</a>
							</div>
							<div class="price__number">
								20 000 UAH
							</div>
						</div>
						<div class="price__bottom bg-lightpurpul">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-seo.png" alt="">	
							</div>
							<div class="price__name mb-4">
								SEO-Продвижение
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Реальные результаты</a>
							</div>
							<div class="price__number">
								5 000 UAH
							</div>
						</div>
						<div class="price__bottom bg-lightred">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card price bg-white">
						<div class="price__top p-5">
							<div class="price__img mb-5">
								<img src="<?php bloginfo('template_url'); ?>/img/price-audit.png" alt="">	
							</div>
							<div class="price__name mb-4">
								Аудит сайта
							</div>
							<div class="price__info mb-4">
								<a href="#" class="link-hover-underline">Подробнее</a>
							</div>
							<div class="price__number">
								900 UAH
							</div>
						</div>
						<div class="price__bottom bg-lightblue">
							<div class="price__order">
								Заказать
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>