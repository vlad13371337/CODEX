import './Hero.css';

const Hero = () => (
  <section className="hero">
    <div className="hero__text">
      <span className="hero__tag">Авторский попкорм для событий</span>
      <h1>Создаём коллекции вкусов, которые станут центром вашего праздника</h1>
      <p>
        Popkorm Club исследует гастрономические тренды и превращает их в воздушные зерна кукурузы. Мы вручную глазируем
        каждый вкус, сочетаем натуральные ингредиенты и оформляем упаковку так, чтобы гости запомнили ваш бренд.
      </p>
      <div className="hero__actions">
        <a className="hero__btn hero__btn--primary" href="#collections">
          Посмотреть коллекции
        </a>
        <a className="hero__btn hero__btn--ghost" href="#contact">
          Получить прайс
        </a>
      </div>
    </div>
    <div className="hero__visual" aria-hidden="true">
      <div className="hero__bubble hero__bubble--one"></div>
      <div className="hero__bubble hero__bubble--two"></div>
      <div className="hero__bubble hero__bubble--three"></div>
      <div className="hero__plate">
        <div className="hero__kernels"></div>
        <div className="hero__kernels hero__kernels--shadow"></div>
      </div>
    </div>
  </section>
);

export default Hero;
