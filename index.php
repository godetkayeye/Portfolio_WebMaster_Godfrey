<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Kayeye Godefroid - Développeur Fullstack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/origin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-sm fixed w-full z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">
                <span class="gradient-text">GK</span>
                <span class="text-slate-800">.</span>
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#about" class="nav-link text-slate-700 hover:text-blue-600 font-medium">À propos</a>
                <a href="#skills" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Compétences</a>
                <a href="#projects" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Projets</a>
                <a href="#education" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Formation</a>
                <a href="#contact" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Contact</a>
            </nav>
            
            <!-- Mobile Menu Toggle -->
            <button class="md:hidden menu-toggle focus:outline-none">
                <span class="block w-6 h-0.5 bg-slate-800 mb-1.5"></span>
                <span class="block w-6 h-0.5 bg-slate-800 mb-1.5"></span>
                <span class="block w-6 h-0.5 bg-slate-800"></span>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white py-4 px-6 shadow-lg">
            <div class="flex flex-col space-y-4">
                <a href="#about" class="nav-link text-slate-700 hover:text-blue-600 font-medium">À propos</a>
                <a href="#skills" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Compétences</a>
                <a href="#projects" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Projets</a>
                <a href="#education" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Formation</a>
                <a href="#contact" class="nav-link text-slate-700 hover:text-blue-600 font-medium">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="about" class="pt-32 pb-20 px-6">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center gap-8 md:gap-0">
            <div class="md:w-1/2 mb-12 md:mb-0 md:pr-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Bonjour, je suis <span class="gradient-text">Godefroid Kayeye</span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-semibold text-slate-600 mb-6">
                    Développeur Fullstack Web & Mobile
                </h2>
                <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                    Passionné par le développement web et mobile, je crée des applications performantes et intuitives. Mon expertise couvre Symfony et NestJS pour le back-end robuste, React et Next.js pour le front-end moderne, et React Native pour les applications mobiles natives.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-lg font-medium hover:opacity-90 transition">
                        Me contacter
                    </a>
                    <a href="Curriculum Vitae.php" class="px-6 py-3 border border-slate-300 text-slate-700 rounded-lg font-medium hover:bg-slate-50 transition">
                        Voir le CV
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative">
                    <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="img/photo.jpeg"
                             alt="Godefroid Kayeye" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-white p-3 rounded-full shadow-lg">
                        <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-code text-white text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-slate-50 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 section-title">Mes Compétences</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-laptop-code text-blue-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Frontend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">React</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Next.js</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">HTML5</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">CSS3</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">TailwindCSS</span>
                    </div>
                </div>
                
                <!-- Backend Skills -->
                <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-server text-indigo-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Backend</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">Symfony</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">NestJS</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">API REST</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm">PostgreSQL</span>
                    </div>
                </div>
                
                <!-- Mobile Skills -->
                <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-green-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mobile</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">React Native</span>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">TypeScript</span>
                    </div>
                </div>
                
                <!-- Tools & Other -->
                <div class="bg-white p-6 rounded-xl shadow-sm card-hover">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tools text-purple-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Outils & Autres</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Git</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Docker</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">CI/CD</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Agile</span>
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">Figma</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 section-title">Projets Travaillés</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-blue-400 to-indigo-500 flex items-center justify-center">
                        <i class="fas fa-project-diagram text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Site web Pro INBTP</h3>
                        <p class="text-slate-600 mb-4">Site web Pro complet avec gestion des adminstrateurs.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Symfony</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">PHP</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">React</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">TailwindCSS</span>
                        </div>
                        <a href="https://inbtp.ac.cd/" class="text-blue-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center">
                        <i class="fas fa-chart-line text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Gestion complète d'un Hopital cas de l'hopital Saintpierre</h3>
                        <p class="text-slate-600 mb-4">Visualisation de données en temps réel avec graphiques interactifs.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Symfony</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">React</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs">PHP</span>
                        </div>
                        <a href="https://saintpiere.startradingsarl.org/" class="text-purple-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-green-400 to-teal-500 flex items-center justify-center">
                        <i class="fas fa-users text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Réseau Social</h3>
                        <p class="text-slate-600 mb-4">Plateforme de mise en relation avec système de messagerie instantanée.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Symfony</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">WebSocket</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">MySQL</span>
                        </div>
                        <a href="#" class="text-green-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 4 - CNHD -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-orange-400 to-red-500 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">CNHD - Collecte de Données</h3>
                        <p class="text-slate-600 mb-4">Application mobile et web pour la collecte et la gestion des données en temps réel.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">React Native</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">React</span>
                            <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">Symfony</span>
                        </div>
                        <a href="#" class="text-orange-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 5 - Villakazi -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-cyan-400 to-blue-500 flex items-center justify-center">
                        <i class="fas fa-tasks text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Villakazi - Gestion d'Entreprise</h3>
                        <p class="text-slate-600 mb-4">Application complète de gestion pour optimiser les opérations et améliorer la productivité.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-800 rounded-full text-xs">Symfony</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-800 rounded-full text-xs">React</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-800 rounded-full text-xs">PostgreSQL</span>
                        </div>
                        <a href="#" class="text-cyan-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 6 - Daredre -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-r from-pink-400 to-rose-500 flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-white text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Daredre - Application Client</h3>
                        <p class="text-slate-600 mb-4">Plateforme client innovante offrant une expérience utilisateur fluide et intuitive.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 rounded-full text-xs">React</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 rounded-full text-xs">React Native</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 rounded-full text-xs">NestJS</span>
                        </div>
                        <a href="#" class="text-pink-500 font-medium hover:underline flex items-center">
                            Voir le projet <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-6 py-3 border border-slate-300 text-slate-700 rounded-lg font-medium hover:bg-slate-50 transition inline-flex items-center">
                    Voir tous mes projets <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-16 bg-slate-50 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 section-title">Mon Parcours</h2>
            
            <div class="max-w-3xl mx-auto">
                <!-- Education 1 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Créez une maquette web avec Figma</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2022</span>
                        </div>
                        <p class="text-slate-600 mb-2">Design et prototypage web</p>
                        <p class="text-slate-500">OpenClassrooms</p>
                    </div>
                </div>
                
                <!-- Education 2 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Bac + 3 en Sciences</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2022 - 2023</span>
                        </div>
                        <p class="text-slate-600 mb-2">Mathématiques et Informatique</p>
                        <p class="text-slate-500">Université Pédagogique Nationale</p>
                    </div>
                </div>
                
                <!-- Education 3 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Concevez votre site web avec PHP et MySQL</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2023</span>
                        </div>
                        <p class="text-slate-600 mb-2">Développement backend avec PHP</p>
                        <p class="text-slate-500">OpenClassrooms</p>
                    </div>
                </div>

                <!-- Education 4 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Gérez du code avec Git et GitHub</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2023</span>
                        </div>
                        <p class="text-slate-600 mb-2">Contrôle de version et collaboration</p>
                        <p class="text-slate-500">OpenClassrooms</p>
                    </div>
                </div>

                <!-- Education 5 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Construisez un site web avec Symfony 7</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024</span>
                        </div>
                        <p class="text-slate-600 mb-2">Framework PHP moderne et performant</p>
                        <p class="text-slate-500">OpenClassrooms</p>
                    </div>
                </div>

                <!-- Education 6 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">React JS pour Tous - L'Ultime Formation</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024</span>
                        </div>
                        <p class="text-slate-600 mb-2">Développement frontend avancé avec React</p>
                        <p class="text-slate-500">Udemy</p>
                    </div>
                </div>

                <!-- Education 7 -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Foundations: Data, Data, Everywhere</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024</span>
                        </div>
                        <p class="text-slate-600 mb-2">Analyse et science des données</p>
                        <p class="text-slate-500">Google | Coursera</p>
                    </div>
                </div>

                <!-- Education 8 - JavaScript Avancé -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">JavaScript Avancé - ES6+ et Async</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024</span>
                        </div>
                        <p class="text-slate-600 mb-2">Programmation JavaScript moderne et asynchrone</p>
                        <p class="text-slate-500">Udemy</p>
                    </div>
                </div>

                <!-- Education 9 - React Native -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">React Native - Développement Mobile</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024 - 2025</span>
                        </div>
                        <p class="text-slate-600 mb-2">Création d'applications mobiles natives avec JavaScript</p>
                        <p class="text-slate-500">Udemy</p>
                    </div>
                </div>

                <!-- Education 10 - NestJS -->
                <div class="mb-8 pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">NestJS - Framework Backend Avancé</h3>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">2024 - 2025</span>
                        </div>
                        <p class="text-slate-600 mb-2">Développement d'API robustes avec NestJS et TypeScript</p>
                        <p class="text-slate-500">Udemy</p>
                    </div>
                </div>

                <!-- Education 11 - Licence -->
                <div class="pl-8 relative">
                    <div class="absolute left-0 top-0 w-1 h-full bg-gradient-to-b from-blue-500 to-indigo-500 rounded-full"></div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border-l-4 border-green-500">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold">Licence en Conception de Systèmes d'Informations</h3>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">2024 - 2025</span>
                        </div>
                        <p class="text-slate-600 mb-2">Architecture et conception d'applications</p>
                        <p class="text-slate-500">Université Pédagogique Nationale</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-6">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12 section-title">Contactez-moi</h2>
            
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-gradient-to-br from-blue-500 to-indigo-600 p-8 text-white">
                        <h3 class="text-2xl font-semibold mb-4">Discutons de votre projet</h3>
                        <p class="mb-6">Je suis disponible pour des opportunités de freelance ou des postes en CDI. N'hésitez pas à me contacter pour échanger sur vos besoins.</p>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Email</h4>
                                    <a href="mailto:godetkayeye07@gmail.com" class="hover:underline">godetkayeye07@gmail.com</a>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Téléphone</h4>
                                    <a href="tel:+243835370927" class="hover:underline">+243 835 370 927</a>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="mr-4 mt-1">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Localisation</h4>
                                    <p>Kinshasa, République Démocratique du Congo</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="font-medium mb-3">Réseaux sociaux</h4>
                            <div class="flex space-x-4">
                                <a href="https://linkedin.com/in/godefroid-kayeye" target="_blank" class="social-icon">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                                <a href="https://github.com/Godetkayeye" target="_blank" class="social-icon">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="https://x.com/Godefroidkayeye" target="_blank" class="social-icon">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 p-8">
                        <form id="contactForm" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nom complet</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-slate-700 mb-1">Sujet</label>
                                <input type="text" id="subject" name="subject" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-slate-700 mb-1">Message</label>
                                <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                            
                            <button type="submit" class="w-full py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-lg font-medium hover:opacity-90 transition" id="sendBtn">
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-800 text-white py-8 px-6 mt-auto">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="#" class="text-2xl font-bold">
                        <span class="gradient-text">GK</span>
                        <span class="text-white">.</span>
                    </a>
                </div>
                
                <div class="flex space-x-6 mb-4 md:mb-0">
                    <a href="#about" class="hover:text-blue-300">À propos</a>
                    <a href="#skills" class="hover:text-blue-300">Compétences</a>
                    <a href="#projects" class="hover:text-blue-300">Projets</a>
                    <a href="#contact" class="hover:text-blue-300">Contact</a>
                </div>
                
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/in/godefroid-kayeye" target="_blank" class="social-icon">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://github.com/godetkayeye" target="_blank" class="social-icon">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://x.com/Godefroidkayeye" target="_blank" class="social-icon">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-slate-700 mt-8 pt-6 text-center text-slate-400">
                <p>&copy; 2023 Kayeye Godefroid. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const mobileMenu = document.querySelector('header div.md\\:hidden');
            
            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                mobileMenu.classList.toggle('hidden');
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        if (!mobileMenu.classList.contains('hidden')) {
                            menuToggle.classList.remove('active');
                            mobileMenu.classList.add('hidden');
                        }
                    }
                });
            });
            
            // Add shadow to header on scroll
            const header = document.querySelector('header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    header.classList.add('shadow-lg');
                } else {
                    header.classList.remove('shadow-lg');
                }
            });
        });

        // Web3Forms Configuration
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const sendBtn = document.getElementById('sendBtn');
            const form = document.getElementById('contactForm');
            
            // Disable button
            sendBtn.disabled = true;
            sendBtn.innerHTML = 'Envoi en cours...';
            
            try {
                const response = await fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        access_key: '4501dc7f-01c4-4f13-aa40-c08bf35b4527',
                        name: document.getElementById('name').value,
                        email: document.getElementById('email').value,
                        subject: document.getElementById('subject').value,
                        message: document.getElementById('message').value
                    })
                });
                
                const result = await response.json();
                
                if (result.success) {
                    console.log('Message envoyé avec succès!');
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès!',
                        text: 'Votre message a été envoyé avec succès!',
                        confirmButtonColor: '#3b82f6',
                        confirmButtonText: 'Fermer'
                    });
                    form.reset();
                } else {
                    console.error('Erreur:', result.message);
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Erreur: ' + (result.message || 'Une erreur s\'est produite'),
                        confirmButtonColor: '#3b82f6',
                        confirmButtonText: 'Fermer'
                    });
                }
            } catch (error) {
                console.error('Erreur réseau:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur réseau',
                    text: 'Erreur réseau. Veuillez vérifier votre connexion.',
                    confirmButtonColor: '#3b82f6',
                    confirmButtonText: 'Fermer'
                });
            } finally {
                sendBtn.disabled = false;
                sendBtn.innerHTML = 'Envoyer le message';
            }
        });
    </script>
</body>
</html>