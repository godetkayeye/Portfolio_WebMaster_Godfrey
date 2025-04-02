<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éducation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/styles.css">
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
                <li><a href="documents/CV.pdf" target="_blank">CV</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>


    <section class="education-section">
        <div class="container">
            <h2 class="section-title">Éducation</h2>
            <p class="section-subtitle">Mon parcours académique et mes formations professionnelles.</p>

            <div class="timeline">
            <!-- Bac +3 en Sciences -->
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

            <!-- Développement Android -->
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

            <!-- Agile Software Developer -->
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

            <!-- Udemy React JS -->
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

            <!-- Google Data Analysis -->
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
             <!-- Développement Android -->
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
