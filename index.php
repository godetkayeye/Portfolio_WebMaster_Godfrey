<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Kayeye Godefroid</title>
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
                <li><a href="Curriculum Vitae.php">CV</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
    <div class="hero-content">
        <div class="profile">
            <img src="img/img1.jpeg" alt="godet kayeye">
        </div>
        <div class="intro">
            <h1>Salut ! 👋</h1>
            <p class="title">À propos de moi</p>
            <p class="description">
                Développeur Fullstack passionné par le <strong>web et l'innovation</strong>, 
                j'aime concevoir des <strong>applications performantes</strong> et intuitives 
                en combinant <strong>Symfony</strong> et <strong>React</strong>. 
                Cet espace est dédié à mes projets et à mon expertise en développement.
            </p>
            <div class="buttons">
                <a href="Curriculum Vitae.php" class="btn yellow">CV</a>
                <a href="#" class="btn red">Projets</a>
                <a href="education.php" class="btn blue">Education</a>
                <a href="mailto:godetkayeye07@gmail.com" class="btn blue">Me contacter</a>
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
            <a href="https://linkedin.com/in/godefroid-kayeye" target="_blank"><img src="img/linkedin.svg" alt="LinkedIn"></a>
            <a href="https://github.com/Godetkayeye" target="_blank"><img src="img/twitter.svg" alt="Twitter"></a>
        </div>
        <div class="legal">
            <p>© 2025 Kayeye Godefroid - Tous droits réservés</p>
        </div>
    </footer>
    <script>
       
         document.addEventListener("DOMContentLoaded", function () {
        // Affichage du message au chargement de la page
        alert("Coucou ! Juste pour vous rassurer que ce portfolio est en développement. Merci !");
        
        const menuToggle = document.querySelector(".menu-toggle");
        const navMenu = document.querySelector("nav ul");

        menuToggle.addEventListener("click", function () {
            navMenu.classList.toggle("show");
        });
    });
    </script>
</body>
</html>
