import './Header.css';

const Header = () => (
  <header className="header">
    <div className="header__logo">Popkorm Club</div>
    <nav className="header__nav">
      <a href="#collections">Коллекции</a>
      <a href="#tasting">Отзывы</a>
      <a href="#faq">FAQ</a>
      <a href="#contact">Контакты</a>
    </nav>
    <a className="header__cta" href="#contact">
      Забронировать дегустацию
    </a>
  </header>
);

export default Header;
