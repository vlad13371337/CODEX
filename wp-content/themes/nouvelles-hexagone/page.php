<?php
get_header();
?>
<section class="article-page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="article-meta"><?php echo get_the_date(); ?> · <?php the_author(); ?></div>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
