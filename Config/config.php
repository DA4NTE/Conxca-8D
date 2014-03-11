<?php


 //------------------------------->>CONFIG MYSQL
 //servidor 
 //define ('HOST','199.115.114.224');
 define ('HOST','localhost');
 //usuario bd
 define ('USER','root');
 //pass
 define ('PASS','admin');
 //base de datos
 define ('DB','pruebas');
 /*
	SET SESSION old_passwords=FALSE;
	SET PASSWORD = PASSWORD('[c0c0b1b1?]');
 */
 //------------------------------->>CONFIG ERROR
 //Log de errores
 ini_set("log_errors", 1);
 
 ini_set("error_log", "cache/log/error.log");
 //error_log( "Test" );

 //Errores en pantalla
 ini_set('display_errors', 1);
?>