<?php
/* Template Name: FAQ */
$meta = [
    'title' => 'FAQ | Nouvelles Hexagone',
    'description' => "Questions fréquentes sur l’agence de presse Nouvelles Hexagone et ses services.",
    'keywords' => 'FAQ, questions fréquentes, Nouvelles Hexagone',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1515169067865-5387ec356754?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · FAQ</div>
        <h1>Foire aux questions</h1>
        <p>Retrouvez les réponses aux questions les plus fréquentes sur notre ligne éditoriale, nos services et nos modalités de contact.</p>
    </div>
</section>
<section class="section">
    <div class="faq">
        <?php
        $faqs = [
            [
                'question' => 'Quelle est la mission de Nouvelles Hexagone ?',
                'answer' => 'Informer les décideurs et les citoyens sur les transformations politiques, économiques et sociétales françaises avec une perspective européenne et indépendante.'
            ],
            [
                'question' => 'Comment recevoir vos newsletters analytiques ?',
                'answer' => 'Il suffit d’adresser un email à contact@nouvelleshexagone.fr avec votre nom, votre organisation et les thématiques souhaitées. Notre équipe vous inscrira à la lettre ciblée.'
            ],
            [
                'question' => 'Proposez-vous des interventions de vos journalistes ?',
                'answer' => 'Oui, nos journalistes et analystes peuvent intervenir lors de conférences, tables rondes ou formations sur demande. Contactez-nous via le formulaire de contact.'
            ],
            [
                'question' => 'Comment sont vérifiées vos informations ?',
                'answer' => 'Nos contenus reposent sur une double validation éditoriale, le croisement des sources et la collaboration avec un réseau d’experts indépendants.'
            ],
            [
                'question' => 'Puis-je proposer un partenariat éditorial ?',
                'answer' => 'Nous étudions toute proposition de partenariat avec des médias, think tanks, institutions ou entreprises partageant nos valeurs. Écrivez à partenariats@nouvelleshexagone.fr.'
            ],
            [
                'question' => 'Comment exercer mes droits sur mes données personnelles ?',
                'answer' => 'Adressez votre demande à privacy@nouvelleshexagone.fr en précisant l’objet de votre requête. Nous y répondrons dans un délai maximum de 30 jours.'
            ],
            [
                'question' => 'Où se situe votre rédaction ?',
                'answer' => 'Notre rédaction est située au 27 Rue de Rivoli, 75004 Paris, à proximité de l’Hôtel de Ville.'
            ],
        ];
        foreach ($faqs as $faq) : ?>
            <div class="faq-item">
                <h3><?php echo esc_html($faq['question']); ?></h3>
                <p><?php echo esc_html($faq['answer']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>
