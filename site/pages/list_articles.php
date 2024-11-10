<?php
function getArticles() {
    $articles = [];
    $files = glob('articles/*.md'); // Busca todos los archivos .md en la carpeta de articles

    foreach ($files as $file) {
        $content = file_get_contents($file);

        // Extrae el título y la descripción usando expresiones regulares
        if (preg_match('/^title:\s*(.+)$/m', $content, $titleMatch) &&
            preg_match('/^description:\s*(.+)$/m', $content, $descMatch)) {
            $title = $titleMatch[1];
            $description = $descMatch[1];
            $filename = basename($file, ".md"); // Nombre del archivo sin la extensión

            // Guarda la información en un arreglo
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'filename' => $filename
            ];
        }
    }

    return $articles;
}

// Genera la lista de artículos en HTML
$articles = getArticles();
?>
