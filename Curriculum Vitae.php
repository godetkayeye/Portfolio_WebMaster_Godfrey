<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - KAYEYE MUKWA Godefroid</title>
    <link rel="stylesheet" href="assets/style_cv.css">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">● Kayeye <small>Godefroid</small></div>
        <!-- Bouton menu burger -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="header">
            <img src="img/img1.jpeg" alt="Photo de profil">
            <h1>KAYEYE MUKWA Godefroid</h1>
            <p>Développeur Fullstack | godetkayeye07@gmail.com | +243 835370927</p>
            <p>Kinshasa, RDC | Célibataire</p>
        </div>

        <div class="section">
            <h2>À propos</h2>
            <p>Développeur passionné avec 6 ans d'expérience en PHP et 5 ans en Trust & Safety Engineering.</p>
        </div>

        <div class="section">
            <h2>Domaines de Compétences</h2>
            <ul>
                <li>Langages : PHP, JavaScript, HTML, CSS</li>
                <li>Frameworks : Symfony, React, Bootstrap</li>
                <li>Bases de données : MySQL, SQL Server</li>
                <li>Gestion des versions : Git, GitHub</li>
                <li>Développement d’API REST avec Symfony</li>
                <li>Déploiement et gestion d’applications web</li>
            </ul>
        </div>

        <div class="section">
            <h2>Expérience Professionnelle</h2>
            <p><strong>Développeur Fullstack (2018 - Présent)</strong></p>
            <ul>
                <li>Développement d'un système de gestion de courriers avec Symfony</li>
                <li>Implémentation d'un système de présence basé sur des badges RFID</li>
                <li>Développement d'un module de gestion des hospitalisations (https://saintpiere.startradingsarl.org/)</li>
                <li>Développement d'une interface utilisateur dynamique avec React</li>
                <li>Développement d'un site web pour l'institut National du Batiment & des Travaux Publics (https://inbtp.ac.cd/)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Formation</h2>
            <p><strong>Université Pédagogique Nationale</strong> - Licence en Mathématiques et Informatique (2019 - 2025)</p>
            <p><strong>Collège des Savoirs</strong> - Diplôme d'État en Pédagogie Générale (2017 - 2018)</p>
        </div>

        <div class="section">
            <h2>Formations Complémentaires</h2>
           <h2>Formations complémentaires</h2>
			<ul>
			    <li><strong>OpenClassrooms</strong> - Comprendre le web</li>
			    <li><strong>OpenClassrooms</strong> - Développement web avec PHP et MySQL</li>
			    <li><strong>OpenClassrooms</strong> - Construire un site web avec Symfony 7</li>
			    <li><strong>OpenClassrooms</strong> - Développement front-end avec React</li>
			    <li><strong>OpenClassrooms</strong> - Débutez avec React</li>
			    <li><strong>Udemy</strong> - React JS pour Tous - L'Ultime Formation 2024</li>
                <li><strong>Coursera</strong> - Foundations: Data, Data, Everywhere</li>
			    <li><strong>OpenClassrooms</strong> - Maîtriser Symfony pour créer des applications robustes</li>
			    <li><strong>OpenClassrooms</strong> - Adoptez les API REST pour vos projets web</li>
			    <li><strong>OpenClassrooms</strong> - Utilisation avancée de Git et GitHub</li>
			    <li><strong>OpenClassrooms</strong> - Créer une maquette web avec Figma</li>
			    <li><strong>OpenClassrooms</strong> - Objectif IA : Initiez-vous à l'intelligence artificielle</li>
			</ul>
        </div>

        <div class="section">
            <h2>Langues</h2>
            <ul>
                <li>Français : Très Bon</li>
                <li>Anglais : Assez Bon</li>
                <li>Lingala : Bon</li>
            </ul>
        </div>

        <div class="section">
            <h2>Outils Informatiques</h2>
            <ul>
                <li>Word, Excel, Access, Internet</li>
                <li>HTML, CSS, Bootstrap, PHP, MySQL, SQL Server</li>
            </ul>
        </div>
    </div>
    <footer>
        <div class="contact-info">
            <p><strong>Téléphone :</strong> +243 835 370 927</p>
            <p><strong>E-mail :</strong> <a href="mailto:godetkayeye07@gmail.com">godetkayeye07@gmail.com</a></p>
        </div>
        <div class="social-media">
            <p><strong>Suivez-moi :</strong></p>
            <a href="#"><img src="img/linkedin.svg" alt="LinkedIn"></a>
            <a href="#"><img src="img/twitter.svg" alt="Twitter"></a>
        </div>
        <div class="legal">
            <p>© 2025 Kayeye Godefroid - Tous droits réservés</p>
        </div>
    </footer>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Animation de la timeline
                const timelineItems = document.querySelectorAll(".timeline-item");

                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("show");
                        }
                    });
                }, { threshold: 0.2 });

                timelineItems.forEach(item => observer.observe(item));

                // Menu burger
                const menuToggle = document.querySelector(".menu-toggle");
                const navMenu = document.querySelector("nav ul");

                menuToggle.addEventListener("click", function () {
                    navMenu.classList.toggle("show");
                });
            });
</script>
</body>
</html>
