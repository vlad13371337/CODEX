<?php
$meta = [
    'title' => 'Solidarités locales : Paris réinvente la cohésion urbaine | Nouvelles Hexagone',
    'description' => "Reportage sur les initiatives citoyennes parisiennes qui renforcent la solidarité et la cohésion urbaine.",
    'keywords' => 'solidarité, cohésion urbaine, initiatives citoyennes',
    'image' => 'https://images.unsplash.com/photo-1529101091764-c3526daf38fe?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url('/blog-article-societe-solidarite'),
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="article-page">
    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/societe')); ?>">Retour à Société</a>
    <h1>Solidarités locales : Paris réinvente la cohésion urbaine</h1>
    <div class="article-meta">Publié le 6 avril 2024 · Par Élodie Raynal · Catégorie : Société · Tags : inclusion, quartier, citoyenneté</div>
    <img src="https://images.unsplash.com/photo-1529101091764-c3526daf38fe?auto=format&fit=crop&w=1200&q=80" alt="Associations solidaires à Paris">
    <p>Dans les quartiers de l’Est parisien, associations, collectivités et habitants coproduisent des solutions concrètes contre l’isolement. Des ateliers de médiation numérique, des cuisines solidaires et des programmes de mentorat intergénérationnels sont déployés avec l’appui de la Ville de Paris.</p>
    <p>Les budgets participatifs ont permis de financer une trentaine de projets orientés vers la lutte contre la précarité alimentaire et l’accès à la culture. Les bénéficiaires sont associés à chaque étape de conception afin de garantir la pertinence des actions.</p>
    <h2>Mesurer l’impact</h2>
    <p>Un laboratoire d’innovation sociale suit les résultats des expérimentations et partage ses indicateurs avec les autres grandes métropoles françaises. Les premières évaluations montrent une baisse de 18 % du taux d’isolement des personnes âgées dans les arrondissements pilotes.</p>
    <p>Cette démarche inspire déjà d’autres communes, qui sollicitent l’expertise parisienne pour mettre en place des espaces de solidarité adaptés aux réalités locales.</p>
    <div class="share-buttons" aria-label="Partager sur les réseaux sociaux">
        <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/blog-article-societe-solidarite')); ?>" target="_blank" rel="noopener">Facebook</a>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(home_url('/blog-article-societe-solidarite')); ?>&text=Solidarités%20locales%20:%20Paris%20réinvente%20la%20cohésion%20urbaine" target="_blank" rel="noopener">Twitter</a>
        <a class="share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(home_url('/blog-article-societe-solidarite')); ?>" target="_blank" rel="noopener">LinkedIn</a>
    </div>
</section>
<?php get_footer(); ?>
