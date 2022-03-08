<?php
/* Template Name: Home */
?>

<?php get_header(); ?>

<div class="home_top">
     <div class="home_leftbox">
          <div class="home_leftbox_top">
               <h1 class="home_leftbox_title">Liam Mailley</h1>
               <h2 class="home_leftbox_subtitle">design / ux / ui</h2>
               <p class="home_leftbox_subtitle2">portfolio</p>
          </div>
          <!--<div class="home_leftbox_mid"></div>-->
          <!--<div class="home_leftbox_bot">
               <h2 class="home_resumeBox">Resume</h2>
               <h2 class="home_instaBox">Insta</h2>
               <h2 class="home_githubBox">GitHub</h2>
               <h2 class="home_linkedinBox">Linkedin</h2>
          </div>-->
     </div>
</div>

<div class="divider"></div>

<h1 class="mobile_title">LIAM MAILLEY</h1>
<h2 class="mobile_subtitle">design / ux / ui</h2>
<p class="mobile_subtitle2">portfolio</p>

<div class="home_posts_container">
     <?php
          get_template_part('components/recent-works');
          get_template_part('components/recent-posts');
     ?>
</div>

<?php get_footer();