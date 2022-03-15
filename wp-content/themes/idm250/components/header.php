<header class="container header-main">
     <a class="favicon_container"  href="<?php echo home_url(); ?>">
          <h1><img style="height: 50px;" href="http://www.google.com"
               src="<?php echo get_template_directory_uri() ?>/dist/img/liam_favicon.png"
               alt="Website Logo">
          </h1>
     </a>
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