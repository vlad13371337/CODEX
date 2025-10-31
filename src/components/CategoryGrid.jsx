import './CategoryGrid.css';

const CategoryGrid = ({ categories }) => (
  <section id="collections" className="categories">
    <div className="categories__intro">
      <span className="categories__tag">Коллекции вкусов</span>
      <h2>Четыре линии попкорма, созданные для разных сценариев</h2>
      <p>
        Выберите вкус под настроение вашего события: семейная встреча, галла-ужин, фестиваль или эко-вечеринка. Каждая
        коллекция разработана гастрономами Popkorm Club.
      </p>
    </div>
    <div className="categories__grid">
      {categories.map((category) => (
        <article key={category.id} className="category-card" style={{ '--accent': category.color }}>
          <div className="category-card__badge">{category.title}</div>
          <p className="category-card__description">{category.description}</p>
          <ul className="category-card__flavors">
            {category.flavorProfile.map((flavor) => (
              <li key={flavor}>{flavor}</li>
            ))}
          </ul>
          <button type="button" className="category-card__cta">
            Запросить сет дегустации
          </button>
        </article>
      ))}
    </div>
  </section>
);

export default CategoryGrid;
