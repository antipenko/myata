<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>


<!--HOME PAGE SLIDER-->
<section class="mb-slider">
	<?php echo home_slider_template(); ?>
	<!--END of HOME PAGE SLIDER-->
</section>

<section class="mb-menu">
	<div class="row">
		<div class="columns medium-6 mb-menu__dishes">
			<h3>Блюда</h3>
			<ul >
				<?php
				$disheArgs = array(
					'post_type'=>'dishe',
					'posts_per_page'=>-1
		// 'orderby'=>'date',
		// 'order'=>''
					);
					$dishe = new WP_Query($disheArgs);?>
					<?php if($dishe->have_posts()): ?>
						<?php while($dishe->have_posts()): $dishe->the_post() ?>
							<li class="mb-menu__item">
								<div>
								<h5 class="mb-meny__item-title"><?php the_title() ?> </h5>
									<span><?php the_field('price') ?></span>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif;?>
				</ul>
			</div>

			<div class="columns medium-6 mb-menu__drink">
				<h3>Напитки</h3>
				<ul >
					<?php
					$disheArgs = array(
						'post_type'=>'dishe',
						'posts_per_page'=>-1
						);
						$dishe = new WP_Query($disheArgs);?>
						<?php if($dishe->have_posts()): ?>
							<?php while($dishe->have_posts()): $dishe->the_post() ?>
								<li class="mb-menu__item">
									<div>
										<h5 class="mb-meny__item-title"><?php the_title() ?> </h5>
										<span><?php the_field('price') ?></span>
									</div>
								</li>
							<?php endwhile; ?>
						<?php endif;?>
					</ul>
				</div>

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

<!-- <div class="row">
	<div class="columns">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			   <?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<i class="fa fa-user"></i>
	</div>
</div> -->

<?php get_footer(); ?>
