<?php
/* Template Name: Immigration */
$meta = [
    'title' => 'Immigration | Nouvelles Hexagone',
    'description' => "Politiques migratoires, intégration et mobilité internationale en France.",
    'keywords' => 'immigration, intégration, mobilité, talents internationaux',
    'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Immigration</div>
        <h1>Immigration</h1>
        <p>Analyser les parcours, les politiques d’accueil et les coopérations européennes pour une intégration durable.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Intégration : les nouvelles passerelles franco-européennes',
                'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Reportage sur les dispositifs d’accompagnement des talents internationaux en Île-de-France.',
                'date' => '4 avril 2024',
                'author' => 'Hélène Marchand',
                'link' => home_url('/blog-article-immigration-integration'),
            ],
            [
                'title' => 'Talents francophones : la diplomatie éducative accélère',
                'image' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Campus France et les régions ciblent les compétences rares pour renforcer les filières industrielles.',
                'date' => '31 mars 2024',
                'author' => 'Rachid Aït Ben Ali',
                'link' => home_url('/blog-article-immigration-talents'),
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
