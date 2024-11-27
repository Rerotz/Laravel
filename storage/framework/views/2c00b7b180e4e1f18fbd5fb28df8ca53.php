<!DOCTYPE html>
<html>
<head>
    <title>Información del Usuario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo e($user['name']); ?></h1>
    <p>Email: <?php echo e($user['email']); ?></p>
    <p>Fecha de Nacimiento: <?php echo e($user['date_of_birth']); ?></p>
    <p>Sexo: <?php echo e($user['gender']); ?></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jwt_inicio\resources\views/view_usuario.blade.php ENDPATH**/ ?>