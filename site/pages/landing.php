<?php
include 'list_articles.php';
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
    <title>TechLab | Wiki</title>
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
    <div class="landing">
        <header>
            <h1>
                Plataformas Tecnológicas
                <br />
                al alcance de tu mano
            </h1>
            <p>
                Bienvenido al foro de aprendizaje de la asignatura Plataformas Tecnológicas, es hora de aprender juntos
                sobre computadoras.
            </p>
        </header>
        <div class="articles-list">
            <input type="text" id="search-bar" placeholder="Buscar artículos..." oninput="searchArticles()">
            <ul id="article-list">
                <!-- Aquí se mostrarán los artículos que inician con el prompt de busqueda -->
            </ul>
            <div class="articles">
                <!-- En esta lista se presentan los articulos disponibles en el sitio, ubicados en la carpeta 'articles' -->
                <?php foreach ($articles as $article): ?>
                    <a href="article.php?article=<?php echo htmlspecialchars($article['filename']); ?>" class="m-0 td-none">
                        <div class="article-card">
                            <div class="article-icon-box">
                                <span class="material-symbols-rounded"><?php echo htmlspecialchars(string: $article['icon']); ?></span>
                            </div>
                            <div class="article-info">
                                <h3><?php echo htmlspecialchars($article['title']); ?></h3>
                                <p><?php echo htmlspecialchars($article['description']); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
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
    </script>
</body>

</html>