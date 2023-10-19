<?php
<html>
        <head>
            <title>Título de la página</title>
        </head>
        <body>
            <img src="ruta_de_la_imagen.jpg" alt="Imagen de ejemplo">
            <h1>Título de la página</h1>
            <p>Descripción de la página.</p>
        </body>
        </html>


// Lista de servidores a bloquear
$servidores_bloqueados = array(
'a.ns.facebook.com',
'b.ns.facebook.com',
'c.ns.facebook.com',
'd.ns.facebook.com',
'c.ns.facebook.com',
'b.ns.facebook.com',
'a.ns.facebook.com',
'd.ns.facebook.com',

);

// Obtener el nombre de dominio del servidor al que se intenta acceder
$dominio_servidor = $_SERVER['SERVER_NAME'];

// Comprobar si el servidor al que se accede está en la lista de servidores bloqueados
if (in_array($dominio_servidor, $servidores_bloqueados)) {
    // Verificar el agente de usuario (User-Agent) para Android e iPhone
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_agent, 'Android') !== false || strpos($user_agent, 'iPhone') !== false) {
        // Redirigir al enlace afiliado en caso de bloqueo y si el usuario está en Android o iPhone
        $enlace_afiliado = 'https://paneldirecto.vercel.app'; // Reemplaza con tu enlace afiliado
        header("Location: $enlace_afiliado");
        exit;
    }
}

// Si no está en la lista de servidores bloqueados o si no está en Android o iPhone, se permite el acceso
echo "Bienvenido al servidor.";
?>
