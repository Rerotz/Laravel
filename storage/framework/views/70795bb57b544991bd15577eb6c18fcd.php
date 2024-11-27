<!DOCTYPE html>
<html>
<head>
    <title>Información del Administrador</title>
</head>
<body>
    <h1>Bienvenido, Administrador <?php echo e($user['name']); ?></h1>
    <p>Email: <?php echo e($user['email']); ?></p>
    <p>Fecha de Nacimiento: <?php echo e($user['date_of_birth']); ?></p>
    <p>Sexo: <?php echo e($user['gender']); ?></p>
    <!-- Aquí puedes agregar opciones especiales solo para administradores -->
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jwt_inicio\resources\views/view_administrador.blade.php ENDPATH**/ ?>