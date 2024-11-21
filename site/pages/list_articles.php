<?php
function getArticles()
{
    $articles = [];
    $files = glob('articles/*.md'); // Search for all .md files in the articles folder

    foreach ($files as $file) {
        $content = file_get_contents($file);

        // Extract metadata block and remaining content
        if (preg_match('/^---(.*?)---\s*(.*)$/s', $content, $matches)) {
            $metadata = $matches[1]; // Metadata block
            $markdownContent = $matches[2]; // Remaining content after metadata

            // Extract specific metadata fields
            $title = null;
            $description = null;
            $icon = null;
            $videoUrl = null;

            if (preg_match('/^title:\s*(.+)$/m', $metadata, $titleMatch)) {
                $title = $titleMatch[1];
            }
            if (preg_match('/^description:\s*(.+)$/m', $metadata, $descMatch)) {
                $description = $descMatch[1];
            }
            if (preg_match('/^icon:\s*(.+)$/m', $metadata, $iconMatch)) {
                $icon = $iconMatch[1];
            }
            if (preg_match('/^video_url:\s*(.+)$/m', $metadata, $videoMatch)) {
                $videoUrl = $videoMatch[1];
            }

            $filename = basename($file, ".md"); // File name without extension

            // Add article to the list
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'icon' => $icon,
                'video_url' => $videoUrl, // Add the video_url field
                'filename' => $filename,
                'content' => $markdownContent // Optional: include the remaining content
            ];
        }
    }

    return $articles;
}

// Generate the list of articles in HTML
$articles = getArticles();
?>