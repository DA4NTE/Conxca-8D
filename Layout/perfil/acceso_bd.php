<?php 
    $host_db ="127.0.0.1"; // Host de la BD 
    $usuario_db ="root"; // Usuario de la BD 
    $clave_db ="thegazette"; // Contrase�a de la BD 
    $nombre_db ="base_prueba_pagina"; // Nombre de la BD 
     
    //conectamos y seleccionamos db 
    mysql_connect($host_db, $usuario_db, $clave_db); 
    mysql_select_db($nombre_db); 
?>