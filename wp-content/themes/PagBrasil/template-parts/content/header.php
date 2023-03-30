<body <?php body_class( is_user_logged_in() ? 'logged-in' : '' ); ?>>

<nav class="nav-pagbrasil navbar bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="https://www.pagbrasil.com/wp-content/themes/pagbrasil_next/images/logo-pagbrasil-color-v3.svg"
        alt="Bootstrap" width="200">
    </a>
    <ul class="nav nav-underline">
      <?php
      $menu_items = wp_get_nav_menu_items('Geral');

      foreach ($menu_items as $menu_item) :
        $url = $menu_item->url;
        $title = $menu_item->title;
      ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url; ?>"><?php echo $title; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>


 
