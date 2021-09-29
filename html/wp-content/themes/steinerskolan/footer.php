</main>
<footer>

  <?php $menuItems = wp_get_nav_menu_items('Footer Menu'); ?>

  <nav>
    <ul>
      <?php $currentPageId = $wp_query->queried_object_id;
      foreach ($menuItems as $item) : ?>
        <li>
          <a class="<?= $item->object_id == $currentPageId ? ' active' : '' ?>" href="<?= $item->url; ?>">
            <?= $item->title; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>

</footer>

<?php wp_footer(); ?>
</body>

</html>