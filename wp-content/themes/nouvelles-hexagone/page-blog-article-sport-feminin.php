<?php
$meta = [
    'title' => 'Sport féminin : la France bâtit une ligue professionnelle durable | Nouvelles Hexagone',
    'description' => "Analyse des mesures prises pour structurer une ligue professionnelle féminine en France.",
    'keywords' => 'sport féminin, ligue professionnelle, gouvernance sportive',
    'image' => 'https://images.unsplash.com/photo-1521412644187-c49fa049e84d?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-sport-feminin'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/sport')); ?>">Retour à Sport</a>
    <h1>Sport féminin : la France bâtit une ligue professionnelle durable</h1>
    <div class="article-meta">Publié le 28 mars 2024 · Par Camille Hervieux · Catégorie : Sport · Tags : sport féminin, gouvernance, investissement</div>
    <img src="https://images.unsplash.com/photo-1521412644187-c49fa049e84d?auto=format&fit=crop&w=1200&q=80" alt="Athlètes féminines">
    <p>Le ministère des Sports annonce la création d’une ligue professionnelle féminine multisports, dotée d’un fonds d’amorçage de 150 millions d’euros sur cinq ans. Les clubs fondateurs s’engagent à professionnaliser leurs structures et à garantir l’égalité salariale progressive.</p>
    <p>Les diffuseurs publics et privés ont conclu un accord pour assurer une exposition médiatique régulière. Des créneaux premium seront réservés aux compétitions féminines sur les grandes chaînes nationales.</p>
    <h2>Plan de formation</h2>
    <p>Un programme de formation des entraîneurs et dirigeantes est lancé en partenariat avec les universités. Il vise à accompagner la montée en compétence des encadrantes et à favoriser la mixité dans les instances de décision.</p>
    <p>Les collectivités territoriales financeront la rénovation des infrastructures pour répondre aux exigences des compétitions internationales. Des clauses RSE seront intégrées aux contrats de sponsoring pour promouvoir l’égalité et la lutte contre les discriminations.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-sport-feminin')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-sport-feminin')); ?>&text=Sport%20féminin%20:%20la%20France%20bâtit%20une%20ligue%20professionnelle%20durable" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-sport-feminin')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
