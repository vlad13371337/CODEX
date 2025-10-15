<?php
$meta = [
    'title' => 'Logement inclusif : les métropoles testent les résidences partagées | Nouvelles Hexagone',
    'description' => "Analyse des projets de résidences partagées qui favorisent l’inclusion et la solidarité intergénérationnelle.",
    'keywords' => 'logement inclusif, résidences partagées, métropoles françaises',
    'image' => 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-societe-logement'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/societe')); ?>">Retour à Société</a>
    <h1>Logement inclusif : les métropoles testent les résidences partagées</h1>
    <div class="article-meta">Publié le 2 avril 2024 · Par Benjamin Vautrin · Catégorie : Société · Tags : logement, inclusion, métropoles</div>
    <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?auto=format&fit=crop&w=1200&q=80" alt="Résidence partagée">
    <p>À Bordeaux, Lille et Toulouse, les bailleurs sociaux expérimentent des résidences partagées associant étudiants, seniors et familles monoparentales. Ces habitats proposent des espaces communs mutualisés et un accompagnement social sur mesure.</p>
    <p>Les résidents signent une charte de cohabitation qui favorise l’entraide quotidienne. Des médiateurs professionnels assurent la coordination des activités et la résolution des conflits.</p>
    <h2>Impact mesurable</h2>
    <p>Les premières évaluations menées par l’Observatoire national du logement indiquent une réduction de 25 % des charges pour les occupants et une amélioration significative du sentiment d’appartenance. Les métropoles envisagent d’étendre le dispositif à des publics en transition professionnelle.</p>
    <p>Ces programmes bénéficient d’un soutien financier de l’État et du Fonds social européen, confirmant la volonté d’intégrer l’inclusion sociale aux politiques de logement.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-societe-logement')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-societe-logement')); ?>&text=Logement%20inclusif%20:%20les%20métropoles%20testent%20les%20résidences%20partagées" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-societe-logement')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
