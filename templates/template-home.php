<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>

<section class="mb-slider">
	<?php echo home_slider_template(); ?>
</section>

<section class="mb-menu">
	<div class="row">
		<div class="columns medium-6">
			<ul>
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
							<li>
								<?php the_title() ?>
								<?php the_field('price') ?> грн;
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

	<?php get_footer(); ?>
