<?php get_header(); ?>

<div class="default-page">
  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <section>
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
      </section>
    <?php endwhile; ?>

  <?php endif; ?>
</div>
<?php get_footer(); ?>