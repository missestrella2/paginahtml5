<?php

if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.php" );
}

/*
if( ! isset( $_POST['nombre'] ) ){
    header("Location: index.html" );
}
*/


$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$msg = $_POST['msg'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($tel)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre / $email / $tel </p>
    <h2>Mensaje: $msg</h2>
    <h2></h2>
HTML;

//sintaxis de los emails email@algo.com || 
// nombre <email@algo.com>

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nombre $apellido <$email> \r\n";
$headers.= "To: Sitio web <admin@diarionuevo.7kb.net> \r\n";
// $headers.= "Cc: copia@email.com \r\n";
// $headers.= "Bcc: copia-oculta@email.com \r\n";


//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO 
//CUERPO 
$rta = mail('admin@diarionuevo.7kb.net', "Mensaje web: $asunto", $body, $headers, $msg );
//var_dump($rta);

//header("Location: gracias.html" );


///////////////////////////////////
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index.php" );
}

$nombre2 = $_POST['nombre2'];
$tel2 = $_POST['tel2'];
$email2 = $_POST['email2'];
$msg2 = $_POST['msg2'];

if( empty(trim($nombre2)) ) $nombre2 = 'anonimo';


$body2 = <<<HTML
    <h1>Solicitud de cotizacion desde la web</h1>
    <p>De: $nombre2 / $email2 / $tel2 </p>
    <h2>Mensaje: $msg2</h2>
    <h2></h2>
HTML;

//sintaxis de los emails email@algo.com ||
// nombre <email@algo.com>

$headers2 = "MIME-Version: 1.0 \r\n";
$headers2 .= "Content-type: text/html; charset=utf-8 \r\n";
$headers2 .= "From: $nombre2 <$email2> \r\n";
$headers2 .= "To: Sitio web <admin@diarionuevo.7kb.net> \r\n";
// $headers2.= "Cc: copia@email.com \r\n";
// $headers2.= "Bcc: copia-oculta@email.com \r\n";


//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO
//CUERPO
$rta2 = mail('admin@diarionuevo.7kb.net', "Mensaje web: COTIZAR",$body2, $headers2, $msg2 );

?>


