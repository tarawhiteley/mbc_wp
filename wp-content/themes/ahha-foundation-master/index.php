<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1>Knowledge Bank</h1>
			 <?php if (have_posts()) : ?>
					 <?php while (have_posts()) : the_post(); ?>
						 <div class="blogcard">
							<!-- <?php
									if ( has_post_thumbnail()) {
										$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
										echo $thumbnail[0];
									} ?> -->

								 <h3 class="blogcard_category"><?php $all_categories = get_the_category();
								 foreach ($all_categories as $one) { ?>
									 <a href="<?php echo $one->slug; ?>"><?php echo $one->name; ?></a>&nbsp;
								 <?php } ?></h3>
								 <?php the_post_thumbnail(); ?>
								 	<h2 class="blogcard_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
										<p class="blog"><?php the_excerpt(); ?></h2></p>
						</div>
		<?php endwhile; ?>

		<?php else: ?>
			<h2>Sorry, nothing was found.</h2>
		<?php endif; ?>

<?php get_sidebar(); ?>

	</main>



<?php get_footer(); ?>
