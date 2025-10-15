<?php
$meta = [
    'title' => 'Patrimoine vivant : ateliers et savoir-faire labellisés par l’UNESCO | Nouvelles Hexagone',
    'description' => "Zoom sur les artisans français labellisés par l’UNESCO et les initiatives pour transmettre les savoir-faire.",
    'keywords' => 'patrimoine vivant, savoir-faire, UNESCO',
    'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-culture-patrimoine'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/culture')); ?>">Retour à Culture</a>
    <h1>Patrimoine vivant : ateliers et savoir-faire labellisés par l’UNESCO</h1>
    <div class="article-meta">Publié le 26 mars 2024 · Par Isabelle Meyer · Catégorie : Culture · Tags : patrimoine, artisanat, transmission</div>
    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80" alt="Artisan français">
    <p>La France compte désormais 23 savoir-faire inscrits au patrimoine culturel immatériel de l’UNESCO. Des ateliers parisiens spécialisés dans la dorure, la haute couture et la facture instrumentale ouvrent leurs portes aux jeunes apprentis grâce à des programmes de mécénat.</p>
    <p>Le ministère de la Culture lance un plan de sauvegarde visant à financer la modernisation des ateliers et la transmission numérique des gestes métiers. Les artisans sont accompagnés pour documenter leurs pratiques et développer des formations hybrides.</p>
    <h2>Des territoires mobilisés</h2>
    <p>Les régions encouragent la création de résidences d’artisans dans les lycées professionnels. Des partenariats avec les musées permettent d’exposer les œuvres contemporaines issues de ces savoir-faire.</p>
    <p>Cette dynamique contribue à valoriser l’excellence française et à renforcer l’attractivité touristique des territoires engagés.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-culture-patrimoine')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-culture-patrimoine')); ?>&text=Patrimoine%20vivant%20:%20ateliers%20et%20savoir-faire%20labellisés%20par%20l’UNESCO" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-culture-patrimoine')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
