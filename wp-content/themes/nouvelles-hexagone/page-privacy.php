<?php
/* Template Name: Politique de confidentialité */
$meta = [
    'title' => 'Politique de confidentialité | Nouvelles Hexagone',
    'description' => "Découvrez la politique de confidentialité et la gestion des données personnelles de Nouvelles Hexagone.",
    'keywords' => 'politique de confidentialité, données personnelles, cookies',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Confidentialité</div>
        <h1>Politique de confidentialité</h1>
        <p>La transparence sur l’utilisation de vos données est au cœur de nos engagements éditoriaux.</p>
    </div>
</section>
<section class="article-page">
    <h2>1. Responsable de traitement</h2>
    <p>Nouvelles Hexagone, société de presse indépendante basée au 27 Rue de Rivoli, 75004 Paris, France, est responsable du traitement des données collectées via ce site.</p>

    <h2>2. Données collectées</h2>
    <p>Nous collectons des données d’identification (nom, prénom, email) via les formulaires de contact ainsi que des données de navigation (cookies analytiques) pour assurer le bon fonctionnement du site et améliorer nos contenus.</p>

    <h2>3. Finalités</h2>
    <p>Les données sont utilisées pour répondre à vos demandes d’information, gérer les relations partenariales, envoyer des newsletters sur la base de votre consentement et réaliser des statistiques d’audience.</p>

    <h2>4. Cookies</h2>
    <p>Des cookies essentiels et analytiques sont déposés sur votre terminal. Vous pouvez à tout moment configurer votre navigateur pour bloquer les cookies. Le bandeau de consentement vous permet d’accepter ou de refuser les cookies non essentiels.</p>

    <h2>5. Conservation</h2>
    <p>Vos données sont conservées pendant une durée maximale de trois ans à compter du dernier contact ou de l’exercice d’un droit.</p>

    <h2>6. Droits des personnes</h2>
    <p>Conformément au RGPD et à la loi Informatique et Libertés, vous disposez d’un droit d’accès, de rectification, d’opposition, de limitation et d’effacement de vos données. Vous pouvez exercer ces droits à l’adresse suivante : <a href="mailto:privacy@nouvelleshexagone.fr">privacy@nouvelleshexagone.fr</a>.</p>

    <h2>7. Contact</h2>
    <p>Pour toute question relative à la protection des données, contactez notre déléguée à la protection des données à l’adresse : DPO – Nouvelles Hexagone, 27 Rue de Rivoli, 75004 Paris.</p>
</section>
<?php get_footer(); ?>
