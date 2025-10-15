<?php
/* Template Name: Technologies */
$meta = [
    'title' => 'Technologies | Nouvelles Hexagone',
    'description' => "Innovations numériques, souveraineté technologique et recherche française.",
    'keywords' => 'technologies françaises, innovation, numérique, cybersécurité',
    'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Technologies</div>
        <h1>Technologies</h1>
        <p>Comprendre les ruptures scientifiques, l’écosystème start-up et les stratégies de cybersouveraineté européennes.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Quantique : la France consolide son leadership européen',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Entretien avec les chercheurs du plateau de Saclay qui préparent la prochaine rupture industrielle.',
                'date' => '8 avril 2024',
                'author' => 'Julien Ménard',
                'link' => home_url('/blog-article-technologies-quantique'),
            ],
            [
                'title' => 'Cybersouveraineté : l’Europe forge ses outils de confiance',
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Audit des solutions cloud de confiance et des dispositifs de cyberdéfense partagée au sein de l’Union.',
                'date' => '6 avril 2024',
                'author' => 'Amina Rabhi',
                'link' => home_url('/blog-article-technologies-cybersecurite'),
            ],
        ];
        foreach ($articles as $article) : ?>
            <article class="article-card">
                <a href="<?php echo esc_url($article['link']); ?>">
                    <img src="<?php echo esc_url($article['image']); ?>" alt="<?php echo esc_attr($article['title']); ?>">
                </a>
                <div class="article-content">
                    <div class="article-meta"><?php echo esc_html($article['date']); ?> · <?php echo esc_html($article['author']); ?></div>
                    <h3><a href="<?php echo esc_url($article['link']); ?>"><?php echo esc_html($article['title']); ?></a></h3>
                    <p><?php echo esc_html($article['excerpt']); ?></p>
                    <a class="btn-link" href="<?php echo esc_url($article['link']); ?>">Lire l’article</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>
