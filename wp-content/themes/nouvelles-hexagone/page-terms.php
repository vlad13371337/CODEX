<?php
/* Template Name: Conditions d’utilisation */
$meta = [
    'title' => 'Conditions d’utilisation | Nouvelles Hexagone',
    'description' => "Lisez les conditions générales d’utilisation du site et des contenus Nouvelles Hexagone.",
    'keywords' => 'conditions d’utilisation, mentions légales, droits',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Conditions d’utilisation</div>
        <h1>Conditions d’utilisation</h1>
        <p>Encadrer l’utilisation de nos services d’information et garantir la fiabilité de nos sources.</p>
    </div>
</section>
<section class="article-page">
    <h2>1. Objet</h2>
    <p>Les présentes conditions fixent les modalités d’accès et d’utilisation du site Nouvelles Hexagone. En accédant au site, l’utilisateur accepte sans réserve ces conditions.</p>

    <h2>2. Services</h2>
    <p>Le site fournit des contenus éditoriaux, des analyses, des newsletters et des ressources documentaires destinées aux professionnels et au grand public. Les contenus sont fournis à titre informatif et ne sauraient constituer un conseil juridique ou financier.</p>

    <h2>3. Propriété intellectuelle</h2>
    <p>L’ensemble des contenus (textes, visuels, logos) est la propriété exclusive de Nouvelles Hexagone ou fait l’objet d’une licence. Toute reproduction ou diffusion nécessite une autorisation écrite préalable.</p>

    <h2>4. Responsabilité</h2>
    <p>Nouvelles Hexagone met tout en œuvre pour garantir la fiabilité de ses informations mais ne peut être tenue responsable des décisions prises sur la base de celles-ci. Les sources externes sont citées lorsque cela est nécessaire.</p>

    <h2>5. Liens externes</h2>
    <p>Le site peut contenir des liens vers d’autres sites. Nouvelles Hexagone ne saurait être responsable de la disponibilité et du contenu de ces sites tiers.</p>

    <h2>6. Données personnelles</h2>
    <p>Le traitement des données personnelles est décrit dans notre politique de confidentialité. L’utilisateur peut exercer ses droits en écrivant à <a href="mailto:privacy@nouvelleshexagone.fr">privacy@nouvelleshexagone.fr</a>.</p>

    <h2>7. Droit applicable</h2>
    <p>Les présentes conditions sont régies par le droit français. En cas de litige, les tribunaux compétents de Paris seront seuls compétents.</p>
</section>
<?php get_footer(); ?>
