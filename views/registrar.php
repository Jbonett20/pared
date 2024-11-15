<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en Bootstrap 5</title>
    <!-- Enlazando el CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include('../controllers/usuarios.php'); ?>
</head>

<body>

    <div class="container mt-5">
        <?php if (isset($_GET['response']) && !empty($_GET['response'])): ?>
            <?php if ($_GET['response'] == 1):  header('location: ../views/index.php'); ?>
            <?php elseif ($_GET['response'] == 2): ?>
                <div class="alert alert-danger" role="alert">
                    Error al registrar el usuario
                </div>
            <?php elseif ($_GET['response'] == 3): ?>
                <div class="alert alert-warning" role="alert">
                    Ya existe un usuario con este correo o identificación
                </div>
            <?php endif; ?>
        <?php endif; ?>


        <h2>Formulario de Registro</h2>
        <form action="../controllers/usuarios.php" method="post">
            <input id="register" name="register" type="hidden" />

            <!-- Nombre -->
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
            </div>

            <!-- Apellido-->
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingresa tu apellido" required>
            </div>

            <!-- Identificación -->
            <div class="mb-3">
                <label for="identificacion" class="form-label">Identificación</label>
                <input type="text" class="form-control" id="identification" name="identification" placeholder="Ingresa tu identificación" required>
            </div>

            <!-- Correo -->
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>

            <!-- Usuario -->
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            </div>

            <!-- Botón de Enviar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <!-- Enlazando el JS de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>