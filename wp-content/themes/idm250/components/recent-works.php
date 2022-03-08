<?php
// https://developer.wordpress.org/reference/classes/wp_query/
$arg = [
    'post_type' => 'idm-projects',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'DESC'
];
$project_query = new WP_Query($arg);

?>

<section class="featured-works">
  <h2 class="allprojects">featured projects</h2>
  <div class="works">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post(); ?>
    <?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());

    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/600x450';
    };
    ?>
    <div class="recent-works-container" style="background-image: url(<?php echo $featured_image['src']; ?>);">
      <div class="recent-works-teaser">
        <h2 class="recent-works-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="recent-works-excerpt"><?php the_excerpt(); ?>
        </div>
      </div>
      <div class="recent-works-img-container">
      </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
  ?>
  </div>
</section>