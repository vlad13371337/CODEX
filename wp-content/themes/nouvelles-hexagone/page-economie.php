<?php
/* Template Name: Économie */
$meta = [
    'title' => 'Économie | Nouvelles Hexagone',
    'description' => "Analyses économiques et financières françaises, européennes et internationales.",
    'keywords' => 'économie française, industrie, finance durable, entreprises',
    'image' => 'https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Économie</div>
        <h1>Économie</h1>
        <p>Observer les stratégies industrielles, la transition énergétique et les innovations financières qui transforment les territoires.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Transition énergétique : Paris mise sur l’industrie verte',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Décryptage des investissements et partenariats publics-privés qui accélèrent la compétitivité durable.',
                'date' => '10 avril 2024',
                'author' => 'Marc Leclerc',
                'link' => home_url('/blog-article-economie-transition'),
            ],
            [
                'title' => 'Finance circulaire : les collectivités financent l’économie régénérative',
                'image' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Banques publiques et fonds à impact soutiennent les filières de recyclage et d’écoconception en régions.',
                'date' => '7 avril 2024',
                'author' => 'Nina Roche',
                'link' => home_url('/blog-article-economie-circulaire'),
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
