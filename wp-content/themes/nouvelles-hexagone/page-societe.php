<?php
/* Template Name: Société */
$meta = [
    'title' => 'Société | Nouvelles Hexagone',
    'description' => "Transformations sociales, solidarités locales et innovations citoyennes.",
    'keywords' => 'société française, inclusion, cohésion sociale, territoires',
    'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Société</div>
        <h1>Société</h1>
        <p>Suivre les initiatives citoyennes, les politiques publiques sociales et les mutations des modes de vie.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Solidarités locales : Paris réinvente la cohésion urbaine',
                'image' => 'https://images.unsplash.com/photo-1529101091764-c3526daf38fe?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Cartographie des initiatives citoyennes qui transforment la capitale en laboratoire social.',
                'date' => '6 avril 2024',
                'author' => 'Élodie Raynal',
                'link' => home_url('/blog-article-societe-solidarite'),
            ],
            [
                'title' => 'Logement inclusif : les métropoles testent les résidences partagées',
                'image' => 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Un modèle d’habitat intergénérationnel offre des solutions concrètes contre l’isolement et la précarité.',
                'date' => '2 avril 2024',
                'author' => 'Benjamin Vautrin',
                'link' => home_url('/blog-article-societe-logement'),
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
