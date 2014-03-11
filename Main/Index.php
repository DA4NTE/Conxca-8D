<?php 

  	//---------------Verifica si se inicio la sesion como administrador, de lo contrario, 
	//---------------lo envia al formulario acceso de usuarios

    session_start();
	if (!session_is_registered("Id")){

				session_destroy();
				header ('location:../Index_publico.php');
			//	include("../Entrar.php");
			//	die("<h3 align=center><font color=red>Registro necesario.</font></h3>");
	}
?>


<html>
<head>
<!--referencia del archivo de estilo y etiqueta <meta>-->
    <link href="../recursos/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../recursos/css/Alumno1.css" rel="stylesheet" type="text/css"/>
    <link href="../recursos/css/InicioSesion.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../recursos/js/jquery-2.0.3.min.js" ></script>
    <script type="text/javascript" src="../recursos/js/bootstrap.min.js" ></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <script language="JavaScript">
function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('bocadillo_user');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}

</script>
    

</head>

    <body>
     <div id="liga">  
                        
                            <form method="post" action="">
                                <TABLE BORDER=0; WIDTH=100px; id="tabla"> 
                                <TD><p class="login_in">Bienvenido:</p></TD>
                                <TD><p class="login_us"><?php echo $_SESSION['usuario'] ?></p></TD><br>
                                <a href="../index_publico.php"><p class="login_in" id="cerrar">Cerrar Sesion</p></a>
                                </TABLE>
                           </div>     
      
        
        
        
        
        
     <div id="contenedo">   
    <div><a href="#" target="_self"><img src="../recursos/img/agenda.png" id="agenda"></a></div>
    <div id="juego"><a href="#" target="_self"><img src="../recursos/img/juego.png" id="juegos"></a></div>
    

<div id="logo"><a href="../Layout/aboutus.html" target="_self"><img src="../recursos/img/Conxca.png" id="logoico"></a>
</div>
<div id="informacio"><a href="../Layout/contactus.html" target="_self"><img src="../recursos/img/info.png" id="informacion">
</div></a>
<div id="noticia"><a href="../Layout/notixcias.html" target="_self"><img src="../recursos/img/noticia.png" id="noticias">
 </div></a>
<div id="carr"><a href="../Layout/hexa.html" target="_self"><img src="../recursos/img/carro.png" id="carro">
</div></a>
 <div id="bocadillo_user">
                                <p  id="saludo">Hola soy Advertin y yo te puedo Ayudar:</p>
                                
                                    <a href="../Layout/FAQ.html"><p class="globos" id="faq">FAQ</p></a>
                                    <a href="../Layout/TerminosCondiciones.html"><p class="globos" id="term">Terminos y Condiciones</p></a>
                                    <a href="../Layout/Soporte.html"><p class="globos" id="con">Contacto</p></a>
                                    
                                
                       </div>
    <a href="#" onclick="muestra_oculta('bocadillo_user')" title=""><img src="../recursos/img/Advertin/ao.png" id="adv"></a>
    
     </div>   
        
        
        
        
    </body>




</html>