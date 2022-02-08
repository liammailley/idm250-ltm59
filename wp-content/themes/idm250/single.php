<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="single_full">
  <h1 class="single_title"><?php the_title(); ?></h1>
  <div class="single_body">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();