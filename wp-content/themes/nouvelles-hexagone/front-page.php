<?php
$meta = [
    'title' => 'Accueil | Nouvelles Hexagone',
    'description' => "Bienvenue chez Nouvelles Hexagone, l’agence de presse parisienne qui explore la politique, l’économie, la société, les technologies, le sport, la culture et le monde.",
    'keywords' => 'actualité française, agence de presse, analyses politiques, économie française',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="hero">
    <div class="hero-inner">
        <div class="hero-content">
            <h1>Nouvelles Hexagone</h1>
            <p>La perspective française sur l’actualité mondiale – « Des faits, du sens, des voix ».</p>
            <div class="btn-group">
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/politique')); ?>">En savoir plus</a>
                <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact')); ?>">Nous contacter</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=80" alt="Salle de rédaction moderne">
        </div>
    </div>
</section>
<section class="section">
    <div class="section-title">
        <h2>Dernières analyses par catégorie</h2>
        <p>Nos journalistes et analystes délivrent des éclairages exclusifs pour les décideurs publics, les entreprises et les citoyens informés.</p>
    </div>
    <div class="grid grid-articles">
        <?php
        $previews = [
            [
                'category' => 'Politique',
                'link' => home_url('/blog-article-politique-reforme'),
                'category_link' => home_url('/politique'),
                'title' => 'Réforme institutionnelle : le Sénat au cœur du compromis',
                'image' => 'https://images.unsplash.com/photo-1505849864904-01df97fe81bc?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Analyse exclusive sur les arbitrages qui redessinent l’équilibre des pouvoirs entre exécutif et territoires.',
                'date' => '12 avril 2024',
            ],
            [
                'category' => 'Économie',
                'link' => home_url('/blog-article-economie-transition'),
                'category_link' => home_url('/economie'),
                'title' => 'Transition énergétique : Paris mise sur l’industrie verte',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Décryptage des investissements et partenariats publics-privés qui accélèrent la compétitivité durable.',
                'date' => '10 avril 2024',
            ],
            [
                'category' => 'Technologies',
                'link' => home_url('/blog-article-technologies-quantique'),
                'category_link' => home_url('/technologies'),
                'title' => 'Quantique : la France consolide son leadership européen',
                'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Entretien avec les chercheurs du plateau de Saclay qui préparent la prochaine rupture industrielle.',
                'date' => '8 avril 2024',
            ],
            [
                'category' => 'Société',
                'link' => home_url('/blog-article-societe-solidarite'),
                'category_link' => home_url('/societe'),
                'title' => 'Solidarités locales : Paris réinvente la cohésion urbaine',
                'image' => 'https://images.unsplash.com/photo-1529101091764-c3526daf38fe?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Cartographie des initiatives citoyennes qui transforment la capitale en laboratoire social.',
                'date' => '6 avril 2024',
            ],
            [
                'category' => 'Immigration',
                'link' => home_url('/blog-article-immigration-integration'),
                'category_link' => home_url('/immigration'),
                'title' => 'Intégration : les nouvelles passerelles franco-européennes',
                'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Reportage sur les dispositifs d’accompagnement des talents internationaux en Île-de-France.',
                'date' => '4 avril 2024',
            ],
            [
                'category' => 'Sport',
                'link' => home_url('/blog-article-sport-olympique'),
                'category_link' => home_url('/sport'),
                'title' => 'Paris 2024 : l’héritage olympique se dessine',
                'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Focus sur les infrastructures et la mobilisation citoyenne à 100 jours de l’ouverture des Jeux.',
                'date' => '3 avril 2024',
            ],
            [
                'category' => 'Culture',
                'link' => home_url('/blog-article-culture-nouvelle-vague'),
                'category_link' => home_url('/culture'),
                'title' => 'Nouvelle vague : les créateurs qui réinventent la scène parisienne',
                'image' => 'https://images.unsplash.com/photo-1529429617124-aee1f6e0c9ea?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Rencontre avec les artistes qui exportent leur vision dans les capitales européennes.',
                'date' => '1 avril 2024',
            ],
            [
                'category' => 'Monde',
                'link' => home_url('/blog-article-monde-europe-unie'),
                'category_link' => home_url('/monde'),
                'title' => 'Union européenne : une feuille de route énergétique commune',
                'image' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Analyse des négociations menées à Bruxelles pour sécuriser l’approvisionnement continental.',
                'date' => '30 mars 2024',
            ],
        ];

        foreach ($previews as $preview) : ?>
            <article class="article-card">
                <a href="<?php echo esc_url($preview['link']); ?>">
                    <img src="<?php echo esc_url($preview['image']); ?>" alt="Illustration pour <?php echo esc_attr($preview['category']); ?>">
                </a>
                <div class="article-content">
                    <div class="article-meta"><?php echo esc_html($preview['category']); ?> · <?php echo esc_html($preview['date']); ?></div>
                    <h3><a href="<?php echo esc_url($preview['link']); ?>"><?php echo esc_html($preview['title']); ?></a></h3>
                    <p><?php echo esc_html($preview['excerpt']); ?></p>
                    <a class="btn-link" href="<?php echo esc_url($preview['category_link']); ?>">Explorer <?php echo esc_html($preview['category']); ?></a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<section class="section" id="a-propos">
    <div class="section-title">
        <h2>À propos de nous</h2>
        <p>Nouvelles Hexagone accompagne les décideurs publics et privés, les institutions européennes et les citoyens engagés avec des informations vérifiées, un ton exigeant et une narration inspirée par l’excellence française.</p>
    </div>
    <div class="grid" style="max-width:900px;margin:0 auto;">
        <p>Depuis notre rédaction située au cœur de Paris, nous mettons l’accent sur les dossiers de fond : transitions politiques, recompositions économiques, innovations sociétales et dynamiques culturelles. Notre équipe composée de correspondants en régions, d’analystes européens et de data journalists éclaire les enjeux qui transforment la France et son environnement international.</p>
    </div>
</section>
<section class="section" style="background:#f5f7fb;">
    <div class="section-title">
        <h2>Nos chiffres clés</h2>
        <p>Une agence engagée auprès d’un public professionnel, institutionnel et citoyen qui cherche de la profondeur et du sens.</p>
    </div>
    <div class="stats-grid">
        <div class="stat">
            <strong>1250+</strong>
            <span>Analyses publiées chaque année</span>
        </div>
        <div class="stat">
            <strong>450K</strong>
            <span>Lecteurs mensuels en France et en Europe</span>
        </div>
        <div class="stat">
            <strong>85</strong>
            <span>Correspondants et experts associés</span>
        </div>
        <div class="stat">
            <strong>120</strong>
            <span>Partenariats médias et think tanks</span>
        </div>
    </div>
</section>
<section class="section">
    <div class="cta">
        <h3>Rejoignez-nous</h3>
        <p>Inscrivez-vous à notre lettre d’information pour recevoir chaque matin l’essentiel de l’actualité stratégique française et européenne.</p>
        <a class="btn btn-primary" href="mailto:contact@nouvelleshexagone.fr">Devenir partenaire</a>
    </div>
</section>
<?php
get_footer();
