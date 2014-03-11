<?php
 global $link;

function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","root","admin"))) 
   { 
      //echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("pruebas2",$link)) 
   { 
      //echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

$link=Conectarse();
$tipo = mysql_query("SELECT Nivel FROM usuariosg WHERE Usuario = '".$Id."'"); 
$tipo = mysql_fetch_assoc($tipo);
//echo "Conexión con la base de datos conseguida.<br>"; 

//mysql_close($link); //cierra la conexion 
?> 