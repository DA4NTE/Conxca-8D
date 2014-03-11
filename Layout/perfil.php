

<!DOCTYPE html>
<html>
<head >
      
        <meta charset="utf-8">
        <link rel="stylesheet" href="../recursos/css/bootstrap.css">
        <script type="text/javascript" src="../recursos/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../recursos/js/bootstrap.min.js"></script>
    	<?php
    		include ("../recursos/php/conexion.php");
    	?>
        <style type="text/css">
        .avtr
        {
            height: 300px;
            width: 300px;

        }
        </style>

</head>

    
    <body style="background:gray;">
        
        
        
            <div class="row show-grid">
              
       
            <div class="col-xs-2"></div>
            <div class="col-xs-5">
       


            <?php
            
            echo $Id;

                    if ($tipo[Nivel] == 0) {
                           // $solicitante = "SELECT Usuario FROM usuariosg WHERE Usuario = '{$Id}' ";

                         $perfil = "SELECT * FROM directivos WHERE CorreoE = '{$Id}'";

                            echo $perfil;
                         $mostrar = mysql_query($perfil) ;
                         
                       while($rows=mysql_fetch_array($mostrar) or die(mysql_error())){ 
                                 

                                    if (strtoupper($rows[5])=="MASCULINO") {
                                        
                                    
            ?>
                                  <img class="avtr" src="../recursos/img/AVATAR/UDH_O.png">
                                  </div>
                                  <div class="col-xs-3">
            <?php 
                                }
                                 else{
                                        
                                    
            ?>
                                  <img class="avtr" src="../recursos/img/AVATAR/UDM_O.png">
                                  </div>
                                  <div class="col-xs-5">
            <?php 
                                }
                                 echo "Nombre:  ".$rows[2]. "<br/>";
                                 echo "Telefono Institucional: " .$rows[4]. "<br/>";
                                 echo "Correo Electronico: " .$rows[1]. "<br/>";
                                 echo "Escuela: " .$rows[3]. "<br/>";
                                 

                                //  echo "Correo: <input type= 'text' name ='correo' value = '$row[1]' />";
                                //  echo "Escuela: <input type= 'text' name ='esc' value = '$row[2]' />";
                                //  echo "Telefono: <input type= 'text' name ='tel' value = '$row[3]' />";
                                // echo "</form>";
                                
                              
                                    break;
                            }
            ?>
                            <br/>
                            <br/>
                            <br/>

                            <a data-toggle="modal" data-target="#contra">Cambiar Contraseña</a><br/>

                            <a href="">Registro de alumnos</a><br/>

                            <a data-toggle="modal" data-target="#Solicitud">Solicitar visita a la cabina</a><br/>

            <?php 


                     }elseif ($tipo[Nivel] == 1) {
                            //echo "si";
                        // $solicitante = 'SELECT Usuario FROM usuariosg WHERE Usuario = $Id;';
                         $perfil = "SELECT * FROM alumnos WHERE Matricula = '{$Id}' ;";


                             
                             $mostrar = mysql_query($perfil);

                       while($rows=mysql_fetch_array($mostrar) or die(mysql_error())){ 
                                 

                                    if (strtoupper($rows[4])=="MASCULINO") {
                                        
                                    
            ?>
                                  <img class="avtr" src="../recursos/img/AVATAR/UPO_O.jpg">
                                  </div>
                                  <div class="col-xs-5">
            <?php 
                                }
                                 else{
                                        
                                    
            ?>
                                  <img class="avtr" src="../recursos/img/AVATAR/UPA_O.jpg">
                                  </div>
                                  <div class="col-xs-5">
            <?php 
                                }
                            
                                 echo "Nombre: " .$rows[2]. "<br/>";
                                 echo "Edad: " .$rows[3]. "<br/>";
                                 echo "Escuela: " .$rows[7]. "<br/>";
                                 echo "Grupo:" .$rows[5]. "     ";
                                 echo "Grado:" .$rows[6]. "<br/>";

                                 if ($rows[8]=="") {
                                     echo "Correo Electronico: <a data-toggle='modal' data-target='#contra'> Asignar Correo</a>  <br/>";
                                 }else{
                                     echo "Correo Electronico:" .$rows[8]. "<br/>";
                                }
                                break;
                             }

            ?>
                            <br/>
                            <br/>
                            <br/>

                            <a data-toggle="modal" data-target="#contra">Cambiar Contraseña</a><br/>

                            

                            <a data-toggle="modal" data-target="#user">Cabiar usuario</a><br/>

            <?php 

                     }
             ?>
             </div>
            </div>
        
        
    </body>




</html>