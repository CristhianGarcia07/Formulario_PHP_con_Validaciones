<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="formulario">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre:"  value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su email:"     value="<?php if(!$enviado && isset($email)) echo $email ?>">

            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente &#x2714;&#xFE0F;</p>
                </div>
            <?php endif ?>
                
            <input type="submit" value="Send" name="submit" class="btn-primary">

        </form>
    </div>
</body>
</html>