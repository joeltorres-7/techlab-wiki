<?php
function getArticles() {
    $articles = [];
    $files = glob('articles/*.md'); // Busca todos los archivos .md en la carpeta de articles

    foreach ($files as $file) {
        $content = file_get_contents($file);

        // Extrae el título, descripción e icono usando expresiones regulares
        if (preg_match('/^title:\s*(.+)$/m', $content, $titleMatch) &&
            preg_match('/^description:\s*(.+)$/m', $content, $descMatch) &&
            preg_match('/^icon:\s*(.+)$/m', $content, $iconMatch)) {
            
            $title = $titleMatch[1];
            $description = $descMatch[1];
            $icon = $iconMatch[1];
            $filename = basename($file, ".md"); // Nombre del archivo sin la extensión

            // Guarda la información en un arreglo
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'icon' => $icon,
                'filename' => $filename
            ];
        }
    }

    return $articles;
}

// Genera la lista de artículos en HTML
$articles = getArticles();
?>
