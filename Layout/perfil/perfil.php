<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.LOCALHOST.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.LOCALHOTS.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perfil</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body><div id="principal">

    
    <div id="cuepoI">
       
    
<table bgcolor="#CCFFFF"align="center" width="400" border="2" cellspacing="10" cellpadding="10" top:"30">

    <tr>
    <td width="530">
       
<font size="5"><p align="center">Perfil</p>
<div align="center" width="300"> <img src ="HOMBRE.JPG" alt="truck"/></div> </font>
        
       
       
<?php 
   // include('acceso_bd.php'); 
  
  //  $perfil = mysql_query("SELECT * FROM base_prueba_pagina WHERE Nombre = 'angel'") or die(mysql_error());

$nueva_variable=$_POST['variableuno'];

$link = mysql_connect("localhost", "root", "admin");

mysql_select_db("pruebas", $link);

$result = mysql_query("SELECT * FROM alumnos WHERE Nombre = '$nueva_variable' ", $link);

echo "Nombre: ".mysql_result($result,0,"Nombre")."<br>";

echo "Edad: ".mysql_result($result,0,"Edad")."<br>";
echo "Sexo: ".mysql_result($result,0,"Sexo")."<br>";
echo "Nombre: ".mysql_result($result,0,"Escuela")."<br>";
echo "Nombre: ".mysql_result($result,0,"Grado")."<br>";
?> 
       <!--
        <strong>Edad:</strong><b ?=$Edad ?><br /> 
        <strong>Sexo:</strong><b ?=$Sexo ?><br  /> 
        <strong>Escuela:</strong><b ?=$Escuela ?><br /> 
        <strong>Grado:</strong><b ?=$Grado ?><br /> 
        <strong>Grupo:</strong><b ?=$Grpo ?><br /> 
        <strong>Matricula:</strong><b ?=$Matricula ?><br /> 
        <strong>Contraseña:</strong><b ?=$Contraseña ?><br /> 
        <strong>ID_Alumno:</strong><b ?= $ID_Alumnos ?><br /> 
        
        
        
 <strong>Nombre:</strong><b> <?php echo "".mysql_result($result,"Nombre")."<br>";?>    <br />

       -->
        
        
        
        </td>
        
  </tr>
</table>

   </div>
  </div>
 
</body>
</html>