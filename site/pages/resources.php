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
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..600;1,14..32,100..600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght,FILL@100..400,0..1" />
    <link rel="stylesheet" href="./resources/styles/styles.css">
    <title>TechLab | Recursos</title>
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
    <div class="landing landing-resources">
        <header>
            <div class="tech-intro">
                <h1>
                    Recursos</span>
                </h1>
                <p>
                    Una lista detallada de recursos literarios y audiovisuales para complementar tu estudio con la
                    asignatura.
                </p>
            </div>
            <div class="resources-image">
                <img src="./resources/images/illustrations/resources.png" />
            </div>
        </header>
        <div class="resources-container">
            <div class="grid-section">
                <h2 class="grid-title">Canales de YouTube</h2>
                <div class="grid">
                    <a class="resource-card" href="http://y2u.be/O5nskjZ_GoI" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CrashCourse Computer Science</h3>
                                <p>Serie en inglés sobre los conceptos básicos de computación, incluyendo sistemas
                                    operativos.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@codigofacilito" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>CodigoFacilito</h3>
                                <p>Videos en español sobre programación y fundamentos de computación.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@Computerphile" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Computerphile</h3>
                                <p>Videos sobre computación explicados de forma clara y visual.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.youtube.com/@FaztCode" target="_blank">
                        <img src="./resources/images/icons/youtube-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>FaztCode</h3>
                                <p>Tutoriales técnicos sobre Linux y herramientas relacionadas.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid-section">
                <h2 class="grid-title">Libros</h2>
                <div class="grid">
                    <a class="resource-card"
                        href="https://www.amazon.es/Ingenier%C3%ADa-software-en-Google-Oreilly/dp/8426734448/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1TP07D0FEAVTK&dib=eyJ2IjoiMSJ9.mfUZvxyR8MVpI78pjlOS0I1zBPK5Fz_B83QofHkTmlIclXfo3UTgW94nEbPN-WWJXNyMz_5DF5vYzisoL5EuaChVPSJLzPrjbUu6T8-d4FOPtrSBRXcqCewBrIyEP34H0vNOMJes8yw1yCzgIISuFr6NvJcatIYPHZFG3PNqrL21LMG6Ww3ZjnZkpfUVS1DuHZ3NnNf8IOXWNk-iPlufMqYiLzmYF_uJ9HAFXjj24Eg.-43HcmDaMcP5J7NkHok41z5u3kNvqUeJAKdprCOcTXg&dib_tag=se&keywords=Ingenier%C3%ADa+de+Software+en+Google&nsdOptOutParam=true&qid=1732633546&s=books&sprefix=clean+code+a+handbook+of+agile+software+craftsmanship%2Cstripbooks%2C305&sr=1-1"
                        target="_blank">
                        <img src="./resources/images/icons/book-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Ingeniería de Software en Google</h3>
                                <p>Un libro esencial para desarrolladores que desean escribir código limpio, legible y
                                    mantenible.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card"
                        href="https://www.amazon.es/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=15NVQIWY5SS8P&dib=eyJ2IjoiMSJ9.MeQLPU5r9G7JW-j-yQJD7O_vlz3U3Splg6JX-rXJgSmIhS8-2VgyAXI5ES5KWdZD03srUY_kRgjwmjv27Oct3CGfJXtu_2dqfyft89BZnqvm3th1I4IYfdVi0DXYAxux31sXQKfp9RC2mGKorAguYQ.7NcZ6hYmTtTCo8gOaIfZkY5F5lHIBuOK0ysCMNgvUYM&dib_tag=se&keywords=Clean+Code%3A+A+Handbook+of+Agile+Software+Craftsmanship&nsdOptOutParam=true&qid=1732633516&s=books&sprefix=designing+data-intensive+applications+-+martin+kleppmann%2Cstripbooks%2C331&sr=1-1"
                        target="_blank">
                        <img src="./resources/images/icons/book-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Clean Code: A Handbook of Agile Software Craftsmanship</h3>
                                <p>Videos en español sobre programación y fundamentos de computación.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card" href="https://www.amazon.es/Operating-System-Concepts-9th-ed/dp/8126554274"
                        target="_blank">
                        <img src="./resources/images/icons/book-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Operating System Concepts (9th Edition)</h3>
                                <p>Fundamentos de sistemas operativos: procesos, memoria, sistemas de archivos y
                                    sincronización.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
                    <a class="resource-card"
                        href="https://www.amazon.es/Designing-Data-Intensive-Applications-Reliable-Maintainable/dp/1449373321/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dib=eyJ2IjoiMSJ9.bAjN2ieCm0Taliqph_KPH4dP5mPjl0ldw60ms2Ehjwr4hLKM-QJkeWE2sMrn1Bhb.7oxpN8kBQcr3olQV0O8gm_h7yDBftPMRNgG_7leQar0&dib_tag=se&keywords=Designing+Data-Intensive+Applications+-+Martin+Kleppmann&nsdOptOutParam=true&qid=1732633493&s=books&sr=1-1"
                        target="_blank">
                        <img src="./resources/images/icons/book-icon.svg" />
                        <div class="resource-info">
                            <div class="info">
                                <h3>Designing Data-Intensive Applications</h3>
                                <p>Guía para construir sistemas fiables y escalables con grandes volúmenes de datos.</p>
                            </div>
                            <span class="material-symbols-rounded">open_in_new</span>
                        </div>
                    </a>
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