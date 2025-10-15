<footer>
    <div class="footer-inner">
        <div>
            <h4>Nouvelles Hexagone</h4>
            <p>L’agence d’information française qui décrypte l’actualité avec exigence éditoriale et regard européen.</p>
            <div class="social-links" aria-label="Réseaux sociaux">
                <a href="https://www.facebook.com/nouvelleshexagone" target="_blank" rel="noopener">Fb</a>
                <a href="https://twitter.com/nouvelleshexagone" target="_blank" rel="noopener">Tw</a>
                <a href="https://www.linkedin.com/company/nouvelleshexagone" target="_blank" rel="noopener">In</a>
            </div>
        </div>
        <div class="footer-links">
            <h4>Navigation</h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/privacy')); ?>">Confidentialité</a></li>
                <li><a href="<?php echo esc_url(home_url('/terms')); ?>">Conditions d’utilisation</a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h4>Contact</h4>
            <p>Adresse : 27 Rue de Rivoli, 75004 Paris, France</p>
            <p>Téléphone : <a href="tel:+33142681234">+33 1 42 68 12 34</a></p>
            <p>Email : <a href="mailto:contact@nouvelleshexagone.fr">contact@nouvelleshexagone.fr</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Toutes les informations sont présentées uniquement à titre informatif.</p>
        <p>© Nouvelles Hexagone <?php echo date('Y'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
