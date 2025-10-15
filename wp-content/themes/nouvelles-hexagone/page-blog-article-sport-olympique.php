<?php
$meta = [
    'title' => 'Paris 2024 : l’héritage olympique se dessine | Nouvelles Hexagone',
    'description' => "Analyse des préparatifs des Jeux olympiques de Paris 2024 et de l’héritage pour les territoires.",
    'keywords' => 'Paris 2024, héritage olympique, sport français',
    'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-sport-olympique'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/sport')); ?>">Retour à Sport</a>
    <h1>Paris 2024 : l’héritage olympique se dessine</h1>
    <div class="article-meta">Publié le 3 avril 2024 · Par Nicolas Jourdan · Catégorie : Sport · Tags : Jeux olympiques, infrastructures, héritage</div>
    <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=1200&q=80" alt="Stade olympique">
    <p>Les chantiers olympiques entrent dans leur dernière phase. À Saint-Denis, le village des athlètes est livré avec plusieurs mois d’avance et respecte des standards environnementaux élevés : matériaux biosourcés, circuits d’eau fermés et énergie 100 % renouvelable.</p>
    <p>Le comité d’organisation confirme que 95 % des sites seront réutilisés ou reconvertis après les Jeux. Des associations locales ont été associées au processus pour assurer des retombées sociales durables, notamment en matière de logements et d’infrastructures sportives de proximité.</p>
    <h2>Mobilité et participation citoyenne</h2>
    <p>Île-de-France Mobilités déploie une nouvelle offre de transports nocturnes pour faciliter les déplacements des spectateurs. Les habitants sont invités à rejoindre le programme de volontaires, qui a déjà enregistré plus de 250 000 candidatures.</p>
    <p>Les experts estiment que l’événement pourrait générer un impact économique de 10 milliards d’euros et accélérer la pratique sportive dans les écoles. Des programmes d’éducation à l’olympisme ont été intégrés aux établissements scolaires.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-sport-olympique')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-sport-olympique')); ?>&text=Paris%202024%20:%20l’héritage%20olympique%20se%20dessine" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-sport-olympique')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
