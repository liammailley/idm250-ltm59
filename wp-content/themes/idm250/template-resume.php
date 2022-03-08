<?php
/* Template Name: Resume */
?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="resume_full">
  <h1 class="resume_title"><?php the_title(); ?>
  </h1>

  <div class="resume_body">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();