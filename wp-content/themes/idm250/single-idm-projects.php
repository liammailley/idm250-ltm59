<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-projects container">
  <main class="single_full">
    <h1 class="single_title"><?php the_title(); ?></h1>

    <div class="single_categories">
      <b>
      <?php
        $terms = get_the_terms(get_the_ID(), 'idm-project-categories');
        if ($terms) {
            foreach ($terms as $term) {
                echo $term->name . '<br>';
            }
        }
    ?>
      </b>
    </div>
    <div class="editor single_body">
         <div class="dynamic">
               <h3 class="dynamic_indv">Category: <b><?php echo get_field('project_category'); ?></b>
               </h3>
               <h3 class="dynamic_indv">Year Completed: <b><?php the_field('project_year'); ?></b>
               </h3>
               <h3 class="dynamic_indv">Class / Client: <b><?php the_field('project_client'); ?></b>
               </h3>
          </div>
      <!-- start content -->
      <?php the_content(); ?>
      <!-- end content -->
    </div>
  </main>
</div>
<?php endwhile; ?>

<?php get_footer();