import './Footer.css';

const Footer = () => (
  <footer className="footer">
    <p>© {new Date().getFullYear()} Popkorm Club. Вдохновляем события вкусами.</p>
    <div className="footer__links">
      <a href="mailto:hello@popkorm.club">hello@popkorm.club</a>
      <span>+7 (812) 000-12-34</span>
      <a href="https://t.me/popkormclub" target="_blank" rel="noreferrer">
        Telegram
      </a>
    </div>
  </footer>
);

export default Footer;
