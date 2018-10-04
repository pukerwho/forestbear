<?php
/*
Template Name: Цены
*/
?>

<?php get_header(); ?>

<div class="tpl_price">
	<div style="background: url(<?php bloginfo('template_url'); ?>/img/bg-bottom.svg) center bottom/105% no-repeat;">
		<?php get_template_part( 'blocks/page-top', 'default' ); ?>
	</div>
	<section class="my-5">
		<div class="container">
			<div class="lead display-4 text-center mb-5">Version #1</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card bg-white p-5">
						<div class="card-content">
							<div class="pb-3">Personal</div>
							<div class="pb-3"><span class="display-3 font-weight-bold">$5</span>/mo</div>
							<div class="price-list pb-3">
								<li class="my-2">
									<i class="fas fa-check text-info pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check text-info pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check text-info pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2 text-muted">
									<i class="fas fa-minus pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2 text-muted">
									<i class="fas fa-minus pr-2"></i> Unlimited product updates
								</li>
							</div>
							<button class="btn btn-lg btn-raised btn-block bg-white mb-5 my-sm-0 mr-sm-2" type="submit">Buy now</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-success text-white p-5">
						<div class="card-content">
							<div class="pb-3">Business</div>
							<div class="pb-3"><span class="display-3 font-weight-bold">$12.99</span>/mo</div>
							<div class="price-list pb-3">
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2 text-light">
									<i class="fas fa-minus pr-2"></i> Unlimited product updates
								</li>
							</div>
							<button class="btn btn-lg btn-raised btn-block bg-white mb-5 my-sm-0 mr-sm-2" type="submit">Buy now</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-info text-white p-5">
						<div class="card-content">
							<div class="pb-3">Enterprise</div>
							<div class="pb-3"><span class="display-3 font-weight-bold">$99</span>/mo</div>
							<div class="price-list pb-3">
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
								<li class="my-2">
									<i class="fas fa-check pr-2"></i> Unlimited product updates
								</li>
							</div>
							<button class="btn btn-lg btn-raised btn-block bg-white mb-5 my-sm-0 mr-sm-2" type="submit">Buy now</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>