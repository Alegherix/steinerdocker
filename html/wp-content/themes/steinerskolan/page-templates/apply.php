<?php /* Template name: Ansökan */ ?>

<?php get_header(); ?>

<section class="apply-page">
  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>

  <?php endif; ?>
</section><!-- /row -->

<?php get_footer(); ?>