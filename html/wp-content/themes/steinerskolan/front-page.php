<?php get_header(); ?>

<div class="front-page">
  <!-- <?php if (get_header_image()) : ?>
    <div class="hero-wrapper">
      <img class="hero-img " src="<?php header_image(); ?>" alt="" />
    </div>
  <?php endif; ?> -->

  <!-- Detta är home/front page -->

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <!-- <?php if (has_post_thumbnail()) : ?>

            <div class="hero-wrapper">
              <?php the_post_thumbnail('large', array('class' => 'hero-img')); ?>
            </div>

          <?php endif; ?> -->

      <?php the_content(); ?>

    <?php endwhile; ?>

  <?php endif; ?>


  <?php

  $latestNews = get_posts([
    'post_type' => 'news', 'numberposts' => 3,
    'order' => 'desc',
  ]);
  ?>

  <section class="news-section">

    <?php if ($latestNews) : ?>
      <h2>Nyheter</h2>
      <div class="news-section-grid">
        <?php foreach ($latestNews as $post) : setup_postdata($post);  ?>

          <article class="news-article">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
              <h3>
                <?php the_title(); ?>
              </h3>
              <span><?php the_date(); ?></span>
              <div>
                <?php the_excerpt(); ?>
              </div>
            </a>
          </article>

        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </section>
</div>
<?php get_footer(); ?>