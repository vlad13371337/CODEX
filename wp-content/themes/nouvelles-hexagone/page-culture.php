<?php
/* Template Name: Culture */
$meta = [
    'title' => 'Culture | Nouvelles Hexagone',
    'description' => "Scène artistique, patrimoine vivant et industries créatives françaises.",
    'keywords' => 'culture française, art, patrimoine, industries créatives',
    'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1491555103944-7c647fd857e6?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Culture</div>
        <h1>Culture</h1>
        <p>Explorer l’effervescence artistique parisienne, la création française et les coopérations culturelles européennes.</p>
    </div>
</section>
<section class="section">
    <div class="grid grid-articles">
        <?php
        $articles = [
            [
                'title' => 'Nouvelle vague : les créateurs qui réinventent la scène parisienne',
                'image' => 'https://images.unsplash.com/photo-1529429617124-aee1f6e0c9ea?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Rencontre avec les artistes qui exportent leur vision dans les capitales européennes.',
                'date' => '1 avril 2024',
                'author' => 'Maëlle Courtois',
                'link' => home_url('/blog-article-culture-nouvelle-vague'),
            ],
            [
                'title' => 'Patrimoine vivant : ateliers et savoir-faire labellisés par l’UNESCO',
                'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Artisans, musées et collectivités bâtissent des passerelles pour transmettre les métiers d’art.',
                'date' => '26 mars 2024',
                'author' => 'Isabelle Meyer',
                'link' => home_url('/blog-article-culture-patrimoine'),
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
