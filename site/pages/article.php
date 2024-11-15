<?php
require '../lib/Parsedown.php';

$parsedown = new Parsedown();
$article = isset($_GET['article']) ? $_GET['article'] : 'welcome';
$filePath = "articles/$article.md";

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./resources/styles/styles.css">
    <title>TechLab - <?= htmlspecialchars($customTitle) ?></title>
    <meta charset="UTF-8">
</head>

<body>
    <nav>
        <a class="m-0" href="landing.php">
            <img class="nav-logo" src="./resources/images/techlab-logo.svg" alt="Wiki Logo">
        </a>
        <div class="nav-links">
            <a href="landing.php">Temas</a>
            <a href="article.php?article=welcome">Recursos</a>
            <a href="article.php?article=welcome">Nosotros</a>
        </div>
    </nav>
    <div class="article-main">
        <div class="article-content">
            <div class="breadcrumbs">
                <a href="landing.php">Home</a>
                <span class="separator">/</span>
                <span><?= htmlspecialchars($customTitle) ?></span>
            </div>

            <article>
                <?= $htmlContent ?>
            </article>
            <div class="article-next-card">
                <div>
                    <p class="article-subtitle">Continua leyendo</p>
                    <h3 class="article-title">Articulo 1</h3>
                </div>
                <div class="article-button">
                    <span class="material-symbols-rounded">arrow_forward</span>
                </div>
            </div>
        </div>
        <div class="article-recommendations">
            <p class="recommended-title">Articulos Recomendados</p>
            <div class="article-card">
                <div class="article-icon-box">
                    <span class="material-symbols-rounded">storage</span>
                </div>
                <div class="article-info">
                    <h3>Gestion de Memoria</h3>
                    <p>Este es un breve resumen del tema a explicar en este articulo.</p>
                </div>
            </div>
            <div class="article-card">
                <div class="article-icon-box">
                    <span class="material-symbols-rounded">storage</span>
                </div>
                <div class="article-info">
                    <h3>Gestion de Memoria</h3>
                    <p>Este es un breve resumen del tema a explicar en este articulo.</p>
                </div>
            </div>
            <div class="article-card">
                <div class="article-icon-box">
                    <span class="material-symbols-rounded">storage</span>
                </div>
                <div class="article-info">
                    <h3>Gestion de Memoria</h3>
                    <p>Este es un breve resumen del tema a explicar en este articulo.</p>
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
        <div class="nav-links">
            <a href="landing.php">Temas</a>
            <a href="article.php?article=welcome">Recursos</a>
            <a href="article.php?article=welcome">Nosotros</a>
        </div>
    </footer>
</body>

</html>