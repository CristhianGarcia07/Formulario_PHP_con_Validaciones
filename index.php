<?php

$errores = '';
$enviado = '';

if(isset($_POST['submit'])){
    
    $nombre   =  $_POST['nombre'];
    $email    =  $_POST['email'];
    $mensaje  =  $_POST['mensaje'];
    
    if (!empty($nombre)) {
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }else{
            $errores .= '<li> Por favor ingrese un nombre. &#x26A0;&#xFE0F </li> <br>';
    }

    if (!empty($email)) {
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores .= '<li> Por favor ingrese un email valido. &#x26A0;&#xFE0F </li> <br>';
        }

    }else{
        $errores .= '<li> Por favor ingrese un email. &#x26A0;&#xFE0F</li> <br>';
    }
        
    if(!empty($mensaje)){

        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);

    }else{
        
        $errores .= '<li> Por favor ingrese un mensaje. &#x26A0;&#xFE0F</li>';
    }

    // if (!$errores) {
    //     $enviar_a = 'Tuempresa@gmail.com';
    //     $asunto = 'Correo enviado desde mipagina.com';
    //     $mensaje_preparado = "De $nombre \n";
    //     $mensaje_preparado .= "Correo $email \n";
    //     $mensaje_preparado .= "Mensaje" . $mensaje;

    //     mail($enviar_a, $asunto, $mensaje_preparado);
    // }

}

if(empty($errores)){
    $enviado = true;
}

    
require './vista/index.view.php';
    
?>