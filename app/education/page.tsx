import { EducationClient } from "../_components/EducationClient";

export const metadata = {
  title: "Éducation",
};

export default function EducationPage() {
  return (
    <>
      <link rel="stylesheet" href="/assets/style.css" />
      <link rel="stylesheet" href="/assets/styles.css" />

      <div
        dangerouslySetInnerHTML={{
          __html: `
<header>
  <div class="logo">● Kayeye <small>Godefroid</small></div>

  <div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <nav>
    <ul>
      <li><a href="/">Accueil</a></li>
      <li><a href="/cv">Cv</a></li>
      <li><a href="/#projects">Projets</a></li>
      <li><a href="/#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="education-section">
  <div class="container">
    <h2 class="section-title">Éducation</h2>
    <p class="section-subtitle">Mon parcours académique et mes formations professionnelles.</p>

    <div class="timeline">
      <div class="timeline-item bac3">
        <div class="timeline-date">2022 - 2023</div>
        <div class="timeline-content diplome">
          <div class="icon"><i class="fas fa-graduation-cap"></i></div>
          <div>
            <h3>Bac + 3 en Sciences</h3>
            <p class="highlight">Mathématiques et Informatique</p>
            <p>Université Pédagogique nationale</p>
          </div>
          <span class="badge blue">Diplôme</span>
        </div>
      </div>

      <div class="timeline-item bac3">
        <div class="timeline-date">2023</div>
        <div class="timeline-content diplome">
          <div class="icon"><i class="fas fa-graduation-cap"></i></div>
          <div>
            <h3>Développement Web</h3>
            <p class="highlight">Gérez du code avec Git et GitHub</p>
            <p>OpenClassrooms</p>
          </div>
          <span class="badge blue">Formation</span>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-date">2021</div>
        <div class="timeline-content formation">
          <div class="icon"><i class="fas fa-code"></i></div>
          <div>
            <h3>Développement Web</h3>
            <p class="highlight">Concevez votre site web avec PHP et MySQL</p>
            <p>OpenClassrooms</p>
          </div>
          <span class="badge green">Formation</span>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-date">2023</div>
        <div class="timeline-content formation">
          <div class="icon"><i class="fas fa-briefcase"></i></div>
          <div>
            <h3>Construisez un site web à l'aide du framework Symfony 7</h3>
            <p class="highlight">OpenClassrooms</p>
          </div>
          <span class="badge purple">Formation</span>
        </div>
      </div>

      <div class="timeline-item align-right">
        <div class="timeline-date">15 mars 2025</div>
        <div class="timeline-content formation">
          <div class="icon"><i class="fas fa-laptop-code"></i></div>
          <div>
            <h3>React JS pour Tous - L'Ultime Formation 2024</h3>
            <p>Formateur : DONKEYGEEK Tahar | Durée : 49.5 heures</p>
            <p>Udemy</p>
          </div>
          <span class="badge green">Formation</span>
        </div>
      </div>

      <div class="timeline-item align-right">
        <div class="timeline-date">17 mars 2025</div>
        <div class="timeline-content formation">
          <div class="icon"><i class="fas fa-chart-line"></i></div>
          <div>
            <h3>Foundations: Data, Data, Everywhere</h3>
            <p class="highlight">Google | Coursera</p>
            <p>Certificat signé par Amanda Brophy, Google Career Certificates</p>
          </div>
          <span class="badge green">Formation</span>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-date">2024</div>
        <div class="timeline-content formation">
          <div class="icon"><i class="fas fa-code"></i></div>
          <div>
            <h3>Développement Web</h3>
            <p class="highlight">Créez une maquette web avec Figma</p>
            <p>OpenClassrooms</p>
          </div>
          <span class="badge green">Formation</span>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="contact-info">
    <p><strong>Téléphone :</strong> +243 835 370 927</p>
    <p><strong>E-mail :</strong> <a href="mailto:godetkayeye07@gmail.com">godetkayeye07@gmail.com</a></p>
  </div>
  <div class="social-media">
    <p><strong>Suivez-moi :</strong></p>
    <a href="https://linkedin.com/in/godefroid-kayeye"><img src="/img/linkedin.svg" alt="LinkedIn"></a>
    <a href="https://x.com/Godefroidkayeye"><img src="/img/twitter.svg" alt="Twitter"></a>
  </div>
  <div class="legal">
    <p>© 2025 Kayeye Godefroid - Tous droits réservés</p>
  </div>
</footer>
`,
        }}
      />

      <EducationClient />
    </>
  );
}

