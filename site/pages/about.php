<?php
include 'list_articles.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/images/icons/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..400,0..1" />
    <link rel="stylesheet" href="./resources/styles/styles.css">
    <title>TechLab | Nosotros</title>
</head>

<body>
    <div id="nav-menu" class="nav-menu">
        <a href="landing.php">Temas</a>
        <a href="resources.php">Recursos</a>
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
            <a href="resources.php">Recursos</a>
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
            <div class="team-image">
                <img src="./resources/images/illustrations/creative.png" />
            </div>
        </header>
        <div class="our-project">
            <h2 class="project-title">Nuestro proyecto</h2>
            <div class="video-container">
                <div class="video-skeleton"></div>
                <iframe class="video-frame" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=AeC1oj8osmfPm03_" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen onload="hideSkeleton()">
                </iframe>
            </div>
        </div>
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
                            <a href="https://github.com/joeltorres-7" target="_blank">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="https://linkedin.com/in/joeltorres1/" target="_blank">
                                <img src="./resources/images/icons/linkedin-icon.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <img src="./resources/images/pictures/fernando-picture.jpg" alt="Empty profile picture">
                    <div class="team-info">
                        <div class="role">
                            <h3>FERNANDO RODRIGUEZ</h3>
                            <p>DESARROLLADOR</p>
                        </div>
                        <div class="team-social">
                            <a href="#" target="_blank">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="#" target="_blank">
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
                            <a href="https://github.com/jsebm" target="_blank">
                                <img src="./resources/images/icons/github-icon.svg" />
                            </a>
                            <a href="#" target="_blank">
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
        function hideSkeleton() {
            const skeleton = document.querySelector('.video-skeleton');
            const video = document.querySelector('.video-frame');
            if (skeleton) {
                skeleton.style.display = 'none';
            }
            if (video) {
                video.style.display = 'block';
            }
        }
    </script>
</body>

</html>