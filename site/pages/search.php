<?php
$directory = 'articles';
$query = isset($_GET['query']) ? strtolower($_GET['query']) : '';

$articles = [];

// Lee todos los archivos .md en la carpeta
foreach (glob("$directory/*.md") as $filePath) {
    $content = file_get_contents($filePath);

    // Extrae metadatos (título y descripción)
    if (preg_match('/^---(.*?)---/s', $content, $matches)) {
        $metadata = $matches[1];
        
        // Busca título y descripción en los metadatos
        preg_match('/^title:\s*(.+)$/m', $metadata, $titleMatch);
        preg_match('/^description:\s*(.+)$/m', $metadata, $descMatch);
        
        $title = $titleMatch[1] ?? 'Sin título';
        $description = $descMatch[1] ?? 'Sin descripción';
        
        // Nombre del archivo sin extensión
        $filename = basename($filePath, '.md');
        
        // Agrega el artículo a la lista si coincide con la búsqueda
        if (!$query || strpos(strtolower($title), $query) !== false || strpos(strtolower($description), $query) !== false) {
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'filename' => $filename
            ];
        }
    }
}

// Envía los artículos como JSON
header('Content-Type: application/json');
echo json_encode($articles);
