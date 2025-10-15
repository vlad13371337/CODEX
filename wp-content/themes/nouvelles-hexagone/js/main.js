(function(){
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('header nav ul');

    if(menuToggle && navList){
        menuToggle.addEventListener('click', () => {
            navList.classList.toggle('open');
        });
    }

    const cookieBanner = document.querySelector('.cookie-banner');
    const cookieButton = document.querySelector('.cookie-banner button');

    if(cookieBanner){
        const hasConsent = localStorage.getItem('nh_cookie_consent');
        if(!hasConsent){
            cookieBanner.style.display = 'block';
        }

        if(cookieButton){
            cookieButton.addEventListener('click', () => {
                localStorage.setItem('nh_cookie_consent', 'true');
                cookieBanner.style.display = 'none';
            });
        }
    }
})();
