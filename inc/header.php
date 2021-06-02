<?php wp_body_open(); ?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container px-5">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <ul>
      <?php
      $main_menu = wp_get_nav_menu_items('メニュー名', array());
      $count = 0;
      $submenu = false;

      foreach ($main_menu as $menu) {
        if (!$menu->menu_item_parent) {
          $parent_id = $menu->ID;
          echo '<li><a href="' . $menu->url . '">' . $menu->title . '</a>';
        }
        if ($parent_id == $menu->menu_item_parent) {
          if (!$submenu) {
            $submenu = true;
            echo '<ul class="footer_lower-menu">';
          }
          echo '<li><a href="' . $menu->url . '">' . $menu->title . '</a></li>';
          if ($main_menu[$count + 1]->menu_item_parent != $parent_id && $submenu) {
            echo '</ul>';
            $submenu = false;
          }
        }
        if ($main_menu[$count + 1]->menu_item_parent != $parent_id) {
          echo '</li>';
          $submenu = false;
        }
        $count++;
      }
      ?>
    </ul>
  </div>
  </div>
</nav>