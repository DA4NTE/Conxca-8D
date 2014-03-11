<?php

	//----------------Comprueba que se envio el id y la contrase�a del usuario, si las tiene, se conecta a la BD (unipoli)
session_start(); 	//--------------- verifica que la contrase�a corresponda al id en la tabla usuarios e indica si lo encontro o no.
session_destroy();
if (isset($_POST['Entrar'])){
	$Id=$_POST['usuario'];
	$Clave=$_POST['pass'];
    
		include_once('recursos/php/cnx1.php');
	$db="cxcbd";
	//---------------------------Seleccion de base de datos
	mysql_select_db($db,$cnx1);		
	$Q="select * from usuariosg where usuario='$Id' and Pass='$Clave'";
	$Res = mysql_query($Q,$cnx1) or die(mysql_error($cnx1));
	if (mysql_num_rows($Res)==0)
	    {//$NoEsta=true;
		header("Location: index_publico.php");
		}
	else{
		//--si encontr� el usuario, verifica su responsabilidad( esta indica cuales son sus privilegios), crea 
		//--las sesiones necesarias y envia al formulario correspondiente la clave del usuario.
		$Datos=mysql_fetch_object($Res);
        session_start();        
        $_SESSION['usuario']= $Id;
			session_register("Id");			
			header("Location: main/index.php");	
		}		
		exit;
}


?>

<!DOCTYPE html>
    <html>
            <head>
            <meta charset="utf-8">
                    <link href="recursos/css/style.css" rel="stylesheet" media="screen">
                    <link rel="stylesheet" href="recursos/css/soporte.css">
            <!--FUNCION DE ADVERTO-->
<script language="JavaScript">
function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('bocadillo');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}

</script>

<link rel="stylesheet" href="recursos/css/terminos.css">
        <script type="text/javascript" src="recursos/jq/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="recursos/js/bootstrap.min.js"></script>
   <!--Funcion del faq-->
        <script type="text/javascript">
            $(function() {
                $('.trigger').click(function() {
                    $('.trigger').next('div').slideUp();
                    $(this).next('div').slideDown();
                });

            })
        </script> 
        </head>
        
            <body>

                           <div id="contenedo">   
    <div><a href="" target="_self"><img src="recursos/img/agenda.png" id="agenda"></a></div>
    <div id="juego"><a href="#" target="_self"><img src="recursos/img/juego.png" id="juegos"></a></div>
    

<div id="logo"><a href="Layout/aboutus.html" target="_self"><img src="recursos/img/Conxca.png" id="logoico"></a>
</div>
<div id="informacio"><a href="Layout/contactus.html" target="_self"><img src="recursos/img/info.png" id="informacion">
</div></a>
<div id="noticia"><a href="Layout/notixcias.html" target="_self"><img src="recursos/img/noticia.png" id="noticias">
 </div></a>
<div id="carr"><a href="Layout/inf_vial.html" target="_self"><img src="recursos/img/carro.png" id="carro">
</div></a>
                           
                    
                            <div id="liga">  
                        
                            <form method="post" action="">
                                <TABLE BORDER=0; WIDTH=100px; id="tabla"> 
                                <TD><p class="login2">Usuario:</p></TD>
                                <TD><input type=text NAME="usuario" size=18 maxlength="18" class="login"></TD><br>
                                    <TD><p class="login2">Contraseña:</p></TD>
                                    <TD><input type=password NAME="pass" size=16 maxlength="16" class="login"></TD>
                                    <TD><INPUT name="Entrar" type="submit" id="Entrar" value="Entrar" class="login" ></TD>
                                </TABLE>
                                <p id="reg_us" data-toggle="modal" data-target="#myModal_registro">Registrar Usuario</p>
                           </div>  
                       </form>
                        <div id="bocadillo">
                                <!--<p  id="saludo">¡Hola! mi nombre es Advertin y cualquier duda que tengas podrás preguntarme.</p>-->
                                
                                    
                                    <p class="globos" id="faq" data-toggle="modal" data-target="#myModal_faq">FAQ</p>
                                    <p class="globos" id="term"data-toggle="modal" data-target="#myModal_term">Terminos y Condiciones</p>
                                    <p class="globos" id="con" data-toggle="modal" data-target="#myModal_sop">Contacto</p>
                                    
                                
                       </div>
          <a href="#" onclick="muestra_oculta('bocadillo')" title=""><img src="recursos/img/Advertin/ao.png" id="adv"></a>
                



<!--MODAL FAQ-->

                <div class="modal fade" id="myModal_faq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            
        <div class="titulo"style="display:inline-block">
         <p><span class="iconouser " style="display:inline-block"></span></p>  
           <span class="tituloCabecera" style="display:inline-block">
             
               <h4 class="modal-title" id="myModalLabel dist" style="display:inline-block">FAQ</h4>
                 <span class="img" style="display-inline-block"><img src="recursos/img/Ques.png" alt="User"/></span>
            </span> 
        </div> 
            
            
            
      </div>
      
        <div class="modal-body">
         <div class="row" style="margin:0 auto">
        <div class="col-md-4">    
        <form method="post" action="">
            <div class="anclas">
           
             <p class="trigger">. ¿Cómo me puedo registrar? </p>
             <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿Cómo registrarme si tengo una matrícula? </p>
             <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿Cómo inicio sesión? </p>
            <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿Cómo puedo hacer una cita para que la cabina visite mi escuela?  </p>
            <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿Qué ventajas tiene ser un usuario registrado? </p>
            <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿No he recibido el correo para validar mi cuenta? </p>
            <div class="info">infotmacion 1</div>
             <p class="trigger">. ¿Mi duda no aparece en las FAQ?  </p>
             <div class="info">infotmacion 1</div>
             </div>
            
            
        </form>
        </div>    
        </div>    
      </div>
    
    </div>
  </div>
</div>
<!--MODAL TERM-->

<div class="modal fade" id="myModal_term" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            
        <div class="titulo" style="display:inline-block">
               <span class="img" style="display-inline-block"><img src="recursos/img/Terms.png" alt="Terminos"/></span>
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
        <a href="Descargas/terminos.pdf" target="_blank"><button type="button"  class="btn btn-primary BotonDescargar Cam" >Descargar<img src="recursos/img/Descargar.png" alt="Descargar"/></span></button></a>
      </div>
    </div>
  </div>
</div>
<!--MODAL SOPORTE-->
<div class="modal fade" id="myModal_sop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
        <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            
        <div class="titulo" style="display:inline-block">
               <span class="img" style="display-inline-block"><img src="recursos/img/support.png" alt="Support"/></span>
               <h4 class="modal-title" id="myModalLabel" style="display:inline-block">Contacto con soporte técnico </h4>
           
        </div> 
            
            
            
      </div>
      
        <div class="modal-body">
         <div class="row" style="margin:0 auto">
        <div class="col-md-4">    
        <form method="post" action="">
            <div class="textos">
                
            <div class="input-group moverNom">
             <label for="lNgrupos">Nombre</label> 
             <input type="text" class="inputs" name="fnom" />
            </div>
            
             <div class="input-group moverCE">
             <label for="ltalumnos">Correo electrónico</label> 
             <input type="text" class="inputs" name="fce" />
            </div>
            
            <div class="input-group moverAsun">
              <label for="lhora">Asunto</label> 
              <input type="text" class="inputs" name="fasun" />
            </div>
            
             <div class="input-group moverCont">
             <label for="lhora">Contenido</label> 
             <textarea rows="10" cols="20" wrap="soft" class="inputs"></textarea>
            </div>
            </div>
           
        </form>
        </div>    
        </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary BotonEnviar Cam">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!--MODAL REGISTRO DE USUARIOS-->
<div class="modal fade" id="myModal_registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        
                        <div class="titulo">
                                <span class="img" style="display-inline-block"><img src="recursos/img/usuario4.png" alt="User"/></span>
                                <h4 class="modal-title" id="myModalLabel" style="display:inline-block">REGISTRO DE USUARIO</h4>
                            </span>
                        </div>
                    </div>

                <div class="modal-body">
                    <div class="row" style="margin:0 auto">
                        <div class="col-md-4">
                            <form method="post" action="">
                                <div class="btn-group" data-toggle="buttons">
                                    <div class="input-group">
                                      <form name="form1" method="post" action="registrar_usuario.php"> 
                                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                                        <label class="btn btn-primary Pos">
                                        <input type="radio" name="rad" id="directivo" value="directivo"> Usuario directivo
                                        </label>
                                    </div>
                                    
                                    <div class="input-group">
                                         <span class="input-group-addon glyphicon glyphicon-user"></span>
                                         <label class="btn btn-primary Pos">
                                        <input type="radio" name="rad" id="comun" value="comun"> Usuario común
                                        </label>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary BotonRegis">Registrar</button>
                     </form> 
                </div>
            </div>
        </div>
    </div>

       
        </body>

    </html>