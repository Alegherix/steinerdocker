<?php /* Template name: Kontakt */ ?>

<?php get_header(); ?>

Detta är egen page template
<div class="row">
  <div class="col">
    <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>

      <?php endwhile; ?>

    <?php endif; ?>
  </div><!-- /col -->
</div><!-- /row -->

<?php get_footer(); ?>