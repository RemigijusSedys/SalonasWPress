<?php /* Template Name: Galery */ ?>
<?php get_header(); ?>


<?php echo get_the_title() ?>
<?php
if (have_posts()) {
   while (have_posts()) {
      the_post();
      get_template_part('template-parts/content', 'galery');
   }
} ?>


<?php get_footer(); ?>