{\rtf1\ansi\ansicpg1252\cocoartf2639
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww11520\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
if ($_SERVER["REQUEST_METHOD"] == "POST") \{\
    $nombre = $_POST["nombre"];\
    $correo = $_POST["correo"];\
    $mensaje = $_POST["mensaje"];\
\
    $to = "tu@email.com"; // Reemplaza con tu direcci\'f3n de correo electr\'f3nico\
    $subject = "Nuevo mensaje de contacto";\
    $message = "Nombre: $nombre\\nCorreo: $correo\\nMensaje:\\n$mensaje";\
\
    mail($to, $subject, $message);\
    header("Location: index.html"); // Redirige de vuelta a la p\'e1gina principal\
\}\
?>\
}