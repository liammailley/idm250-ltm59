<?php
get_header(); ?>

<h1 class="listing_title"><?php the_archive_title(); ?>
</h1>
<br>

  <div class="listing_results_container">
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/project-teaser');
    endwhile;
    the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('« Previous', 'txdomain'),
        'next_text' => __('Next »', 'txdomain')
    ]);
  ?>
  </div>

<?php get_footer();