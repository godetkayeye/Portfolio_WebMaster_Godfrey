import { CvClient } from "../_components/CvClient";

export const metadata = {
  title: "CV - Kayeye Mukwa Godefroid | Développeur Fullstack",
};

export default function CvPage() {
  return (
    <>
      <link rel="stylesheet" href="/assets/style_cv.css" />
      <link rel="stylesheet" href="/assets/origin.css" />

      <div
        dangerouslySetInnerHTML={{
          __html: `
<!-- Bouton Retour -->
<div class="max-w-4xl mx-auto px-4 pt-6">
  <a href="/" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold mb-6 transition-colors">
    <i class="fas fa-arrow-left mr-2"></i> Retour à la page d'accueil
  </a>
</div>

<div class="max-w-4xl mx-auto my-8 px-4">
  <!-- Header -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
    <div class="md:flex">
      <div class="md:w-1/3 p-6 flex justify-center items-center bg-blue-50">
        <img src="/img/photo.jpeg" alt="Photo de profil" class="w-48 h-48 rounded-full object-cover border-4 border-blue-500 shadow-md">
      </div>
      <div class="md:w-2/3 p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">KAYEYE MUKWA Godefroid</h1>
        <h2 class="text-xl text-blue-600 font-semibold mb-4">Développeur Fullstack</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div class="flex items-center">
            <i class="fas fa-envelope text-blue-500 mr-2"></i>
            <a href="mailto:godetkayeye07@gmail.com" class="hover:text-blue-600">godetkayeye07@gmail.com</a>
          </div>
          <div class="flex items-center">
            <i class="fas fa-phone text-blue-500 mr-2"></i>
            <span>+243 835 370 927</span>
          </div>
          <div class="flex items-center">
            <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
            <span>Kinshasa, RDC</span>
          </div>
          <div class="flex items-center">
            <i class="fas fa-user text-blue-500 mr-2"></i>
            <span>Célibataire</span>
          </div>
        </div>

        <div class="flex space-x-4">
          <a href="https://linkedin.com/in/godefroid-kayeye" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full flex items-center">
            <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
          </a>
          <a href="https://x.com/Godefroidkayeye" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-full flex items-center">
            <i class="fab fa-twitter mr-2"></i> Twitter
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Left Column -->
    <div class="md:col-span-1 space-y-8">
      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">À propos</h2>
        <p class="text-gray-600">Développeur fullstack passionné, spécialisé en web et mobile. Fort de 9 ans d'expérience en PHP et expertise en Trust & Safety, je crée des applications performantes et intuitives avec les dernières technologies (Symfony, NestJS, React, Next.js, React Native).</p>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Compétences Techniques</h2>
        <div class="mb-4">
          <h3 class="font-semibold mb-2">Langages</h3>
          <div class="space-y-2">
            <div>
              <div class="flex justify-between mb-1"><span>PHP</span><span>90%</span></div>
              <div class="skill-bar"><div class="skill-progress" style="width: 90%"></div></div>
            </div>
            <div>
              <div class="flex justify-between mb-1"><span>JavaScript</span><span>85%</span></div>
              <div class="skill-bar"><div class="skill-progress" style="width: 85%"></div></div>
            </div>
            <div>
              <div class="flex justify-between mb-1"><span>TypeScript</span><span>80%</span></div>
              <div class="skill-bar"><div class="skill-progress" style="width: 80%"></div></div>
            </div>
            <div>
              <div class="flex justify-between mb-1"><span>HTML/CSS</span><span>90%</span></div>
              <div class="skill-bar"><div class="skill-progress" style="width: 90%"></div></div>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <h3 class="font-semibold mb-2">Frameworks & Librairies</h3>
          <div class="flex flex-wrap gap-2">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Symfony</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">NestJS</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">React</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Next.js</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">React Native</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Bootstrap</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Tailwind CSS</span>
          </div>
        </div>

        <div class="mb-4">
          <h3 class="font-semibold mb-2">Bases de données</h3>
          <div class="flex flex-wrap gap-2">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">MySQL</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">PostgreSQL</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">SQL Server</span>
          </div>
        </div>

        <div>
          <h3 class="font-semibold mb-2">Outils</h3>
          <div class="flex flex-wrap gap-2">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Git/GitHub</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Figma</span>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Docker</span>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2">Langues</h2>
        <div class="space-y-3">
          <div>
            <div class="flex justify-between mb-1"><span>Français</span><span>Très bon</span></div>
            <div class="skill-bar"><div class="skill-progress" style="width: 95%"></div></div>
          </div>
          <div>
            <div class="flex justify-between mb-1"><span>Anglais</span><span>Assez bon</span></div>
            <div class="skill-bar"><div class="skill-progress" style="width: 70%"></div></div>
          </div>
          <div>
            <div class="flex justify-between mb-1"><span>Lingala</span><span>Bon</span></div>
            <div class="skill-bar"><div class="skill-progress" style="width: 80%"></div></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="md:col-span-2 space-y-8">
      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">Expérience Professionnelle</h2>
        <div class="space-y-6">
          <div class="relative pl-10 timeline-item">
            <div class="absolute left-0 top-0 w-4 h-4 rounded-full bg-blue-500 border-4 border-blue-200"></div>
            <div>
              <h3 class="font-bold text-lg">Développeur Fullstack</h3>
              <div class="flex flex-col sm:flex-row sm:items-center text-gray-500 mb-2">
                <span class="flex items-center">
                  <i class="fas fa-briefcase mr-1 text-blue-500"></i>
                  <span class="mr-4">Freelance</span>
                </span>
                <span class="flex items-center">
                  <i class="fas fa-calendar-alt mr-1 text-blue-500"></i>
                  <span>2018 - Présent</span>
                </span>
              </div>
              <ul class="list-disc pl-5 space-y-2 text-gray-600">
                <li>Conception et développement d'une plateforme complète de gestion de courriers avec Symfony, intégrant workflow documentaire et archivage numérique</li>
                <li>Implémentation d'un système innovant de gestion de présence avec technologie RFID, optimisant le suivi temps-présence en temps réel</li>
                <li>Développement d'un module complet de gestion hospitalière intégrant gestion des patients, dossiers médicaux et suivi des hospitalisations</li>
                <li>Création d'interfaces utilisateur performantes et réactives avec React, garantissant une expérience utilisateur fluide et moderne</li>
                <li>Conception et développement du site institutionnel de l'INBTP, plateforme vitrine mettant en valeur les programmes et ressources de formation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">Formation</h2>
        <div class="space-y-6">
          <div class="relative pl-10 timeline-item">
            <div class="absolute left-0 top-0 w-4 h-4 rounded-full bg-blue-500 border-4 border-blue-200"></div>
            <div>
              <h3 class="font-bold text-lg">Licence en Mathématiques et Informatique</h3>
              <div class="flex flex-col sm:flex-row sm:items-center text-gray-500 mb-2">
                <span class="flex items-center"><i class="fas fa-university mr-1 text-blue-500"></i><span class="mr-4">Université Pédagogique Nationale</span></span>
                <span class="flex items-center"><i class="fas fa-calendar-alt mr-1 text-blue-500"></i><span>2019 - 2025</span></span>
              </div>
            </div>
          </div>
          <div class="relative pl-10 timeline-item">
            <div class="absolute left-0 top-0 w-4 h-4 rounded-full bg-blue-500 border-4 border-blue-200"></div>
            <div>
              <h3 class="font-bold text-lg">Diplôme d'État en Pédagogie Générale</h3>
              <div class="flex flex-col sm:flex-row sm:items-center text-gray-500 mb-2">
                <span class="flex items-center"><i class="fas fa-university mr-1 text-blue-500"></i><span class="mr-4">Collège des Savoirs</span></span>
                <span class="flex items-center"><i class="fas fa-calendar-alt mr-1 text-blue-500"></i><span>2017 - 2018</span></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-6 border-b-2 border-blue-500 pb-2">Formations Complémentaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="bg-blue-50 p-4 rounded-lg">
            <h3 class="font-semibold text-blue-700 mb-2">OpenClassrooms</h3>
            <ul class="list-disc pl-5 space-y-1 text-sm">
              <li>Comprendre le web</li>
              <li>Développement web avec PHP et MySQL</li>
              <li>Construire un site web avec Symfony 7</li>
              <li>Développement front-end avec React</li>
              <li>Débutez avec React</li>
            </ul>
          </div>
          <div class="bg-blue-50 p-4 rounded-lg">
            <h3 class="font-semibold text-blue-700 mb-2">Autres plateformes</h3>
            <ul class="list-disc pl-5 space-y-1 text-sm">
              <li>Udemy - React JS pour Tous (2024)</li>
              <li>Coursera - Foundations: Data, Data, Everywhere</li>
              <li>OpenClassrooms - Maîtriser Symfony</li>
              <li>OpenClassrooms - API REST</li>
              <li>OpenClassrooms - Git et GitHub avancé</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-12 bg-white rounded-xl shadow-md p-6 text-center">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <div class="mb-4 md:mb-0"><p class="text-gray-600">© 2025 Kayeye Godefroid - Tous droits réservés</p></div>
      <div class="flex space-x-4">
        <a href="tel:+243835370927" class="flex items-center text-blue-500 hover:text-blue-600"><i class="fas fa-phone mr-2"></i> +243 835 370 927</a>
        <a href="mailto:godetkayeye07@gmail.com" class="flex items-center text-blue-500 hover:text-blue-600"><i class="fas fa-envelope mr-2"></i> godetkayeye07@gmail.com</a>
      </div>
    </div>
  </footer>
</div>
`,
        }}
      />

      <CvClient />
    </>
  );
}

