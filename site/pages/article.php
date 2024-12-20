<?php
require '../lib/Parsedown.php';
include 'list_articles.php';

$parsedown = new Parsedown();
$article = isset($_GET['article']) ? $_GET['article'] : 'welcome';
$filePath = "articles/$article.md";

if (!file_exists('articles/' . $article . '.md')) {
    header('Location: 404.php');
    exit();
}

// Default title if no metadata is found
$customTitle = "Wiki Article";

// Check if the file exists
if (file_exists($filePath)) {
    $markdownContent = file_get_contents($filePath); // Read the Markdown file content

    // Extract metadata if present
    if (preg_match('/^---(.*?)---\s*(.*)$/s', $markdownContent, $matches)) {
        $metadata = $matches[1];
        $markdownContent = $matches[2]; // Remaining content after metadata

        // Find title in metadata
        if (preg_match('/^title:\s*(.+)$/m', $metadata, $titleMatch)) {
            $customTitle = $titleMatch[1];
        }

        // Find video_url in metadata
        if (preg_match('/^video_url:\s*(.+)$/m', $metadata, $videoMatch)) {
            $videoUrl = $videoMatch[1];
        } else {
            $videoUrl = null; // No video URL in metadata
        }
    }

    $htmlContent = $parsedown->text($markdownContent); // Convert Markdown to HTML
} else {
    $htmlContent = "<p>Article not found.</p>";
}

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
    <title>TechLab - <?= htmlspecialchars($customTitle) ?></title>
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
    <div class="article-main">
        <div class="article-content">
            <div class="breadcrumbs">
                <a href="landing.php">Home</a>
                <span class="separator">/</span>
                <span><?= htmlspecialchars($customTitle) ?></span>
            </div>

            <article class="markdown-content">
                <div class="video-container">
                    <div class="video-skeleton"></div> <!-- Skeleton placeholder -->
                    <?php if (!empty($videoUrl)): ?>
                        <iframe class="video-frame" src="<?= htmlspecialchars($videoUrl) ?>" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                            onload="hideSkeleton()"></iframe>
                    <?php else: ?>
                        <p>Video no disponible.</p>
                    <?php endif; ?>
                </div>
                <?= $htmlContent ?>
            </article>
            <div class="next-article-card">
                <?php if ($nextArticle): ?>
                    <a class="article-next-card" href="article.php?article=<?= urlencode($nextArticle['filename']) ?>"
                        class="next-article-link">
                        <div>
                            <p class="article-subtitle">Continua leyendo</p>
                            <h3 class="article-title"><?= htmlspecialchars($nextArticle['title']) ?></h3>
                        </div>
                        <div class="article-button">
                            <span class="material-symbols-rounded">arrow_forward</span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="article-recommendations">
            <p class="recommended-title">Articulos Recomendados</p>
            <?= $recommendedHtml ?>
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
        async function searchArticles() {
            const query = document.getElementById('search-bar').value.toLowerCase();
            const searchBar = document.getElementById('search-bar');
            const articleList = document.getElementById('article-list');

            if (!query) {
                articleList.innerHTML = '';
                articleList.style.display = 'none';
                searchBar.classList.remove('expanded');
                articleList.classList.remove('expanded-list');
                return;
            }

            const response = await fetch('search.php?query=' + encodeURIComponent(query));
            const articles = await response.json();

            articleList.innerHTML = ''; // Limpia resultados previos

            if (articles.length > 0) {
                articleList.style.display = 'block';
                searchBar.classList.add('expanded');
                articleList.classList.add('expanded-list');

                articles.forEach(article => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `
                <a href="article.php?article=${article.filename}">
                    <div class="article-search-box">
                        <p>${article.title}</p><br>
                    </div>
                </a>
            `;
                    articleList.appendChild(listItem);
                });
            } else {
                articleList.style.display = 'none';
                searchBar.classList.remove('expanded');
                articleList.classList.remove('expanded-list');
            }
        }

        // Nav Menu Hamburger

        document.getElementById('hamburger').addEventListener('click', function () {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('show');
        });

        // Hide nav-menu when resizing the window beyond 600px
        window.addEventListener('resize', function () {
            const navMenu = document.getElementById('nav-menu');
            const hamburger = document.getElementById('hamburger');
            if (window.innerWidth > 800) {
                navMenu.classList.remove('show');
                hamburger.classList.remove('active');
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