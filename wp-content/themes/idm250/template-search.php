<?php
/* Template Name: Search */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="search_full">
  <h1 class="search_title"><?php the_title(); ?>
  </h1>

  <div class="search_body">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();