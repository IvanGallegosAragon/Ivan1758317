<?php
include "head.php";
    $nombre= $_POST["txtnombre"]; // Arreglo del nombre
    $edad= $_POST["txtedad"]; // Arreglo de la edad  
    $email= $_POST["txtemail"]; // Arreglo de email 
    $contrasena= $_POST["txtcontrasena"]; // Arreglo de contraseña
    echo "<p>Mi nombre es: " . $nombre."</p> ";
    echo "<p>Mi edad es: " . $edad."</p> ";
    echo "<p>Mi correo electronico es es: " . $email."</p> ";
    echo "<p>Mi contraseña 'No compartir' es: " . $contrasena."</p> ";
    echo "<a href='index.php'>Al incio</a>";   
include "footer.php";
?>