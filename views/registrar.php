<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en Bootstrap 5</title>
    <!-- Enlazando el CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Formulario de Registro</h2>
    <form>
        <!-- Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
        </div>

        <!-- Apellido-->
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="last_name" placeholder="ingresa tu apellido">
        </div>

        <!-- identificacion -->
        <div class="mb-3">
            <label for="identificacion" class="form-label">identificacion</label>
            <input type="text" class="form-control" id="identification" placeholder="ingresa tu identificacion">
        </div>

        
 <!-- correo-->
 <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="ingresa tu correo electronico">
        </div>

         <!-- usuario -->
         <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="ingresa tu usuario">
        </div>

         <!-- contraseña -->
         <div class="mb-3">
            <label for="contraseña" class="form-label">contraseña</label>
            <input type="text" class="form-control" id="password" placeholder="ingresa tu contraseña">
        </div>
       

        <!-- Fecha de creacion -->
        <div class="mb-3">
            <label for="fechade cracion" class="form-label">Fecha de creacion</label>
            <input type="date" class="form-control" id="date_creation">
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
