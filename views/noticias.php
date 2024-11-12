<!doctype html>
<html lang="en">
    <head>
        <title>MURO INFORMATIVO</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <div class="container mt-5">
    <h2>AGREGAR NOTICIA</h2>
    <form action="../controllers/noticias.php"method="post">
    <input id="agregar" name="agregar" type="hidden"/>

        <!-- Nombre de la noticia-->
        <div class="mb-3">
            <label for="titulo" class="form-label">Nombre de la noticia</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escribe el nombre de la noticia"required >
        </div>

            <!-- noticia -->
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido de la Noticia</label>
            <input type="text-area" class="form-control" id="contenido" name="contenido" placeholder="Escribe la noticia"required>
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
</div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
