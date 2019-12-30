<?php
/**
 * Template part for displaying single product
 *
 */

?>

<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post(); ?>
			<div class="product" >
				<div class="featured-slider">
					<ul class="silde-holder">
						<li class="slide-1">
							<?php
								$feature_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
							?>
							<div class="feature-img" id="slide-feature-img" style="background-image: url('<?php echo $feature_img_url; ?>')"></div>
						</li>
						<li class="slide-2">
							<?php
								$feature_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
							?>
							<div class="feature-img" id="slide-feature-img" style="background-image: url('<?php echo $feature_img_url; ?>')"></div>
						</li>
						<li class="slide-3">
							<?php
								$feature_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
							?>
							<div class="feature-img" id="slide-feature-img" style="background-image: url('<?php echo $feature_img_url; ?>')"></div>
						</li>
					</ul>
				</div>
				
				<aside class="slider-navigation">
					<div class="slider-numbers">
						<p class="active-number">1</p>
						<p class="dash">
							<i class="minus icon"></i>
						</p>
						<p class="count">3</p>
					</div>
				</aside>

				<div class="large-container">
					<div class="summary">
						<em><?php the_field('price'); ?></em>
						<h1 class="product_title"><?php the_title(); ?></h1>
						<em class="product_description"><?php the_content(); ?></em>
						<form class="variations-form" action="">
							<table class="variations">
								<tbody>
									<tr>
										<td class="value">
											<div class="radio-button-section">
												<input type="radio" id="s" class="size-radio" name="size" value="s">
												<label for="s">
													<span class="radio">s</span>
												</label>
											</div>
											<div class="radio-button-section">
												<input type="radio" id="m" class="size-radio" name="size" value="m">
												<label for="m">
													<span class="radio">m</span>
												</label>
											</div>
											<div class="radio-button-section">
												<input type="radio" id="l" class="size-radio" name="size" value="l">
												<label for="l">
													<span class="radio">l</span>
												</label>
											</div>
											<div class="radio-button-section">
												<input type="radio" id="xl" class="size-radio" name="size" value="xl">
												<label for="xl">
													<span class="radio">xl</span>
												</label>
											</div>
											<div class="radio-button-section">
												<input type="radio" id="xxl" class="size-radio" name="size" value="xxl">
												<label for="xxl">
													<span class="radio">xxl</span>
												</label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>

							<div class="add-to-bag">
								<button class="ui basic button add-to-bag-button" type="submit">
									<span>Add to Bag</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
			<!-- <?php the_post_thumbnail(); ?> -->
			
			
		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();