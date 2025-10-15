<?php
$default_meta = [
    'title' => 'Nouvelles Hexagone – L’actualité française en perspective',
    'description' => "Agence de presse française à Paris, Nouvelles Hexagone offre une couverture approfondie de la politique, de l’économie, de la société, des technologies, du sport et de la culture.",
    'keywords' => 'actualités françaises, politique, économie, société, technologies, sport, culture',
    'image' => 'https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?auto=format&fit=crop&w=1200&q=80',
    'url' => home_url(add_query_arg([], $wp->request ?? '')),
];
$meta = wp_parse_args(get_query_var('meta_data', []), $default_meta);
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr($meta['description']); ?>">
    <meta name="keywords" content="<?php echo esc_attr($meta['keywords']); ?>">
    <meta property="og:title" content="<?php echo esc_attr($meta['title']); ?>">
    <meta property="og:description" content="<?php echo esc_attr($meta['description']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url($meta['url']); ?>">
    <meta property="og:image" content="<?php echo esc_url($meta['image']); ?>">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($meta['title']); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($meta['description']); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($meta['image']); ?>">
    <?php wp_head(); ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NewsMediaOrganization",
        "name": "Nouvelles Hexagone",
        "url": "<?php echo esc_url(home_url('/')); ?>",
        "logo": "https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?auto=format&fit=crop&w=400&q=80",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "27 Rue de Rivoli",
            "addressLocality": "Paris",
            "postalCode": "75004",
            "addressCountry": "FR"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Service clients",
            "email": "contact@nouvelleshexagone.fr",
            "telephone": "+33 1 42 68 12 34"
        }
    }
    </script>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-inner">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="https://images.unsplash.com/photo-1542044801-2870916868c5?auto=format&fit=crop&w=200&q=80" alt="Logo Nouvelles Hexagone">
            <span>Nouvelles Hexagone</span>
        </a>
        <button class="menu-toggle" aria-label="Ouvrir le menu">☰</button>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
                <li><a href="<?php echo esc_url(home_url('/politique')); ?>">Politique</a></li>
                <li><a href="<?php echo esc_url(home_url('/economie')); ?>">Économie</a></li>
                <li><a href="<?php echo esc_url(home_url('/technologies')); ?>">Technologies</a></li>
                <li><a href="<?php echo esc_url(home_url('/societe')); ?>">Société</a></li>
                <li><a href="<?php echo esc_url(home_url('/immigration')); ?>">Immigration</a></li>
                <li><a href="<?php echo esc_url(home_url('/sport')); ?>">Sport</a></li>
                <li><a href="<?php echo esc_url(home_url('/culture')); ?>">Culture</a></li>
                <li><a href="<?php echo esc_url(home_url('/monde')); ?>">Monde</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="cookie-banner" role="dialog" aria-live="polite">
    <p>Nous utilisons des cookies pour optimiser notre site et votre expérience. En continuant, vous acceptez notre politique de confidentialité.</p>
    <button type="button">Accepter les cookies</button>
</div>
