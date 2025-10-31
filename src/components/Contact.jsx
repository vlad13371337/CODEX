import './Contact.css';

const Contact = () => (
  <section id="contact" className="contact">
    <div className="contact__content">
      <h2>Запланируем дегустацию Popkorm Club</h2>
      <p>
        Расскажите, какое событие вы готовите, и мы предложим вкусы, упаковку и тайминг доставки. Менеджер свяжется с вами
        в течение 24 часов.
      </p>
      <form className="contact__form">
        <label>
          Ваше имя
          <input type="text" name="name" placeholder="Анна" required />
        </label>
        <label>
          Email или телефон
          <input type="text" name="contact" placeholder="anna@example.com" required />
        </label>
        <label>
          Формат события
          <select name="eventType" defaultValue="corporate">
            <option value="corporate">Корпоратив или конференция</option>
            <option value="wedding">Свадьба</option>
            <option value="festival">Фестиваль / ярмарка</option>
            <option value="private">Частная вечеринка</option>
          </select>
        </label>
        <label>
          Комментарий
          <textarea name="comment" rows="4" placeholder="Расскажите о количестве гостей, дате и пожеланиях."></textarea>
        </label>
        <button type="submit">Отправить заявку</button>
      </form>
    </div>
    <aside className="contact__aside">
      <div className="contact__badge">Мы работаем по всей России</div>
      <ul>
        <li><strong>Производство:</strong> Санкт-Петербург, креативное пространство «Кукуруза»</li>
        <li><strong>Время ответа:</strong> до 24 часов</li>
        <li><strong>Минимальный заказ:</strong> 30 наборов по 150 г</li>
        <li><strong>Брендинг:</strong> упаковка, бирки, открытки, подарочные коробки</li>
      </ul>
    </aside>
  </section>
);

export default Contact;
