<!-- Prueba para ver si funciona el modulo cliente -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login/login.php">
        <input type="text" name="correo" placeholder="Ingresa tu correo" required>
        <input type="password" name="pass" placeholder="Ingresa la contraseña" required>
        <input type="submit" value="Iniciar Sesion" name="btnLogin">
    </form>
</body>
</html>