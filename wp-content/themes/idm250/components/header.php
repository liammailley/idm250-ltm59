<header class="container header-main">
     <h1 class="favicon_container"><img style="height: 50px;"
          src="<?php echo get_template_directory_uri() ?>/dist/img/liam_favicon.png"
          alt="Website Logo">
     </h1>
     <div class="menu-choices-container">
          <?php
          wp_nav_menu(['theme_location' => 'primary_menu']);
          ?>
     </div>
     <div class="search-form-container">
          <?php
     get_template_part('components/search-form');
     ?>
     </div>
</header>