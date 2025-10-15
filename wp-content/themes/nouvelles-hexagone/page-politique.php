<?php
/* Template Name: Politique */
$meta = [
    'title' => 'Politique | Nouvelles Hexagone',
    'description' => "Toute l’actualité politique française et européenne analysée par Nouvelles Hexagone.",
    'keywords' => 'politique française, assemblée nationale, réformes, gouvernance',
    'image' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Politique</div>
        <h1>Politique</h1>
        <p>Décrypter les décisions publiques, les équilibres institutionnels et les débats parlementaires qui façonnent la République.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Réforme institutionnelle : le Sénat arbitre la décentralisation',
                'image' => 'https://images.unsplash.com/photo-1466781783364-36c955e42a7f?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Après trois semaines de consultations, la chambre haute propose un compromis sur la répartition des compétences territoriales.',
                'date' => '12 avril 2024',
                'author' => 'Claire Duhamel',
                'link' => home_url('/blog-article-politique-reforme'),
            ],
            [
                'title' => 'Diplomatie parlementaire : l’Assemblée renforce les alliances européennes',
                'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Une délégation transpartisane revient de Bruxelles avec une feuille de route pour co-construire les régulations climatiques.',
                'date' => '9 avril 2024',
                'author' => 'Louis Perret',
                'link' => home_url('/blog-article-politique-diplomatie'),
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
