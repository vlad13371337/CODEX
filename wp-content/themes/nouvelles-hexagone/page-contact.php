<?php
/* Template Name: Contact */
$meta = [
    'title' => 'Contact | Nouvelles Hexagone',
    'description' => "Contactez l’agence de presse Nouvelles Hexagone pour vos demandes éditoriales et partenariats.",
    'keywords' => 'contact agence presse, Nouvelles Hexagone, Paris',
    'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80',
];
set_query_var('meta_data', $meta);
get_header();
?>
<section class="category-hero" style="background-image:url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1400&q=80');">
    <div class="hero-inner">
        <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a> · Contact</div>
        <h1>Contactez-nous</h1>
        <p>Notre rédaction et notre équipe partenariats vous répondent depuis Paris.</p>
    </div>
</section>
<section class="section">
    <div class="contact-grid">
        <div class="contact-form">
            <h2>Écrivez-nous</h2>
            <form action="https://formsubmit.co/contact@nouvelleshexagone.fr" method="POST">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button class="btn btn-primary" type="submit">Envoyer</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Nos coordonnées</h2>
            <p><strong>Email :</strong> <a href="mailto:contact@nouvelleshexagone.fr">contact@nouvelleshexagone.fr</a></p>
            <p><strong>Téléphone :</strong> <a href="tel:+33142681234">+33 1 42 68 12 34</a></p>
            <p><strong>Adresse :</strong> 27 Rue de Rivoli, 75004 Paris, France</p>
            <h3>Suivez-nous</h3>
            <p><a href="https://www.facebook.com/nouvelleshexagone" target="_blank" rel="noopener">Facebook</a> · <a href="https://twitter.com/nouvelleshexagone" target="_blank" rel="noopener">Twitter</a> · <a href="https://www.linkedin.com/company/nouvelleshexagone" target="_blank" rel="noopener">LinkedIn</a></p>
        </div>
    </div>
</section>
<section class="section" style="padding-top:0;">
    <div style="max-width:var(--container-width);margin:0 auto;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.844168317102!2d2.335111976591187!3d48.85552550084248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671f04f12ab35%3A0xc7c16a3d8cfe1a85!2s27%20Rue%20de%20Rivoli%2C%2075004%20Paris%2C%20France!5e0!3m2!1sfr!2sfr!4v1712841600000!5m2!1sfr!2sfr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php get_footer(); ?>
