import Header from './components/Header.jsx';
import Hero from './components/Hero.jsx';
import CategoryGrid from './components/CategoryGrid.jsx';
import TastingNotes from './components/TastingNotes.jsx';
import FAQ from './components/FAQ.jsx';
import Contact from './components/Contact.jsx';
import Footer from './components/Footer.jsx';
import { categories, tastingNotes, faq } from './data/categories.js';

const App = () => (
  <>
    <Header />
    <main>
      <Hero />
      <CategoryGrid categories={categories} />
      <TastingNotes notes={tastingNotes} />
      <FAQ items={faq} />
      <Contact />
    </main>
    <Footer />
  </>
);

export default App;
