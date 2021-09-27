<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <div>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
            } ?>
        </div>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>