<?php
// https://developer.wordpress.org/reference/classes/wp_query/

$arg = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'order' => 'DESC',

];
$project_query = new WP_Query($arg);

?>

<section class="featured-works">
  <h2 class="allprojects">recent posts</h2>
  <div class="posts">
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
    <div class="recent-posts-teaser">
        <img class="recent-posts-img"
          src="<?php echo $featured_image['src']; ?>"
          alt="<?php echo $featured_image['alt']; ?>">
        <h2 class="recent-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="recent-posts-excerpt"><?php the_excerpt(); ?>
        </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();

  ?>
  </div>
</section>