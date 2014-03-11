<?php 

include ("../recursos/php/conexion.php");



/*$nueva_variable=$_POST['consulta'];

$link = mysql_connect("localhost", "root", "admin");

mysql_select_db("pruebas2", $link);

$result = mysql_query("SELECT * FROM agenda WHERE fecha = '$nueva_variable' ", $link);
    

//obtenemos los datos resultado de la consulta
    $row = mysql_fetch_array($result);


echo $row['id']."<br />";
echo $row['estatus']."<br />";
echo $row['fecha']."<br />";

$variable_guapa =  $row['estatus'];

if ($variable_guapa = 'proceso')
{
    
}*/
           
   
   function envsolicitud() 
	{ 
	// 	$ngrup = $_POST['fngrup'];
	// 	$tal = $_POST['ftalum'];
	// 	$hora = $_POST['fhor'];
	// 	$mot = $_POST['fmot'];
	// 	$fecha = mysql_real_escape_string($_POST['consulta']);
	// 	$escuela="unamamada";
	// 	$fecha=date('Y-m-d',strtotime(str_replace('/', '-', $fecha)));
 //       $sql = "INSERT INTO solicitudes (Num_Grupos ,TotalAlumnos ,HoraVisi ,Motivo ,Fecha,solicitante,cve_escuela, estatus ) 
	// 					VALUES ('{$ngrup}','{$tal}','{$hora}','{$mot}','{$fecha}','{$solicitante}','{$escuela}','{2}');";



 //       $inserted = mysql_query($sql); 
    
 //       echo "A D8!!!";

			$sql = "INSERT INTO directivos (CorreoE ,Nombre ,Cve_Escuela ,TelefonoIns ,Sexo) 
						VALUES ('algo8@algo1.com','mike perez','10DPR0042C','6188118129','Femenino');";
		$cosas = mysql_query($sql);


 		}



  //  	$al = mysql_query("SELECT Nombre FROM catalogoesc ORDER BY Nombre asc");
  //  function registraruser()
  //  {  			

  // 		//$nomb = $_POST['fnombres'];
		// // $app = $_POST['fApeP'];
		// // $apm = $_POST['fApeM'];
		// // $sexo = 'Femenino';
		// // $corre = $_POST['fCorreo'];

		// // $escuela = $_POST['esc'];
		// // $pass ="123";
		// // $nombreC = $nomb . $app . $apm;
		// // $tel = '6188118129';
		// // $matri = 'asd23';
		// $Clave = mysql_query("SELECT ClaveEsc FROM catalogoesc WHERE Nombre = '$escuela'; ");
		// $sql = "INSERT INTO directivos (CorreoE ,Nombre ,Cve_Escuela ,TelefonoIns ,Sexo) 
		// 				VALUES ('algo5@algo1.com','juan perez','10DPR0042C','6188118129','Femenino');";
		// cosas = mysql_query($sql);

		// //if ($tipo == "directivo") {
			
		// // }else
		// // {
		// // 	$sql = "INSERT INTO solicitudes (Matricula ,Nombre ,Edad ,Sexo ,Cve_Escuela) 
		// // 				VALUES ('{$matri}','{$nombreC}','13','{$sexo}','{$Clave}');";

		// // }
		
		
			

  //  }


   	// function perfiliar ()       -----execute
   	// {
   	// 	if ($tipo = 0) {
   	// 		$perfil = "SELECT * FROM directivos WHERE CorreoE = {$solicitante}"	;


   	// 			$mostrar = mysql_query($perfil);

   	// 		if ($row = mysql_fetch_row($mostrar)) {
   			
	   // 			echo "<form method = 'post' action = ''>";
	   // 			echo "Nombre: <input type= 'text' name ='nomb' value = "{$row[0]}" />";
	   // 			echo "Correo: <input type= 'text' name ='correo' value = "{$row[1]}" />";
	   // 			echo "Escuela: <input type= 'text' name ='esc' value = "{$row[2]}" />";
	   // 			echo "Telefono: <input type= 'text' name ='tel' value = "{$row[3]}" />";
	   			
	   			
	   // 		}



   	// 	}elseif ($tipo = 1) {
   	// 		$perfil = "SELECT * FROM alumnos WHERE Matricula = {$solicitante}"


   	// 			$mostrar = mysql_query($perfil);

   	// 		if ($row = mysql_fetch_row($mostrar)) {
   			
	   // 			echo "<form method = 'post' action = ''>";
	   // 			echo "Nombre: <input type= 'text' name ='nomb' value = "{$row[0]}" />";
	   // 			echo "Matricula: <input type= 'text' name ='correo' value = "{$row[1]}" />";
	   // 			echo "Edad: <input type= 'text' name ='esc' value = "{$row[2]}" />";
	   // 			echo "Grado: <input type= 'text' name ='tel' value = "{$row[3]}" />";
	   // 			echo "Grupo: <input type= 'text' name ='tel' value = "{$row[4]}" />";
	   // 			echo "Escuela: <input type= 'text' name ='tel' value = "{$row[5]}" />";
	   			
	   			
	   // 		}


   	// 	}
   		
   			

   	// 	$mostrar = mysql_query($perfil);

   	// 	if ($row = mysql_fetch_row($mostrar)) {
   			
   	// 		echo "<form method = 'post' action = ''>";
   	// 		echo "< >";
   	// 		echo "<>";
   	// 		echo "<>";
   	// 		echo "<>";
   	// 		echo "<>";
   	// 		echo "<>";
   	// 		echo "<>";

   	// 	}
   	// }



?> 