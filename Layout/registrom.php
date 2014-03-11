<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../recursos/css/RegistroDirectivo1.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="../recursos/css/terminos.css" rel="stylesheet" type="text/css"/> -->
        <script type="text/javascript" src="../recursos/js/jquery-2.0.3.min.js" ></script>
        <script type="text/javascript" src="../recursos/js/bootstrap.min.js" ></script>

        <?php
           // include ("consulta.php");
           
        ?>

        <style>
            *{
            margin:0px;
            padding:0px;   
            }
           
           
            #obli{
            color:red;
            }
            .nom{
            font-size:20px;
            }
            
            .menu{
            background:url(bg-footer2.png);
            position: absolute;
            /*nos posicionamos en el centro del navegador*/
            top:50%;
            left:50%;
            /*determinamos una anchura*/
            width:600px;
            /*indicamos que el margen izquierdo, es la mitad de la anchura*/
            margin-left:-300px;
            /*determinamos una altura*/
            height:200px;
            /*indicamos que el margen superior, es la mitad de la altura*/
            margin-top:-100px;
            border:3px solid #000;
            padding:5px;
                 
            }
        </style>
        <script>
        function Letras() {
        if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
        event.returnValue = false;
        }
            
        function verform() 
        { 
        document.getElementById("frm").style.display="inline-block"; 
        document.getElementById("mostrar").style.display="none";
        document.getElementById("mostrar2").style.display="none";
        document.getElementById("menu").style.display="none";
        } 
             function verform2() 
        { 
        document.getElementById("frm").style.display="inline-block"; 
        document.getElementById("mostrar2").style.display="none";
        document.getElementById("mostrar").style.display="none";
        document.getElementById("school").style.display="none";
        document.getElementById("menu").style.display="none";
        document.getElementById("texto").innerHTML = "Registro de Usuario Alumno";
        document.getElementById("tipo").innerHTML = "alumno";
        } 
    </script>
    
    </head>
    
    <body style="background:gray;">
       
     
        <div class="modal-dialog" id="frm" style="display:none" name="frm" aling="center">
                <div class="modal-content">
                    <div class="modal-header">
                      
                        <div class="titulo">
                            <p><span class="iconouser dist" style="display:inline-block"></span></p>  
                            <span class="tituloCabecera" style="display:inline-block">
                                <span class="img" style="display-inline-block"><img src="../recursos/img/usuario2.png" alt="User"/></span>
                               <legend class="modal-title"  id="texto"><h4  id="myModalLabel dist" style="display:inline-block">REGISTRO DE USUARIO DIRECTIVO</h4></legend> 
                            </span> 
                        </div> 
                    </div>
                
                    <form  method="post" action="" >
                    <div class="modal-body">
                        <div class="row" style="margin:0 auto">
                            <div class="col-md-4">
                            <!-- <h6 id="tipo" style="display='none';" name="tipo">directivo</h6> -->
                                    <span class="obligatorios"><p align=right>Campos obligatorios(*)</p></span>
                                    <p><span class="nota"><b>Nota: Ingrese los datos con mayúsculas y sin acentos.</b></span></p>
                                    <div class="input-group moverN">
                                        <span class="co"><b>*</b></span> <label for="lnom"> Nombre(s)</label> 
                                        <input type="text" class="lnombre nom" name="fnombres" size=33 maxlength="20" onkeypress="Letras()" required="required" />
                                    </div>
                                    
                                    <div class="input-group moverAP">
                                        <span class="co"><b>*</b></span> <label for="lap"> Apellido paterno</label> 
                                        <input type="text" class="lnombre ap" name="fApeP" size=33 maxlength="20" onkeypress="Letras()" required />
                                    </div>
                                    
                                    <div class="input-group moverAM">
                                        <label for="lam"> Apellido materno</label> 
                                        <input type="text" class="lnombre am" name="fApeM" size=33 maxlength="20" onkeypress="Letras()" required />
                                    </div>
                    
                      

                                <div class="input-group moverS">
                                        <span class="co"><b>*</b></span><label for="ls"> Sexo</label> 
                                        <span class="moversh"><input type="radio"  name="transporte" value="1"  />Masculino <span class="ih"><img src="../recursos/img/hombre.png" alt="hombre"/></span> </span>
                                        <span class="moversm"> <input type="radio" class="mover2" name="transporte" value="2" />Femenino<span class="im"></span><img src="../recursos/img/mujer.png" alt="mujer"/></span>
                                       </div>

                                    <div class="input-group moverCE">
                                        <span class="co"><b>*</b></span><label for="lce"> Correo electrónico</label> 
                                        <input type="text" class="lnombre ce" name="fCorreo" title="correo@ejemplo.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z-]+(?:\.[a-zA-Z-]+)+.[a-zA Z-]*$" size=33 maxlength="20" required />
                                    </div>
                 
                                
                                    <div class="input-group moverVCE">
                                        <span class="co mcompletoVC"><b>*</b></span><label for="lvce"> Verificar correo electrónico</label>
                                        <input type="text" class="ivce lnombre" name="fVCorreo" title="correo@ejemplo.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z-]+(?:\.[a-zA-Z-]+)+.[a-zA Z-]*$" size=33 maxlength="20" required />
                                    </div>
                                     <div class="input-group moverVCE">
                                        <span class="co"><b>*</b></span><label for="lc"> Fechas de nacimiento</label>
                                        <input type="text" class="ivce lnombre"  name="fechan" size=33 maxlength="20" required />
                                    </div>
                                    <div class="input-group moverE" id="school">
                                        <span class="co"><b>*</b></span><label for="lce">Telefono Ins</label> 
                                          <input type="telefonoins" class="ivce ltelefono"  name="telins" size=33 maxlength="20" required />
                                       
                                    </div>

                             
                                    

                                    <div class="input-group moverC">
                                        <span class="co"><b>*</b></span><label for="lc"> Contraseña</label>
                                        <input type="password" class="lnombre contra" name="fPass" size=33 maxlength="20" required />
                                    </div>
                                    
                                    <div class="input-group moverVC">
                                        <span class="co"><b>*</b></span><label for="lvc"> Verificar contraseña</label> 
                                        <input type="password" class="lnombre vcontra" name="fVPass" size=33 maxlength="20" required />
                                    </div>
                                    
                                    <div class="input-group moverCAP nom" id="captcha"  align="center">
                                        
                                       
                   
                                               <script type="text/javascript">
                                                   
                                                   cerospam_client = 1395;
                                                   cerospam_form = 1584;
                                                   cerospam_background = "1";
                                                   cerospam_width = 200;
                                                   
                                               </script>
                                       <script type="text/javascript" src="http://www.cerospam.com.ar/captcha.php"></script><br/>
                                       <span class="co"><b>*</b></span> <label for="lcaptcha" name="cerospam_code">CAPTCHA</label><br/>
                                       <input  class="lnombre" type="text " size="10" name="cerospam_code" value="" required/>
                                    </div>
                                    
                                    <div class="input-group" aling="center">
                                        <input type="checkbox" name="politicas" value="1" required /><b>Acepto   </b><a data-toggle="modal" data-target="#terminos" ><b>terminos y condiciones</b></a>
                                    </div>
                                            </div>
                            </div>
                        </div>
                       </div>
                    
                         <div class="modal-footer" aling="center">
                                    <button type="submit" class="btn btn-primary BotonRegis ">Registrar</button>
                                    <input type="hidden" name="posteado" value="true"/>
                             </div>
                                
                        
                       </form>
                </div>
            </div>            
 

               
        
        <div class="menu" id="menu">
        <input type="submit" id="mostrar" style="font-size:50px; position:relative; left:50px;top:75px;" onclick="verform()" value="Directivo" /> 
        <input type="submit" id="mostrar2" style="font-size:50px; position:relative; left:170px;top:75px;" onclick="verform2()" value="Alumno" /> 
        </div>
        
        
        
        
        

            <!-- Terminos -->
<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            
        <div class="titulo" style="display:inline-block">
               <span class="img" style="display-inline-block"><img src="Imagenes/Terms.png" alt="Terminos"/></span>
               <h4 class="modal-title" id="myModalLabel" style="display:inline-block">Términos y condiciones</h4>
           
        </div> 
            
            
            
      </div>
      
        <div class="modal-body">
         <div class="row" style="margin:0 auto">
        <div class="col-md-4">    
        <form method="post" action="">

            
<p  align="justify">
<b>Términos y Condiciones para el uso del sitio web.</b>           
<br>
Todos los servicios y aplicaciones prestados por el propietario y la desarrolladora 
de Conxca están sujetos a los términos y condiciones siguientes. 
Lea detenidamente estos Términos y Condiciones (Términos y Condiciones) antes 
de utilizar este sitio web y cualquier contenido del mismo en sitios de redes sociales 
(incluyendo sin limitación alguna Facebook y Twitter) (conjuntamente: el Sitio). 
Estos Términos y Condiciones serán de aplicación a todas las visitas al y uso del 
Sitio, así como al Contenido (como se define más adelante), información, servicios 
y juegos ofrecidos a usted en o a través del Sitio. Al acceder al y utilizar el Sitio, 
usted acepta estos Términos y Condiciones en su totalidad, además de cualquier 
otra ley o reglamento que sea aplicable al Sitio y a Internet. Si no acepta estos 
Términos y Condiciones en su totalidad, por favor, abandone el Sitio.  
<br>
 
 
<b>Operador del Sitio </b>
<br>
El Sitio es operado por (definir quién será el operador del sitio) parcialmente o 
totalmente con la ayuda de (algún otro operador). 
 <br>
<b>Contenido del Sitio </b>
<br>
Todo el contenido que aparece en el Sitio, incluyendo, aunque sin limitarse a ellos, 
logos, iconos, texto, gráficos, fotografías, imágenes, imágenes en movimiento, 
sonido, ilustraciones y software (Contenido), es propiedad de la desarrolladora de 
Conxca y del propietario intelectual. Todos los elementos del Sitio, incluyendo, 
aunque sin limitarse a ellos, el diseño general y el Contenido, pueden estar 
protegidos por el derecho de autor, derechos morales, derechos sobre bases de 
datos, y otras leyes relativas al derecho de propiedad intelectual. Salvo en los casos 
expresamente permitidos en este u otro acuerdo con el propietario, ninguna parte o 
elemento del Sitio o su Contenido puede ser copiado o retransmitido por ningún 
medio. El Sitio, su contenido y todos los derechos relacionados continuarán siendo 
propiedad exclusiva de la desarrolladora y del propietario intelectual, salvo que se 
acuerde expresamente otra cosa. Todos los derechos están reservados. 
<br>
<b>Renuncia a las garantías </b>
<br>
El Sitio y el Contenido son gratuitos y se proporcionan “tal cual” sin ningún tipo de 
garantía. La información del Sitio es solamente a efectos de información general. 
La página no declara ni garantiza que la información y/o servicios incluidos en el 
Sitio sean precisos, completos o actuales, ni que el sitio o el servidor que permite 
que el Sitio esté disponible estén libres de virus o de cualquier otro componente 
perjudicial. Por lo tanto, el propietario no puede declarar o garantizar que el sitio no 
sufra interrupciones o esté libre de errores. No se ofrecen garantías ni declaraciones 
relativas al uso del Contenido en el Sitio en cuanto a exactitud, precisión, idoneidad, 
utilidad, oportunidad, fiabilidad, etc., o de lo contrario, en cada caso hasta el límite 
máximo permitido por la ley aplicable. 
<br>
<b>Limitación de responsabilidad  </b>
<br>
El uso que usted haga del Sitio es por su propia cuenta y riesgo. Ninguna parte 
involucrada en la creación, la producción o la distribución del sitio serán 
responsables de ningún daño directo, indirecto, especial, consecuencial, ni de otros 
daños que resulten del uso del Contenido en el Sitio, o de la imposibilidad de 
utilizarlo, incluidos los daños causados por virus, incorrecciones, información 
incompleta del Sitio, o el rendimiento del contenido, o cualquier otro daño derivado 
de o en relación con estos Términos y Condiciones. 
<br>
<b>Enlaces a terceros</b>
<br>
Para su comodidad y para mejorar el uso del Sitio, es posible que vez en cuando se 
proporcionen enlaces a sitios Web cuya propiedad y control están en manos de 
terceros. Estos enlaces le llevan fuera del servicio y del sitio y escapan al control 
del propietario e involucrados del sitio. Los sitios con los que usted puede enlazar 
tienen sus propios términos y condiciones independientes, así como su propia 
política de privacidad. Nuestra página no se hace responsable ni puede ser 
considerada responsable del contenido y las actividades de estos sitios. Por ello, su 
visita o acceso a estos sitios queda bajo su total responsabilidad. 
Tenga en cuenta que estos otros sitios pueden enviar sus propias cookies a los 
usuarios, recopilar datos o solicitar información personal y, por lo tanto, se aconseja 
que compruebe las condiciones de uso y las políticas de privacidad de estos otros 
sitios web antes de usarlos. 
<br>
<b>Uso incorrecto del Sitio </b>
<br>
Está prohibido utilizar el Sitio para enviar o transmitir cualquier contenido generado 
por el usuario (tal y como se define más adelante) que infrinja o pueda infringir 
cualquier derecho de propiedad intelectual de un tercero o que sea amenazador, 
falso, engañoso, subversivo, difamatorio, invasor de la privacidad, obsceno, 
pornográfico, abusivo, discriminatorio o ilegal, o que pueda constituir o incitar a 
conductas que podrían considerarse una infracción penal, violar los derechos de 
alguna de las partes o que puedan dar lugar de cualquier otra forma a 
responsabilidad civil o violar alguna ley.  
<br>
<b>Cambios en los términos </b>
<br>
La página se reserva el derecho, según su propio criterio, de cambiar, modificar, 
añadir o eliminar en cualquier momento parte de esos Términos y Condiciones. 
Compruebe estos términos periódicamente para informarse de dichos cambios. Si 
continua utilizando el Sitio después de haberse publicado los cambios de estos 
Términos y Condiciones, eso significará que acepta dichos cambios. 
</p>
        </form>
        </div>    
        </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary BotonDescargar Cam">Descargar<img src="Imagenes/Descargar.png" alt="Descargar"/></span></button>
      </div>
    </div>
  </div>
</div>

<!-- Fin modal tems -->



    
<?php  
 
//$nombre=$_POST['nombre'];


if (isset($_POST['posteado']))
{
    function Conectarse() 
    { 
        if (!($link=mysql_connect("localhost","root","admin"))) 
        { 
            echo "Error conectando a la base de datos."; 
            exit(); 
        } 
        if (!mysql_select_db("cxcbd",$link)) 
        { 
            echo "Error seleccionando la base de datos."; 
            exit(); 
        } 
        return $link; 
    }
    $link=Conectarse(); 
    //echo "Conexión con la base de datos conseguida.<br>";
    
   // $insert="INSERT INTO niveles(nombre) VALUES('$nombre')";

        $nomb = $_POST['fnombres'];
        $app = $_POST['fApeP'];
        $apm = $_POST['fApeM'];
        $var_sexo = $_POST['transporte'];
        if ($var_sexo==1){
            $sexo='Masculino';
        }
        else{
            $sexo='Femenino';
        }
        $escuela=$_POST['esc'];
        $corre = $_POST['fCorreo'];
        $pass=$_POST['fPass'];
        $nombreC = $nomb . $app . $apm;
        $tel = $_POST['telins'];
        $fecha1=$_POST['fechan'];
        $fecha1=date('Y-m-d', strtotime(str_replace('.', '/','-', $date)));
        $fecha1 = explode("-","fecha1"); 
        $fecha2 = explode("-",date("Y-m-d")); 
        $Edad = $fecha2[0]-$fecha1[0];
        if($fecha1[1]<=$fecha2[1] and $fecha1[2]<=$fecha2[2]){
        $Edad = $Edad - 1;
        } 

        $matricula="aqui va el algoritmo";
        $Clave = mysql_query("SELECT ClaveEsc FROM catalogoesc WHERE Nombre = '$escuela'; ");


$insert="INSERT INTO directivos(Edad,CorreoE ,Nombre ,Cve_Escuela ,TelefonoIns ,Sexo) VALUES ('$Edad','$corre','$nombreC', '1234567','$tel', '$sexo')";

mysql_query($insert)
or
die ( "<script languaje='javascript'>alert('Error al insertar ')</script> <meta http-equiv=Refresh content=\"0 ; url=registrom.php\">");
//echo $insert;
die ( "<script languaje='javascript'>confirm('Los datos del se guardaron corrctamente.')</script> <meta http-equiv=Refresh content=\"0 ; url=registrom.php\">");

//echo("Datos insertados corretamente: Los datos son: CURP: $curp". "<BR>"."NOMBRE: $nombre". "<BR>"."APELLIDO PATERNO: $apelpat". "<BR>"."APELLIDO MATERNO: $apelmat". "<BR>"."DOMICILIO: $domicilio". "<BR>"."TELEFONO: $telefono". "<BR>"."PERFIL: $perfil". "<BR>"."CONTRASEÑA: $contraseña". "<BR>");
mysql_close($link); //cierra la conexion
    echo "";
}
else
{
//  echo "PARTE 1";
    echo "";
}

?>

   </body>
</html>