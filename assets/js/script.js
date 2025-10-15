const mobileToggle = document.querySelector('.mobile-toggle');
const navLinks = document.querySelector('.nav-links');
const cookieBanner = document.querySelector('.cookie-banner');
const cookieButton = document.querySelector('.accept-cookies');

if (mobileToggle && navLinks) {
  mobileToggle.addEventListener('click', () => {
    navLinks.classList.toggle('open');
  });
}

if (cookieBanner && cookieButton) {
  const cookiesAccepted = localStorage.getItem('cookiesAccepted');
  if (!cookiesAccepted) {
    cookieBanner.style.display = 'block';
  }

  cookieButton.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    cookieBanner.style.display = 'none';
  });
}
