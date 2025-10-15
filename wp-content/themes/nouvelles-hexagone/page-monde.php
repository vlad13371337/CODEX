<?php
/* Template Name: Monde */
$meta = [
    'title' => 'Monde | Nouvelles Hexagone',
    'description' => "Géopolitique, Union européenne et grands équilibres internationaux vus de France.",
    'keywords' => 'géopolitique, Union européenne, diplomatie française',
    'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1496568816309-51d7c20e6c57?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Monde</div>
        <h1>Monde</h1>
        <p>Mettre en perspective les grands dossiers internationaux et les alliances qui redessinent l’ordre mondial.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Union européenne : une feuille de route énergétique commune',
                'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Analyse des négociations menées à Bruxelles pour sécuriser l’approvisionnement continental.',
                'date' => '30 mars 2024',
                'author' => 'Adrien Pruvost',
                'link' => home_url('/blog-article-monde-europe-unie'),
            ],
            [
                'title' => 'Diplomatie climatique : Paris consolide l’alliance indo-pacifique',
                'image' => 'https://images.unsplash.com/photo-1529338296731-c4280a44fc47?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Focus sur les initiatives de coopération énergétique et maritime avec l’Australie et l’Inde.',
                'date' => '25 mars 2024',
                'author' => 'Sofia Lambert',
                'link' => home_url('/blog-article-monde-indo-pacifique'),
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
