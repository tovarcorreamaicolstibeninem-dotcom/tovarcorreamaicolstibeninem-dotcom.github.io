<?php
session_start();

// Usuario y contraseña predefinidos
$usuario_valido = "mmja@gmail.com";
$contrasena_valida = "mmja";

$mensaje_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = strtolower(trim($_POST["correo"]));
    $contrasena = trim($_POST["contrasena"]);

    if ($correo === $usuario_valido && $contrasena === $contrasena_valida) {
        $_SESSION["usuario"] = $correo;
        header("Location: ./ciclas.html");
        exit();
    } else {
        $mensaje_error = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-bottom: 1rem;
        }
        input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            margin-bottom: 1rem;
        }
        button {
            width: 100%;
            padding: 0.5rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if ($mensaje_error): ?>
            <div class="error"><?php echo $mensaje_error; ?></div>
        <?php endif; ?>
        <form method="POST">
            <input type="email" name="correo" required placeholder="Correo electrónico">
            <input type="password" name="contrasena" required placeholder="Contraseña">
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
