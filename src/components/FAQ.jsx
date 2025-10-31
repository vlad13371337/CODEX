import './FAQ.css';

const FAQ = ({ items }) => (
  <section id="faq" className="faq">
    <div className="faq__intro">
      <span className="faq__tag">Частые вопросы</span>
      <h2>Ответы, которые помогут подготовить событие без стресса</h2>
      <p>
        Если у вас остались вопросы по доставке, составу или брендированию упаковки, напишите нам — менеджер ответит в
        течение рабочего дня.
      </p>
    </div>
    <div className="faq__list">
      {items.map((item) => (
        <details key={item.question} className="faq__item">
          <summary>{item.question}</summary>
          <p>{item.answer}</p>
        </details>
      ))}
    </div>
  </section>
);

export default FAQ;
