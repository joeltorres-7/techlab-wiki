# TechLab - Article Listing and Viewer

Este es un proyecto sencillo en PHP para listar y ver artículos almacenados como archivos Markdown (`.md`). El proyecto está diseñado para una gestión fácil de contenido, proporcionando enlaces dinámicos a páginas de artículos individuales.

## Características

- Listar artículos desde un directorio específico.
- Generar dinámicamente enlaces a páginas individuales de artículos.
- Extracción básica de los títulos de los artículos para su visualización.

## Instalación

### Clonar el repositorio

```bash
git clone https://github.com/joeltorres-7/techlab-wiki
cd techlab-wiki
```

### Organizar los artículos

Coloca tus archivos Markdown (`.md`) en el directorio `articles`.

### Ejecutar la aplicación

Usa un servidor PHP local (por ejemplo, XAMPP, MAMP) o el servidor integrado de PHP:

```bash
php -S localhost:8000
```

Accede a la aplicación mediante [http://localhost:8000/index.php](http://localhost:8000/index.php) en tu navegador.

## Estructura de Archivos

- `index.php`: Página principal que muestra la lista de artículos.
- `list_articles.php`: Contiene la función para listar y enlazar los artículos.
- `article.php`: Muestra el contenido de artículos individuales.

## Uso

- Visita `index.php` para ver la lista de artículos.
- Haz clic en cualquier artículo para ver su contenido.

## Licencia

Este proyecto es de código abierto y está disponible bajo la Licencia MIT.
