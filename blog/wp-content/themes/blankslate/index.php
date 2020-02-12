<?php get_header(); ?>
<div class = "content1">
<main id="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
 
</main>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script src = "/./././js/script.js"></script>