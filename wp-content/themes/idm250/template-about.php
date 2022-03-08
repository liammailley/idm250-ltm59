<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="about_full">
  <h1 class="about_title"><?php the_title(); ?>
  </h1>

  <div class="about_body">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();