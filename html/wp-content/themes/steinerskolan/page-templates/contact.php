<?php /* Template name: Kontakt */ ?>

<?php get_header(); ?>

<section class="contact-page">
  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>

  <?php endif; ?>
</section>

<?php get_footer(); ?>