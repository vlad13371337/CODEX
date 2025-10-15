<?php
/* Template Name: Sport */
$meta = [
    'title' => 'Sport | Nouvelles Hexagone',
    'description' => "Suivi stratégique du sport français, des politiques publiques et de la performance.",
    'keywords' => 'sport français, Jeux olympiques, sport féminin, gouvernance sportive',
    'image' => 'https://images.unsplash.com/photo-1503416997304-7d276d4c9283?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1503416997304-7d276d4c9283?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Sport</div>
        <h1>Sport</h1>
        <p>Comprendre les enjeux des politiques sportives, des grands événements et des dynamiques de performance hexagonales.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Paris 2024 : l’héritage olympique se dessine',
                'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Focus sur les infrastructures et la mobilisation citoyenne à 100 jours de l’ouverture des Jeux.',
                'date' => '3 avril 2024',
                'author' => 'Nicolas Jourdan',
                'link' => home_url('/blog-article-sport-olympique'),
            ],
            [
                'title' => 'Sport féminin : la France bâtit une ligue professionnelle durable',
                'image' => 'https://images.unsplash.com/photo-1521412644187-c49fa049e84d?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Clubs, diffuseurs et ministères s’allient pour financer la visibilité médiatique des athlètes.',
                'date' => '28 mars 2024',
                'author' => 'Camille Hervieux',
                'link' => home_url('/blog-article-sport-feminin'),
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
