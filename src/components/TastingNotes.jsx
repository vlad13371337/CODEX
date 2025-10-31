import './TastingNotes.css';

const TastingNotes = ({ notes }) => (
  <section id="tasting" className="tasting">
    <div className="tasting__intro">
      <span className="tasting__tag">Отзывы гастрономов</span>
      <h2>Что говорят организаторы событий о Popkorm Club</h2>
      <p>
        Наши вкусы уже украшают городские фестивали, камерные свадьбы и pop-up вечеринки. Мы тестируем рецепты вместе с
        шеф-поварами и доставляем попкорм в термосумках по всей стране.
      </p>
    </div>
    <div className="tasting__grid">
      {notes.map((note) => (
        <figure key={note.author} className="tasting__card">
          <blockquote>“{note.quote}”</blockquote>
          <figcaption>{note.author}</figcaption>
        </figure>
      ))}
    </div>
  </section>
);

export default TastingNotes;
