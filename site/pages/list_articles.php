<?php
function getArticles()
{
    $articles = [];
    $files = glob('articles/*.md'); // Buscar todos los archivos .md en la carpeta articles

    foreach ($files as $file) {
        $content = file_get_contents($file);

        // Extraer bloque de metadatos y contenido restante
        if (preg_match('/^---(.*?)---\s*(.*)$/s', $content, $matches)) {
            $metadata = $matches[1];
            $markdownContent = $matches[2];

            // Extraer campos de metadatos específicos
            $title = null;
            $description = null;
            $icon = null;

            if (preg_match('/^title:\s*(.+)$/m', $metadata, $titleMatch)) {
                $title = $titleMatch[1];
            }
            if (preg_match('/^description:\s*(.+)$/m', $metadata, $descMatch)) {
                $description = $descMatch[1];
            }
            if (preg_match('/^icon:\s*(.+)$/m', $metadata, $iconMatch)) {
                $icon = $iconMatch[1];
            }

            $filename = basename($file, ".md");

            // Agregar artículo a la lista
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'icon' => $icon,
                'filename' => $filename,
                'content' => $markdownContent // Opcional
            ];
        }
    }

    return $articles;
}

// Obtener lista de artículos
$articles = getArticles();

// Verificar si $article está definido
$currentArticle = isset($_GET['article']) ? $_GET['article'] : null;

// Filtrar artículos recomendados
$filteredArticles = array_filter($articles, function ($article) use ($currentArticle) {
    return $article['filename'] !== $currentArticle;
});

// Reorganizar los índices para evitar errores al hacer slicing
$filteredArticles = array_values($filteredArticles);

// Seleccionar hasta 3 artículos, sin duplicados
$recommended = array_slice($filteredArticles, 0, 3);

// Generar HTML de artículos recomendados
$recommendedHtml = '';
foreach ($recommended as $article) {
    $icon = $article['icon'] ?: 'storage'; // Icono predeterminado
    $title = htmlspecialchars($article['title']);
    $description = htmlspecialchars($article['description']);
    $filename = htmlspecialchars($article['filename']);

    $recommendedHtml .= '
        <a class="article-card" href="article.php?article=' . urlencode($filename) . '">
            <div class="article-icon-box">
                    <span class="material-symbols-rounded">' . $icon . '</span>
                </div>
                <div class="article-info">
                    <h3>' . $title . '</h3>
                    <p>' . $description . '</p>
            </div>
        </a>
    ';
}
?>