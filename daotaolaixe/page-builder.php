<?php 
/*
  Template Name: Page Builder
 */
get_header(); 
?>

<section id="main">
    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article><!-- #post -->

    <?php endwhile; ?>
</section>

<!--Facebook pixcel track-->
<script>fbq('track', 'ViewContent');</script>

<?php get_footer(); ?>