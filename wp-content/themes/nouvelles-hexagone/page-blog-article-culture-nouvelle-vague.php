<?php
$meta = [
    'title' => 'Nouvelle vague : les créateurs qui réinventent la scène parisienne | Nouvelles Hexagone',
    'description' => "Portrait des artistes parisiens qui exportent leur vision et renouvellent la scène culturelle.",
    'keywords' => 'culture parisienne, nouvelle vague, artistes français',
    'image' => 'https://images.unsplash.com/photo-1529429617124-aee1f6e0c9ea?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-culture-nouvelle-vague'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/culture')); ?>">Retour à Culture</a>
    <h1>Nouvelle vague : les créateurs qui réinventent la scène parisienne</h1>
    <div class="article-meta">Publié le 1 avril 2024 · Par Maëlle Courtois · Catégorie : Culture · Tags : création, design, arts</div>
    <img src="https://images.unsplash.com/photo-1529429617124-aee1f6e0c9ea?auto=format&fit=crop&w=1200&q=80" alt="Artistes parisiens">
    <p>De nouveaux collectifs artistiques émergent dans les quartiers nord de Paris. Ils combinent arts visuels, design sonore et scénographie immersive pour raconter la ville autrement. Leurs expositions itinérantes attirent un public jeune et international.</p>
    <p>Les institutions culturelles parisiennes accompagnent ce mouvement via des résidences et des espaces de création partagés. Les créateurs s’appuient sur des financements participatifs et sur des partenariats avec des scènes européennes.</p>
    <h2>Un rayonnement européen</h2>
    <p>Berlin, Lisbonne et Bruxelles accueillent ces artistes dans leurs festivals. Les échanges favorisent la circulation des œuvres et la co-création. Les thématiques explorées – transition écologique, inclusion, mémoire urbaine – rencontrent un écho fort.</p>
    <p>Les critiques saluent la fraîcheur de cette nouvelle vague, qui bouscule les codes des institutions traditionnelles tout en dialoguant avec le patrimoine parisien.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-culture-nouvelle-vague')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-culture-nouvelle-vague')); ?>&text=Nouvelle%20vague%20:%20les%20créateurs%20qui%20réinventent%20la%20scène%20parisienne" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-culture-nouvelle-vague')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
