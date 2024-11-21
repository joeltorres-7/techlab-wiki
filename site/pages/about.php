<?php
include 'list_articles.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..400,0..1" />
    <link rel="stylesheet" href="./resources/styles/styles.css">
    <title>TechLab | Wiki</title>
</head>

<body>
    <div id="nav-menu" class="nav-menu">
        <a href="landing.php">Temas</a>
        <a href="article.php?article=welcome">Recursos</a>
        <a href="about.php">Nosotros</a>
    </div>
    <nav>
        <div class="nav-search">
            <a class="m-0 nav-top" href="landing.php">
                <img class="nav-logo nav-landing" src="./resources/images/techlab-logo.svg" alt="Wiki Logo">
            </a>
            <div class="search-container">
                <span class="material-symbols-rounded search-icon">search</span>
                <input type="text" id="search-bar" placeholder="Buscar artículos..." oninput="searchArticles()">
                <ul id="article-list">
                    <!-- Aquí se mostrarán los artículos que inician con el prompt de busqueda -->
                </ul>
            </div>
        </div>

        <div class="nav-links">
            <a href="landing.php">Temas</a>
            <a href="article.php?article=welcome">Recursos</a>
            <a href="about.php">Nosotros</a>
        </div>

        <div class="nav-actions">
            <div id="nav-search-icon" class="search-box">
                <span class="material-symbols-rounded">search</span>
            </div>
            <svg id="hamburger" class="ham hamRotate ham4" viewBox="0 0 100 100" width="48"
                onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </div>
    </nav>
    <div class="landing landing-about">
        <header>
            <div class="tech-intro">
                <h1>
                    Tecnología
                    <br />
                    <span>y Creatividad</span>
                </h1>
                <p>
                    Somos más que un equipo de desarrolladores: somos artistas digitales. Combinamos nuestra pasión por
                    la
                    tecnología y el arte para crear plataformas que inspiran, sorprenden y conectan. Cada proyecto es
                    una
                    oportunidad de contar una historia y dejar una marca en el mundo.
                </p>
            </div>
            <div class="image-intro">
                <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2_101)">
                        <g opacity="0.5" filter="url(#filter0_f_2_101)">
                            <path d="M128.6 0H0V322.2L106.2 134.75L128.6 0Z" fill="#FF00B8" />
                            <path d="M0 322.2V400H240H320L106.2 134.75L0 322.2Z" fill="#FFB800" />
                            <path d="M320 400H400V78.75L106.2 134.75L320 400Z" fill="#C8F1B5" />
                            <path d="M400 0H128.6L106.2 134.75L400 78.75V0Z" fill="#0037FF" />
                        </g>
                    </g>
                    <defs>
                        <filter id="filter0_f_2_101" x="-159.933" y="-159.933" width="719.867" height="719.867"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="79.9667" result="effect1_foregroundBlur_2_101" />
                        </filter>
                        <clipPath id="clip0_2_101">
                            <rect width="400" height="400" rx="200" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </header>
        <div class="our-team">
            <h2 class="team-title">Nuestro equipo</h2>
            <div class="team-members">
                <div class="team-card">
                    <img src="./resources/images/pictures/joel-picture.jpg" alt="Portrait of Joel">
                    <div class="team-info">
                        <div class="role">
                            <h3>JOEL TORRES</h3>
                            <p>DISEÑADOR Y<br />DESARROLLADOR</p>
                        </div>
                        <div class="team-social">
                            <a href="https://github.com/joeltorres-7">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="https://linkedin.com/in/joeltorres1/">
                                <img src="./resources/images/icons/linkedin-icon.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <img src="./resources/images/pictures/empty-picture.jpg" alt="Empty profile picture">
                    <div class="team-info">
                        <div class="role">
                            <h3>FERNANDO RODRIGUEZ</h3>
                            <p>DESARROLLADOR</p>
                        </div>
                        <div class="team-social">
                            <a href="#">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="#">
                                <img src="./resources/images/icons/linkedin-icon.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <img src="./resources/images/pictures/empty-picture.jpg" alt="Empty profile picture">
                    <div class="team-info">
                        <div class="role">
                            <h3>SEBASTIAN ROLÓN</h3>
                            <p>COPYWRITER</p>
                        </div>
                        <div class="team-social">
                            <a href="https://github.com/jsebm">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="#">
                                <img src="./resources/images/icons/linkedin-icon.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-logo">
            <a class="m-0" href="landing.php">
                <img class="nav-logo" src="./resources/images/techlab-logo-white.svg" alt="Wiki Logo">
            </a>
            <p>&copy; <?= date('Y') ?> Todos los derechos reservados</p>
        </div>
    </footer>
    <script>
        document.getElementById('hamburger').addEventListener('click', function () {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('show');
        });
        window.addEventListener('resize', function () {
            const navMenu = document.getElementById('nav-menu');
            const hamburger = document.getElementById('hamburger');
            if (window.innerWidth > 800) {
                navMenu.classList.remove('show');
                hamburger.classList.remove('active'); // Reset hamburger icon
            }
        });
    </script>
</body>

</html>