<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<h1>Knowledge Bank</h1>
			 <?php if (have_posts()) : ?>
				 <div class="bloggrid">
					 <?php while (have_posts()) : the_post(); ?>

						 <div class="blogcard">
							 <a href="#">
								 <?php
										if ( has_post_thumbnail()) {
										$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
										echo $thumbnail[0];
										} ?>
								 <h3 class="blogcard_category"><?php $all_categories = get_the_category();
								 foreach ($all_categories as $one) { ?>
									 <a href="<?php echo $one->slug; ?>"><?php echo $one->name; ?></a>&nbsp;
								 <?php } ?></h3>
							<h2 class="blogcard_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<!--<h2><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>

			<?php get_template_part('partials/loop'); ?>

			<?php get_template_part('partials/pagination'); ?> -->

		</div> <!-- ends .blogcard -->
		<?php endwhile; ?>
	</div> <!-- ends .bloggrid -->
<?php else: ?>
	<h2>Sorry, nothing was found.</h2>
<?php endif; ?>


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
