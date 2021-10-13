</main>
<footer>

  <?php if (has_custom_logo()) : ?>
    <div class="site-logo"><?php the_custom_logo(); ?></div>
  <?php else : ?>
    <a class="navbar-brand" href="<?= site_url(); ?>"> <?php bloginfo('name'); ?></a>
  <?php endif; ?>

  <?php $menuItems = wp_get_nav_menu_items('Footer Menu'); ?>

  <div class="footerAdress">
    <p class="adressHeading">Adress</p>
    <p>Tallhöjdsgatan 1 <br /> 416 74 GÖTEBORG</p>
  </div>

  <nav class="links">
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

  <?php $socialMedia = wp_get_nav_menu_items('Social Media'); ?>

  <ul class="socials">
    <?php foreach ($socialMedia as $item) : ?>

      <?php if (strtolower($item->title) === "facebook") : ?>
        <li>
          <a class="" href="<?= $item->url; ?>">
            <svg width="31" height="33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#a)">
                <path d="M5.66.918C2.525.918 0 3.525 0 6.761v20.315c0 3.236 2.525 5.843 5.66 5.843h10.666v-12.51h-3.204v-4.504h3.204v-3.848c0-3.024 1.894-5.8 6.256-5.8 1.766 0 3.072.175 3.072.175l-.103 4.207s-1.332-.013-2.785-.013c-1.573 0-1.825.748-1.825 1.99v3.289h4.735l-.207 4.504H20.94v12.51h4.4c3.135 0 5.66-2.607 5.66-5.843V6.762C31 3.525 28.475.918 25.34.918H5.66Z" fill="#000" />
              </g>
              <defs>
                <clipPath id="a">
                  <path fill="#fff" transform="translate(0 .918)" d="M0 0h31v32H0z" />
                </clipPath>
              </defs>
            </svg>

          </a>
        </li>
      <?php elseif (strtolower($item->title) === "instagram") : ?>
        <li>
          <a class="" href="<?= $item->url; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
            </svg>
          </a>
        </li>
      <?php endif; ?>

    <?php endforeach; ?>
  </ul>

</footer>

<?php wp_footer(); ?>
</body>

</html>