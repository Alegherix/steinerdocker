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
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.101 0.9 18 2 18H16C17.1 18 18 17.101 18 16V2C18 0.9 17.1 0 16 0ZM8.984 14.523C10.4529 14.5227 11.8615 13.939 12.9 12.9003C13.9386 11.8616 14.522 10.4529 14.522 8.984C14.522 8.646 14.479 8.32 14.419 8H16V15.216C16 15.3069 15.9821 15.3968 15.9472 15.4807C15.9123 15.5647 15.8612 15.6409 15.7968 15.705C15.7325 15.7691 15.656 15.8198 15.572 15.8543C15.4879 15.8888 15.3979 15.9064 15.307 15.906H2.693C2.60214 15.9064 2.51209 15.8888 2.42803 15.8543C2.34397 15.8198 2.26755 15.7691 2.20316 15.705C2.13877 15.6409 2.08767 15.5647 2.05281 15.4807C2.01795 15.3968 2 15.3069 2 15.216V8H3.549C3.488 8.32 3.445 8.646 3.445 8.984C3.44527 10.453 4.02892 11.8617 5.06763 12.9004C6.10633 13.9391 7.51505 14.5227 8.984 14.523V14.523ZM5.523 8.984C5.523 8.5295 5.61252 8.07944 5.78645 7.65953C5.96038 7.23962 6.21532 6.85809 6.5367 6.5367C6.85809 6.21532 7.23962 5.96038 7.65953 5.78645C8.07944 5.61252 8.5295 5.523 8.984 5.523C9.43851 5.523 9.88856 5.61252 10.3085 5.78645C10.7284 5.96038 11.1099 6.21532 11.4313 6.5367C11.7527 6.85809 12.0076 7.23962 12.1815 7.65953C12.3555 8.07944 12.445 8.5295 12.445 8.984C12.445 9.90191 12.0804 10.7822 11.4313 11.4313C10.7822 12.0804 9.90191 12.445 8.984 12.445C8.06609 12.445 7.18577 12.0804 6.5367 11.4313C5.88764 10.7822 5.523 9.90191 5.523 8.984V8.984ZM15.307 5H13.692C13.5086 4.99947 13.3329 4.9264 13.2033 4.79673C13.0736 4.66707 13.0005 4.49137 13 4.308V2.691C13 2.309 13.31 2 13.691 2H15.306C15.69 2 16 2.309 16 2.691V4.307C16 4.688 15.69 5 15.307 5Z" fill="black" />
            </svg>
          </a>
        </li>
      <?php elseif (strtolower($item->title) === "instagram") : ?>
        <li>
          <a class="" href="<?= $item->url; ?>">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 0H2C0.9 0 0 0.9 0 2V16C0 17.101 0.9 18 2 18H9V11H7V8.525H9V6.475C9 4.311 10.212 2.791 12.766 2.791L14.569 2.793V5.398H13.372C12.378 5.398 12 6.144 12 6.836V8.526H14.568L14 11H12V18H16C17.1 18 18 17.101 18 16V2C18 0.9 17.1 0 16 0Z" fill="black" />
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