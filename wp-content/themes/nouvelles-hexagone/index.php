<?php
if (is_front_page()) {
    include locate_template('front-page.php');
    return;
}
get_header();
?>
<section class="section">
    <div class="section-title">
        <h1><?php the_title(); ?></h1>
        <p>Découvrez nos dernières analyses et reportages.</p>
    </div>
    <div class="grid grid-articles">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="article-card">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                <?php endif; ?>
                <div class="article-content">
                    <div class="article-meta"><?php echo get_the_date(); ?> · <?php the_author(); ?></div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a class="btn-link" href="<?php the_permalink(); ?>">Lire l’article</a>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>Aucun contenu n’a été publié pour le moment.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
