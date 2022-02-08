<?php
/* Template Name: Portfolio Listing */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="listing_full">
  <h1 class="listing_title"><?php the_title(); ?>
  </h1>

  <div class="listing_body">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();