<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRM Beta</title>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">
    <style>
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-form {
            width: 350px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .error-message {
            color: #dc3545;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
    <!-- 🔹 Script oficial de Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
             <h1 style="text-align: center; color: #8B0000; margin-bottom: 20px; font-family: Arial, sans-serif;">
                CRM Beta V1.0
            </h1>
            <h2>Iniciar Sesión</h2>

            <?php if (isset($data['error'])) : ?>
                <p class="error-message"><?php echo $data['error']; ?></p>
            <?php endif; ?>

            <form action="<?php echo SITE_URL; ?>index.php?controller=login&action=login" method="POST">
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" 
                     style="font-size: 16px; padding: 6px; width: 335px;"
                    required>
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave" id="clave" 
                    style="font-size: 16px; padding: 6px; width: 335px;"
                    required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>
