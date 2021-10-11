<?php get_header(); ?>

<!-- <div class="default-page"> -->
<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>


    <!--  <h1><?php the_title(); ?></h1> -->

    <?php the_content(); ?>

  <?php endwhile; ?>

<?php endif; ?>
<!-- </div> -->
<?php get_footer(); ?>