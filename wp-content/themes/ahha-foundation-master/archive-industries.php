<?php get_header(); ?>

<main role="main">
  <header>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/servicesmain.jpg" alt="consultation" title="MBC can consult with you on your needs.">
  </header>

  <!-- section -->
  <section>
    <h1>Midwest Business Consulting: Industries We Serve</h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h2><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; endif; ?>

  </section>
</main>

<?php get_footer(); ?>
